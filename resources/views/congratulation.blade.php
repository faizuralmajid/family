<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Fun Day</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css') }}>

</head>

<body class="h-100">
    <form>
        <a type="button" onclick="history.go(-1)" style="margin-left: 20px"><i class="bi bi-arrow-bar-left"></i></a>
    </form>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <img src="{{ URL::asset('icons/icon_congrats.svg') }}" class="mx-auto d-block text-center" style="width: 50px" />
                <!-- Form -->
                <h1 class="text-center">Sekarang kamu berlangganan</h1>
                <h1 class="text-center">Premium Gold</h1>
                <p class="text-center" style="margin-bottom: 0px">Pembelianmu sudah berhasil . Tanda terima untuk pesanan</p>
                <p class="text-center">No.0156354342 akan dikirimkan ke email mu</p>
                <p class="text-center fw-bold">Welcome to Premium</p>

                <!-- Input fields -->

                <a class="btn w-100 btn-primary fw-bold" style="background: rgba(110, 95, 180, 1)" href="{{ route('dashboard') }}">
                    <span class="btn-text center">Create Event-Mu Sekarang</span>
                </a>
                <!-- Form end -->
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
