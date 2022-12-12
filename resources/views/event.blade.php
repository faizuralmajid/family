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
                                    <li class="breadcrumb-item active" aria-current="page">Events</li>
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
                    <div class="mt-4 d-grid gap-2 d-md-block">
                        <a href=""><button class="btn btn-light btn-sm" type="button">Berlangsung</button></a>
                        <a href="/cs"><button class="btn btn-light btn-sm ml-2" type="button">Segera</button></a>
                        <a href="/end"><button class="btn btn-bg-purple btn-sm ml-2"
                                type="button">Berakhir</button></a>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3 d-flex align-items-stretch">
                            <div class="card data-events " id="3" idx="0">
                                <div class="card-body p-0">
                                    <div class="text-center position-relative box">
                                        <div class="pb-3">
                                            <div class="container-img">
                                                <img class="img-lg bannernya " src="{{ URL::asset('icons/logo.png') }}"
                                                    alt="Logo Picture" loading="lazy">
                                            </div>
                                        </div>
                                        <p class="h6 black-text text-left px-2">Family Day PLN 2022 Palsu 2</p>
                                        <p class="text-muted text-left fs-12 mb-1 px-2"><i
                                                class="la la-stopwatch"></i>2022-08-07 08:00:00</p>
                                        <p class="text-muted text-left fs-12 mb-0 px-2 pb-3"><i
                                                class="la la-map-marker"></i>ICE BSD Palsu 2</p>
                                        <textarea class="d-none datanya">{&quot;acara_id&quot;:3,&quot;acara_nama&quot;:&quot;Family Day PLN 2022 Palsu 2&quot;,&quot;acara_mulai&quot;:&quot;2022-08-07 08:00:00&quot;,&quot;acara_selesai&quot;:&quot;2022-08-30 17:00:00&quot;,&quot;acara_mulai_checkin&quot;:&quot;2022-08-08 06:00:00&quot;,&quot;acara_selesai_checkin&quot;:&quot;2022-08-30 12:00:00&quot;,&quot;acara_lokasi&quot;:&quot;ICE BSD Palsu 2&quot;,&quot;acara_koordinat&quot;:&quot;-6.3008404,106.6363056&quot;,&quot;acara_banner&quot;:&quot;https:\/\/dev-famday.air.id\/storage\/files\/1664984823_Screenshot_2.jpg&quot;,&quot;acara_deskripsi&quot;:&quot;Acara Hari Listrik Nasionl PT. PLN(Persero)&quot;,&quot;acara_max_kuota_per_peserta&quot;:2,&quot;acara_status&quot;:&quot;aktif&quot;,&quot;acara_create_by&quot;:&quot;1&quot;,&quot;acara_create_date&quot;:&quot;2022-09-08T12:38:12.983103Z&quot;,&quot;acara_alamat_lokasi&quot;:&quot;Jl. BSD Grand Boulevard No.1, Pagedangan, Kec. Pagedangan, Kabupaten Tangerang, Banten 15339&quot;,&quot;acara_edit_date&quot;:&quot;2022-10-05T15:47:03.000000Z&quot;,&quot;acara_edit_by&quot;:1,&quot;acara_pic&quot;:&quot;QQwerty&quot;,&quot;acara_whatsapp_pic&quot;:&quot;082242778277&quot;}</textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3 d-flex align-items-stretch">
                            <div class="card data-events " id="31" idx="3">
                                <div class="card-body p-0">
                                    <div class="text-center position-relative box">
                                        <div class="pb-3">
                                            <div class="container-img">
                                                <img class="img-lg bannernya" src="{{ URL::asset('icons/logo.png') }}"
                                                    alt="Logo Picture" loading="lazy">
                                            </div>
                                        </div>
                                        <p class="h6 black-text text-left px-2">Amazing 2022</p>
                                        <p class="text-muted text-left fs-12 mb-1 px-2"><i
                                                class="la la-stopwatch"></i>2022-11-16 01:00:00</p>
                                        <p class="text-muted text-left fs-12 mb-0 px-2 pb-3"><i
                                                class="la la-map-marker"></i>ICON Mampang</p>
                                        <textarea class="d-none datanya">{&quot;acara_id&quot;:31,&quot;acara_nama&quot;:&quot;Amazing 2022&quot;,&quot;acara_mulai&quot;:&quot;2022-11-16 01:00:00&quot;,&quot;acara_selesai&quot;:&quot;2022-11-30 18:54:00&quot;,&quot;acara_mulai_checkin&quot;:&quot;2022-11-15 18:54:00&quot;,&quot;acara_selesai_checkin&quot;:&quot;2022-11-30 18:54:00&quot;,&quot;acara_lokasi&quot;:&quot;ICON Mampang&quot;,&quot;acara_koordinat&quot;:&quot;-6.125053705897961, 106.86015368344862&quot;,&quot;acara_banner&quot;:null,&quot;acara_deskripsi&quot;:&quot;Amazing 2022&quot;,&quot;acara_max_kuota_per_peserta&quot;:10,&quot;acara_status&quot;:&quot;aktif&quot;,&quot;acara_create_by&quot;:&quot;28&quot;,&quot;acara_create_date&quot;:&quot;2022-11-16T11:55:29.000000Z&quot;,&quot;acara_alamat_lokasi&quot;:&quot;Kantor ICON+, Jalan Kuningan Barat I, RW 01&quot;,&quot;acara_edit_date&quot;:&quot;2022-11-23T07:40:03.000000Z&quot;,&quot;acara_edit_by&quot;:28,&quot;acara_pic&quot;:&quot;Feby Dilla&quot;,&quot;acara_whatsapp_pic&quot;:&quot;082242778277&quot;}</textarea>
                                    </div>

                                </div>
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

    <div class="modal" id="eventsModal">
        <div class="modal-dialog modal-fs">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body ">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <h6 class="row">Create Event</h6>
                            <form id="createEvents" class="mt-2" action="" method="POST"
                                enctype="multipart/form-data">
                                <div class="row form-upload row-cols-5">
                                    <div class="col field-upload-center"><img class="img-upload banner_1"
                                            src="https://dev-famday.air.id/img/placeholder.png" alt="Banner Picture"
                                            loading="lazy"><input type="file" class="d-none" name="banner_1">
                                        <input type="hidden" class="banner_1_link" name="banner_1_link">
                                    </div>
                                    <p class="text-muted fs-12px w-100 text-center mt-2">*Tambahkan banner
                                        dengan resolusi 640
                                        <i>pixel</i>
                                        x 720 <i>pixel</i>
                                    </p>
                                </div>
                                <label class="row mt-3 text-dark fw-bolder">Detil Acara</label>
                                <div class="row">
                                    <div class="col-md-12 p-0 ">
                                        <label for="field_nama_acara" class="form-label">Nama
                                            Acara</label>
                                        <input id="field_nama_acara" type="text" name="nama_acara"
                                            class="form-control acara_nama">
                                        <input type="hidden" class="acara_id" name="acara_id">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 p-0 ">
                                        <label for="field_sdeskripsi_acara" class="form-label">Deskripsi
                                            Acara</label>
                                        <textarea id="field_sdeskripsi_acara" name="deskripsi_acara" type="text" class="form-control acara_deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 p-0 ">
                                        <label for="field_maks_peserta_acara" class="form-label">Max
                                            peserta per
                                            keluarga</label>
                                        <input id="field_maks_peserta_acara" type="number" name="maks_peserta"
                                            class="form-control acara_max_kuota_per_peserta" max=10 min=1>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-6 p-0 pr-2">
                                        <label for="field_tgl_mulai_acara" class="form-label">Tgl
                                            Mulai
                                            Acara</label>
                                        <input id="field_tgl_mulai_acara" type="datetime-local"
                                            name="tgl_mulai_acara" class="form-control acara_mulai">
                                    </div>

                                    <div class="col-md-6 p-0 pl-2">
                                        <label for="field_tgl_selesai_acara" class="form-label">Tgl
                                            Selesai Acara</label>
                                        <input id="field_tgl_selesai_acara" type="datetime-local"
                                            name="tgl_selesai_acara" class="form-control acara_selesai">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6 p-0 pr-2">
                                        <label for="field_waktu_mulai_checkin" class="form-label">Waktu
                                            Mulai Check-in</label>
                                        <input id="field_waktu_mulai_checkin" type="datetime-local"
                                            name="waktu_mulai_presensi" class="form-control acara_mulai_checkin">
                                    </div>

                                    <div class="col-md-6 p-0 pl-2">
                                        <label for="field_waktu_tutup_checkin" class="form-label">Waktu
                                            Tutup Check-in</label>
                                        <input id="field_waktu_tutup_checkin" type="datetime-local"
                                            name="waktu_selesai_presensi" class="form-control acara_selesai_checkin">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-6 p-0 pr-2">
                                        <label for="field_alamat_checkin" class="form-label">Lokasi</label>
                                        <input id="field_alamat_checkin" name="lokasi_acara" type="text"
                                            class="form-control acara_lokasi">
                                    </div>

                                    <div class="col-md-6 p-0 pl-2">
                                        <label for="field_koordinat" class="form-label">Titik
                                            Koordinat</label>
                                        <input id="field_koordinat" name="titik_koordinat" type="text"
                                            class="form-control acara_koordinat">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 p-0 ">
                                        <label for="field_lokasi_acara" class="form-label">Alamat
                                            Lokasi</label>
                                        <input id="field_lokasi_acara" name="alamat_lokasi" type="text"
                                            class="form-control acara_alamat_lokasi">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-6 p-0 pr-2">
                                        <label for="field_nama_pic" class="form-label">Nama
                                            Pic</label>
                                        <input id="field_nama_pic" name="nama_pic" type="text"
                                            class="form-control acara_pic">
                                    </div>

                                    <div class="col-md-6 p-0 pl-2">
                                        <label for="field_no_whatsapp" class="form-label">No Whatsapp
                                            PIC</label>
                                        <input id="field_no_whatsapp" name="telp_pic" type="text"
                                            class="form-control acara_whatsapp_pic">
                                    </div>

                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-12 p-0 text-center">
                                        <button type="button" class="btn btn-bg-red btn-sm hstack gap-2"
                                            data-bs-dismiss="modal">
                                            <i class="la la-close"></i>
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-bg-purple btn-sm hstack gap-2">
                                            <i class="la la-save"></i>
                                            Save Event
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>

    <script src="https://dev-famday.air.id/plugins/jquery/jquery-3.6.1.min.js"></script>
    <script src="https://dev-famday.air.id/plugins/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://dev-famday.air.id/plugins/validate/jquery.validate.min.js"></script>
    <script src="https://dev-famday.air.id/plugins/validate/additional-methods.min.js"></script>
    <script>
        $(function() {

            document.addEventListener('DOMContentLoaded', () => {
                let tooltipList = [...document.querySelectorAll('.add-tooltip')];
                tooltipList.map(function(tooltipEl) {
                    new bootstrap.Tooltip(tooltipEl)
                })
            });

            function readURL(input, el) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(el).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("img.img-upload").on("click", function(ev) {
                ev.preventDefault();
                if (ev.handler != true) {
                    const ini = this;
                    $(this).next("input[type=file].d-none").trigger("click");
                    $(this).next("input[type=file].d-none").on("change", function() {
                        readURL(this, ini);
                    });
                    ev.handler = true;
                }
            });

            $("div.card.data-events").on("click", ".btn-edit", function(ev) {
                ev.preventDefault();
                if (ev.handler != true) {
                    const data = $(this).closest("div.card.data-events").find("textarea.datanya").val();
                    const detil = JSON.parse(data);
                    $("#eventsModal").find("h6").text("Edit Event");
                    $.each(detil, function(k, v) {
                        $("form#createEvents ." + k).val(v);
                        if (k == "acara_banner" && v) {
                            const myImage = v.split(";");
                            $.each(myImage, function(key, image) {
                                $("form#createEvents .banner_" + parseInt(key + 1) + "")
                                    .attr("src", image);
                                $("form#createEvents .banner_" + parseInt(key + 1) +
                                    "_link").val(image);
                            });
                        }
                    });
                    $("form#createEvents").attr("action", "https://dev-famday.air.id/events/update");
                    $("#eventsModal").modal("show");
                    ev.handler = false;
                }
            });

            var validator = $("form#createEvents").validate({
                onfocusout: function(element) {
                    let dt;
                    if ($(element).attr('type') == "time") {
                        dt = false;
                    } else {
                        dt = true;
                    }
                    return dt;
                },
                rules: {
                    nama_acara: {
                        required: true,
                        maxlength: 250,
                        minlength: 5
                    },
                    deskripsi_acara: {
                        maxlength: 350,
                        minlength: 5
                    },
                    lokasi_acara: {
                        maxlength: 100,
                        minlength: 5,
                        required: true,
                    },
                    alamat_lokasi: {
                        maxlength: 350,
                        minlength: 5,
                        required: true,
                    },
                    nama_pic: {
                        required: true,
                        maxlength: 250,
                        minlength: 5
                    },
                    telp_pic: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    maks_peserta: {
                        required: true,
                        number: true,
                        min: 0
                    },
                    titik_koordinat: {
                        required: true
                    },
                    tgl_mulai_acara: {
                        required: true
                    },
                    tgl_selesai_acara: {
                        required: true
                    },
                    waktu_mulai_presensi: {
                        required: true
                    },
                    waktu_selesai_presensi: {
                        required: true,
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

            $("#eventsModal").on('hidden.bs.modal', function() {
                $("form#createEvents").attr("action", "https://dev-famday.air.id/events/create");
                $(this).find("h6").text("Create Event");
                $(".img-upload").attr("src", "https://dev-famday.air.id/img/placeholder.png");
                validator.resetForm();
                $("form#createEvents").trigger('reset');
            });
        });
    </script>

</body>

</html>
