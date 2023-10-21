@extends('layouts.main')
@section('content-main')
    <div class="slider-background">
        <div class="slide-fade">
            <div class="fade-items">
                <img src="{{ asset('gambar/nusa-penida.jpg') }}" alt="nusa penida" class="w-100 h-100"
                    style="object-fit:cover;">
            </div>
            <div class="fade-items">
                <img src="{{ asset('gambar/tari-kecak.jpeg') }}" alt="tari kecak" class="w-100 h-100"
                    style="object-fit:cover;">
            </div>
            <div class="fade-items">
                <img src="{{ asset('gambar/tirta-empul.jpeg') }}" alt="pura tirta empul" class="w-100 h-100"
                    style="object-fit:cover;">
            </div>

            <div class="fade-items">
                <img src="{{ asset('gambar/rafting.jpg') }}" alt="rafting" class="w-100 h-100" style="object-fit:cover;">
            </div>
        </div>
        <div class="nav-slider">
            <div class="container-fluid">
                <div class="ftco-animate text-center">
                    <h1 class="mb-0 isi-intro">Sewa Mobil</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Sewa Mobil <i
                                class="fa fa-chevron-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <p class="mb-0 bread" style="text-align:justify; padding-bottom: 100px;">Sewa mobil murah di Bali dengan supir
                dapat
                menjadi pilihan yang
                tepat untuk Anda jika Anda ingin mengunjungi berbagai tempat di Bali dengan fleksibilitas dan kenyamanan
                yang
                lebih tinggi.</p>
            <div class="row">

                @forelse ($data as $car)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap hotel">
                            <a class="img" style="background-image: url('images/mobil/{{ $car->foto_mobil }}');">
                                <span class="price">IDR {{ $car->harga_sewa }}K/10 Jam</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">{{ $car->nama_mobil }}</span>
                                <p class="location"><span class="fa fa-check-circle"></span> Plus Sopir <br><span
                                        class="fa fa-check-circle"></span> Termasuk BBM</p>
                                <a href="https://api.whatsapp.com/send?phone=6282133226622&amp;text=Hai %20 Bali %20 Mutiara %20 Tours,%20 saya ingin memesan mobil {{ $car->nama_mobil }}"
                                    class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    Tidak Ada Mobil
                @endforelse
            </div>
            <div class="mt-3 d-flex justify-content-center">
                {{ $data->links() }}
            </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endpush
