<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="description" content="{{ $description }}">

    <meta name="keywords" content="{{ $keywords }}">

    <title>Admin - Bali Mutiara Tours | {{ $title }}</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('gambar/logo-travel-1.png') }}">

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.css') }}">
    <link href="{{ asset('fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/solid.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    @yield('style')
</head>

<body class="bg-light">

    <header id="header" class="header  navbar navbar-expand-lg shadow p-lg-4 p-sm-2">
        <div class="container-fluid">
            <!-- hamburger buttton -->
            <input type="checkbox" id="checkbox" checked>
            <label for="checkbox" class="toggle">
                <div class="bars" id="bar1"></div>
                <div class="bars" id="bar2"></div>
                <div class="bars" id="bar3"></div>
            </label>

            <ul class="navbar-nav gap-3 mb-2 mb-lg-0">
                <div class="user-draft">
                    <button class="dropdown-btn" type="button">
                        <img src="{{ asset('gambar/user.png') }}" width="36px" alt=""> <i
                            class="fa-regular fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-users shadow">
                        <li><a><b>Admin</b></a></li>
                        <li><a href="{{ route('logout') }}" class="btn btn-danger "> <i
                                    class="fa-solid fa-right-from-bracket"></i>
                                Logout</a> </li>
                    </ul>
                </div>
            </ul>
        </div>
    </header>

    <nav id="sidebar" class="sidebar  shadow">
        <div class="sidebar-header">
            <a href="" class="navbar-brand"><img src="{{ asset('gambar/logo-travel-1.png') }}" width="50px"
                    class="img-fluid" alt="logo"></a>
        </div>
        <div class="sidebar-nav ">
            <ul>
                <li class="side-links"><a class="side-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}"><i class="fa-solid fa-gauge"></i>
                        <div class="link-text">Dashboard</div>
                    </a>
                </li>
                <li><a class="side-link {{ request()->routeIs('paket-tour', 'tambah-tour', 'edit-tour*') ? 'active' : '' }}"
                        href="{{ route('paket-tour') }}"><i class="fa-solid fa-plane"></i>
                        <div class="link-text">Tour</div>
                    </a></li>
                <li><a class="side-link {{ request()->routeIs('destinasi') ? 'active' : '' }}"
                        href="{{ route('destinasi') }}"><i class="fa-solid fa-location-dot"></i>
                        <div class="link-text">Destinasi</div>
                    </a></li>
                <li><a class="side-link {{ request()->routeIs('kategori') ? 'active' : '' }}"
                        href="{{ route('kategori') }}"><i class="fa-brands fa-codepen"></i>
                        <div class="link-text">Kategori</div>
                    </a></li>
                <li><a class="side-link {{ request()->routeIs('gallery') ? 'active' : '' }}"
                        href="{{ route('gallery') }}"><i class="fa-solid fa-image"></i>
                        <div class="link-text">Gallery</div>
                    </a></li>
                <li><a class="side-link {{ request()->routeIs('sewa-mobil') ? 'active' : '' }}"
                        href="{{ route('sewa-mobil') }}"><i class="fa-solid fa-car"></i>
                        <div class="link-text">Sewa Mobil</div>
                    </a></li>
                <li><a class="side-link" href="/"><i class="fa-solid fa-newspaper"></i>
                        <div class="link-text">Artikel</div>
                    </a></li>
            </ul>
        </div>
    </nav>



    <section class="content">
        <div class="content-admin " id="content-admin">
            <div class="container-fluid">
                @if (Session::has('success'))
                    <div class="pt-3">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                <h1 class="judul-content fw-semibold">@yield('judul_halaman')</h1>
                @yield('content-admin')
            </div>
        </div>
    </section>

    <footer class="container d-flex justify-content-center">
        <p> © <span id="tahun"></span> Bali Mutiara Tours </p>
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        <div class="spinner"></div>
    </div>



    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

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
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ 'js/bootstrap.js' }}"></script>
    <script src="{{ asset('fontawesome/js/fontawesome.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    @yield('script')

</body>

</html>
