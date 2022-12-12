<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Family Day Admin</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


<body class="familyDay">
    <div id="root" class="root mn--max hd--expanded">
        <section id="content" class="content">
            <div class="content__header content__boxed overlapping">
                <div class="content__wrap">
                    <div class="d-md-flex align-items-end">
                        <div class="me-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="">Family Day</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                            <h2 class="page-title mb-0 mt-2"></h2>

                            <p class="lead mb-lg-0"></p>

                        </div>
                        <div class="flex-grow-1 d-flex flex-wrap justify-content-end align-items-center gap-3">
                            <button type="button" class="btn btn-bg-purple btn-sm hstack gap-2">
                                Amazing Event 2022
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="row">

                <div class="col-xl-1">

                </div>
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="bi bi-people-fill"></i>
                                        </div>

                                        <div class="col-auto">
                                            <h3 class="text-dark fw-bold">100</h3>
                                        </div>
                                        <div>
                                            <div class="mb-0 font-weight-bold text-gray-800 text-center">Total Kuota
                                                Peserta</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i id="i-size" class="bi bi-person-lines-fill"></i>
                                        </div>

                                        <div class="col-auto">
                                            <h3 class="text-dark fw-bold">85</h3>
                                        </div>
                                        <div>
                                            <div class="mb-0 font-weight-bold text-gray-800 text-center">Total Peserta
                                                Terdaftar</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="bi bi-person-fill-check"></i>
                                        </div>

                                        <div class="col-auto">
                                            <h3 class="text-dark fw-bold">15</h3>
                                        </div>
                                        <div>
                                            <div class="mb-0 font-weight-bold text-gray-800 text-center">Total Peserta
                                                Check-In</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4" style="padding-bottom: 15px">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 fw-bold text-dark ">Peserta Check-In</h5>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card shadow mb-4" style="padding-bottom: 43px">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h5 class="m-0 fw-bold text-dark ">Presentase Peserta</h5>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <span class="btn btn-primary btn-sm">85%</span> Terdaftar
                                </span>
                                <span class="mr-2">
                                    <span class="btn btn-success btn-sm">15%</span></i> Check-In
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>


        <nav id="famdaynav-container" class="famdaynav">
            <div class="famdaynav__inner">
                <div class="famdaynav__top-content scrollable-content pb-5">
                    <div class="famdaynav__profile mt-3 d-flex3">
                        <div class="mt-2 d-mn-max"></div>
                        <div class="mininav-toggle text-center py-2">
                            <img class="famdaynav__logo img-md rounded-circle " src="{{ URL::asset('icons/logo.png') }}"
                                alt="Logo Picture">
                        </div>
                    </div>

                    <div class="famdaynav__categoriy py-3">
                        <ul class="famdaynav__menu nav flex-column">
                            <li class="nav-item has-sub">
                                <a href="{{ route('dashboard') }}" class="mininav-toggle nav-link collapsed"><i
                                        class="bi bi-house-door"></i>
                                    <span class="nav-label ms-1">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('event') }}" class="nav-link">
                                    <i class="bi bi-calendar3"></i>
                                    <span class="nav-label ms-1">Events</span>
                                </a>
                            </li>
                            @if ($hakakses == 'superuser')
                                <li class="nav-item">
                                    <a href="" class="nav-link mininav-toggle"><i class="bi bi-people"></i>
                                        <span class="nav-label mininav-content ms-1">Daftar User</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.listpembayaran') }}" class="nav-link mininav-toggle"><i
                                            class="bi bi-cash-coin"></i>
                                        <span class="nav-label mininav-content ms-1">List Pembayaran</span>
                                    </a>
                                </li>
                            @elseif ($hakakses !== 'free' && $hakakses !== 'waiting')
                                <li class="nav-item">
                                    <a href="{{ route('unsubscribed') }}" class="nav-link mininav-toggle"><i
                                            class="bi bi-envelope-slash"></i>
                                        <span class="nav-label mininav-content ms-1 btn btn-danger">Unsubscribe</span>
                                    </a>
                                </li>
                            @elseif ($hakakses == 'waiting')
                                <li class="nav-item">
                                    <a class="nav-link mininav-toggle"><i class="bi bi-hourglass-split"></i>
                                        <span class="nav-label mininav-content ms-1 btn btn-primary">Waiting</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="famdaynav__bottom-content border-top pb-2">
                    <ul id="famdaynav" class="famdaynav__menu nav flex-column">
                        <li class="nav-item ">
                            <a href="{{ route('signout') }}" class="nav-link" aria-expanded="false">
                                <i class="bi bi-box-arrow-left"></i>
                                <span class="nav-label ms-1">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>

    <script src="https://dev-famday.air.id/plugins/jquery/jquery-3.6.1.min.js"></script>
    <script src="https://dev-famday.air.id/plugins/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://dev-famday.air.id/plugins/validate/jquery.validate.min.js"></script>
    <script src="https://dev-famday.air.id/plugins/validate/additional-methods.min.js"></script>
    <!-- Page level plugins -->
    <script src="{{ URL::asset('js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset('js/chart-demo.js') }}"></script>
    <script src="{{ URL::asset('js/chart-area.js') }}"></script>


</body>

</html>
