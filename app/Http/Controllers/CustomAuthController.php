<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'no_handphone' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'no_handphone' => $data['no_handphone'],
            'subscribed' => 'free',
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('dashboard')->with('hakakses', $user->subscribed);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function congratulation()
    {
        return view('congratulation');
    }

    public function updatesubcribed(Request $request, $id)
    {
        $user = Auth::user();
        $data = User::where($user->id);
        $data->update(array('subscribed' => $id));

        return redirect()->route('pay')->with('success', 'Data Berhasil Di Update');
    }

    public function upgrade()
    {
        return view('upgrade');
    }

    public function pay()
    {
        return view('pay');
    }

    public function payGold()
    {
        return view('payGold');
    }

    public function addpay(Request $request)
    {
        $request->validate([
            'payimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('payimage')->getClientOriginalExtension();

        $request->file('payimage')->move(public_path('pembayaran'), $imageName);

        $user = Auth::user();
        $no_pembelian       = $request->input('no_pembelian');
        $no_rekening       = $request->input('no_rekening');
        $id_user            = $user->id;
        $typesubscribe     = $request->input('typesubscribe');
        $durasi             = $request->input('durasi');
        $total_bayar        = $request->input('total_bayar');
        $status             = $request->input('status');
        $path               = $imageName;

        $save = new Pay;

        $save->no_pembelian = $no_pembelian;
        $save->no_rekening = $no_rekening;
        $save->id_user = $id_user;
        $save->typesubscribe = $typesubscribe;
        $save->durasi = $durasi;
        $save->total_bayar = $total_bayar;
        $save->status = $status;
        $save->path = $path;

        $save->save();

        return redirect('congratulation')->with('status', 'Bukti Pembayaran Sukses');
    }

    public function listpembayaran()
    {
        $user = Auth::user();
        $data['hakakses'] = $user->subscribed;
        $data['rows'] = Pay::join("users", function ($join) {
            $join->on("users.id", "=", "pays.id_user");
        })->get();
        return view('listpembayaran', $data);
    }

    public function verifikasi($id)
    {
        $data['datapay'] = Pay::join("users", function ($join) {
            $join->on("users.id", "=", "pays.id_user");
        })->where('pays.no_pembelian', $id)->get();
        return view('verifikasi', $data);
    }

    public function verifikasipay(Request $request)
    {

        $data = Pay::where('no_pembelian', $request->input('no_pembelian'))
            ->update([
                'status' => $request->input('status'),
            ]);

            //dd($request->input('id_user'));

        $data2 = User::where('id', $request->input('id_user'))
            ->update([
                'subscribed' => $request->input('typesubscribe'),
            ]);

        return redirect('listpembayaran')->with('status', 'Bukti Pembayaran Sukses');
    }
}
