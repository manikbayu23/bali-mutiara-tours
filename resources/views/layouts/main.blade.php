<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Bali Mutiara Tours | {{ $title }}</title>

    <meta name="description" content="{{ $description }}">

    <meta name="keywords" content="{{ $keywords }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('umum/images/logo-travel-1.png') }}">

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('umum/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('umum/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('umum/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('umum/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('umum/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('umum/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('umum/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('umum/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https:///cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <meta name="robots" content="index, follow">

    @yield('style')

</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" style="display: flex; align-items:center" href="/"><img
                    src="{{ asset('umum/images/logo-travel-1.png') }}" width="50px" class="img-fluid" alt="">
                <div class="ml-2"> Bali
                    Mutiara<span>Tours</span></div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="/"
                            class="nav-link">Home</a></li>
                    <li
                        class="nav-item {{ request()->routeIs('pengunjung.paket-tour', 'pengunjung.paket-tour.show*') ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('pengunjung.paket-tour') }}">
                            Tour
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('pengunjung.sewa-mobil') ? 'active' : '' }}"><a
                            href="{{ route('pengunjung.sewa-mobil') }}" class="nav-link">Sewa Mobil</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('pengunjung.gallery') ? 'active' : '' }}"><a
                            href="{{ route('pengunjung.gallery') }}" class="nav-link">Gallery</a></li>
                    <li class="nav-item {{ request()->routeIs('pengunjung.kontak') ? 'active' : '' }}"><a
                            href="{{ route('pengunjung.kontak') }}" class="nav-link">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content-main')

    <footer class="ftco-footer bg-bottom ftco-no-pt " style="background-color: rgb(243, 243, 243);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>Berdiri sejak 19 Juli 1969, Bali Mutiara Tours dipercaya sebagai salah satu travel agent
                            terbesar di Indonesia. Di bawah nama brand Mutiara, kami memiliki lebih dari 90 cabang yang
                            tersebar di kota-kota besar seluruh Indonesia. Setiap tahunnya beberapa penghargaan
                            bergengsi telah berhasil didapatkan oleh Bali Mutiara Tours.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <!-- <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li> -->
                            <li class="ftco-animate"><a href="https://www.facebook.com/dewa.putra.5245"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/mutiaratimurholidays/"><span
                                        class="fa fa-instagram"></span></a></li>
                            <li class="ftco-animate"><a
                                    href="https://www.youtube.com/channel/UCs-sLDIkcPZNfNwF4PJcEEg"><span
                                        class="fa fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Hubungi Kami</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <p>Bali</p>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Jl. Jaya Giri XI
                                        No. 19, Denpasar, Bali</span></li>
                                <li><a href="https://api.whatsapp.com/send?phone=6287861184488"><span
                                            class="icon fa fa-phone"></span><span class="text">+62 821 3322
                                            6622 / 087 8611 84488</span></a></li>
                                <li><a href="mailto:dewa@balimutiaratours.id?subject=Hai, Bali Mutiara Tours.."><span
                                            class="icon fa fa-envelope-o"></span><span class="text">
                                            dewa@balimutiaratours.id</span></a></li>
                            </ul>
                            <ul>
                                <p>Lombok</p>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Jl. Palapa 1 No. 9
                                        Cakra Barat,
                                        Mataram – Nusa Tenggara Barat</span></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Bali Mutiara Tours
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://api.whatsapp.com/send?phone=6287861184488&amp;text=Hai,%20customer%20service%20Bali Mutiara Tours..."
        target="blank" title="Klik untuk chat via Whatsapp" class="whatsapp">
        <div class="dot">.</div>
        <img src="{{ asset('umum/images/wa.png') }}" alt="">

    </a>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#17a2b8" />
        </svg>
    </div>


    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary mr-3'
            },
            buttonsStyling: false
        })
    </script>
    <script src="{{ asset('umum/js/jquery.min.js') }}"></script>
    <script src="{{ asset('umum/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('umum/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('umum/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('umum/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('umum/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('umum/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('umum/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('umum/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('umum/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('umum/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('umum/js/main.js') }}"></script>

    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11097109091"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11097109091');
    </script>

    <!-- Event snippet for Kunjungan halaman conversion page -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5XTGYXN841"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5XTGYXN841');
    </script>

    @yield('script')

</body>

</html>
