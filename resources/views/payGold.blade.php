<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/login.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body class="h-100">

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <h1 class="text-center" style="padding-bottom: 0px; padding-top: 10px">Dapatkan Premium Platinum</h1>
            <div class="col-5 col-md-5 col-lg-4" style="margin-right: 20px ">
                <div class="row">
                    <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;padding-top: ">
                        <div class="text-center position-relative box" style="padding-top: 10px">
                            <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text">
                                <img src="{{ URL::asset('icons/icon_premium.svg') }}" style="width: 20px" /> Paketmu
                            </h4>
                            <hr>

                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Dapat diikuti oleh 100
                                participant
                            </p>
                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Dapat create event 3 kali</p>
                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Tidak dapat melihat data user
                            </p>
                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Admin hanya satu orang saja</p>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-5 col-md-5 col-lg-4">
                        <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;">
                            <div class="text-center position-relative box">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 3px">
                                    <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text">
                                        Diskon 0%
                                    </h4>
                                    <hr>

                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"> 1 Bulan
                                    </p>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                            class="bi bi-check-circle-fill black-text"></i> Rp50k/month
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Total
                                    </p>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Rp50.000,00
                                    </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-md-5 col-lg-4">
                        <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;">
                            <div class="text-center position-relative box">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 3px">
                                    <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text">
                                        Diskon 0%
                                    </h4>
                                    <hr>

                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"> 1 Bulan
                                    </p>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                            class="bi bi-check-circle-fill black-text"></i> Rp50k/month
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Total
                                    </p>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Rp50.000,00
                                    </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-md-5 col-lg-4">
                        <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;">
                            <div class="text-center position-relative box">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 3px">
                                    <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text">
                                        Diskon 0%
                                    </h4>
                                    <hr>

                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"> 1 Bulan
                                    </p>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                            class="bi bi-check-circle-fill black-text"></i> Rp50k/month
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Total
                                    </p>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Rp50.000,00
                                    </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-5 col-md-5 col-lg-6" style="background: #F7F5F5; padding: 20px">
                <h5 class="fw-bold">Metode Pembayaran Transfer:</h5>
                <form action="{{ route('update-addpay') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="no_pembelian" value="3435353255">
                    <input type="number" name="no_rekening" class="form-control" placeholder="Masukan No Rekening Anda">
                    <input type="hidden" name="typesubscribe" value="Gold">
                    <input type="hidden" name="durasi" value="2 Bulan">
                    <input type="hidden" name="total_bayar" value="69000">
                    <input type="hidden" name="status" value="waiting"><br>
                    <br>
                    <img src="{{ URL::asset('icons/image3.png') }}" alt="" style="width: 40px">
                    <h5>Bank Mandiri</h5>
                    <p>No.Rekening:</p>
                    <h4 class="fw-bold">896 7837 2191 0983</h4>
                    <label for="myfile">Pilih Bukti Pembayaran (PNG atau JPG)</label><br>
                    <input type="file" id="payimage" class="form-control" name="payimage"><br><br>
                    <div class="row justify-content-center align-items-center">
                        <div class="col text-center">
                            <a class="btn btn-custom" href="{{ route('dashboard') }}" >cancel</a>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-custom" type="submit">Mulai Berlangganan</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>
