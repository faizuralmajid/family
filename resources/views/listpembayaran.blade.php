<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Web Admin untuk acara Family Day.">
    <meta name="author" content="Muhammad Rizqi">
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
                                    <li class="breadcrumb-item"><a href="https://dev-famday.air.id">Family Day</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">List Pembayaran</li>
                                </ol>
                            </nav>
                            <h2 class="page-title mb-0 mt-2"></h2>

                            <p class="lead mb-lg-0"></p>

                        </div>
                        <div class="flex-grow-1 d-flex flex-wrap justify-content-end align-items-center gap-3">
                            <a type="button" class="btn btn-bg-purple btn-sm hstack gap-2"
                                href="{{ route('register.upgrade') }}">
                                Upgrade
                                <i class="bi bi-award text-warning"></i>
                            </a>
                            <button type="button" class="btn btn-bg-purple btn-sm hstack gap-2" data-bs-toggle="modal"
                                data-bs-target="#eventsModal">
                                <i class="bi bi-plus-circle"></i>
                                Create Event
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content__boxed">
                <div class="content__wrap container">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Pembelian</th>
                                <th>Nama </th>
                                <th>Subcribe</th>
                                <th>Durasi</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($rows as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->no_pembelian }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->typesubscribe }}</td>
                                    <td>{{ $row->durasi}}</td>
                                    <td>{{ $row->total_bayar}}</td>
                                    <td>{{ $row->status }}</td>
                                    <td><a href="{{ route('verifikasi',$row->no_pembelian) }}" class="btn btn-warning">Detail</a></td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </section>


        <nav id="famdaynav-container" class="famdaynav">
            <div class="famdaynav__inner">
                <div class="famdaynav__top-content scrollable-content pb-5">
                    <div class="famdaynav__profile mt-3 d-flex3">
                        <div class="mt-2 d-mn-max"></div>
                        <div class="mininav-toggle text-center py-2">
                            <img class="famdaynav__logo img-md rounded-circle "
                                src="{{ URL::asset('icons/logo.png') }}" alt="Logo Picture">
                        </div>
                    </div>

                    <div class="famdaynav__categoriy py-3">
                        <ul class="famdaynav__menu nav flex-column">
                            <li class="nav-item has-sub">
                                <a href="https://dev-famday.air.id" class="mininav-toggle nav-link collapsed"><i
                                        class="bi bi-house-door"></i>
                                    <span class="nav-label ms-1">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://dev-famday.air.id/events/list" class="nav-link">
                                    <i class="bi bi-calendar3"></i>
                                    <span class="nav-label ms-1">Events</span>
                                </a>
                            </li>
                            @if ($hakakses == 'superuser')
                                <li class="nav-item">
                                    <a href="https://dev-famday.air.id/users/list" class="nav-link mininav-toggle"><i
                                            class="bi bi-people"></i>
                                        <span class="nav-label mininav-content ms-1">Daftar User</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.listpembayaran') }}" class="nav-link mininav-toggle"><i
                                            class="bi bi-cash-coin"></i>
                                        <span class="nav-label mininav-content ms-1">List Pembayaran</span>
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

</body>

</html>
