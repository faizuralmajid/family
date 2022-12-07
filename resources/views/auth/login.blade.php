<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Fun Day</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/login.css') }}>
</head>

<body>
    <div class="row m-0 h-100">
        <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
            <img src={{ URL::asset('icons/banner_login_01.png') }} class="w-100">
        </div>
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <div class="text-center">
                <img src={{ URL::asset('icons/logo.png') }} class="w-60" />
            </div>

            <form class="w-50" id="loginSubmit" action="{{ route('login.custom') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" id="email" name="email"
                        placeholder="Alamat Email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm" id="password" name="password"
                        placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn w-100 btn-custom" type="submit">
                    <span class="btn-text center">Login</span>
                </button>

                <button class="btn w-100" disabled>
                    <span class="btn-text center">Atau</span>
                </button>

                <a class="btn w-100 btn-custom-register" href="{{ route('register-user') }}">Register</a>

            </form>
        </div>
    </div>
</body>
<script src="https://dev-famday.air.id/plugins/jquery/jquery-3.6.1.min.js"></script>

</html>
