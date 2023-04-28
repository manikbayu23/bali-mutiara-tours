@extends('layouts.main')
@section('content-main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('umum/images/sewa-mobil.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Sewa Mobil <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Sewa Mobil Dengan Sopir</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <p class="mb-0 bread" style="text-align:justify; padding-bottom: 100px;">Sewa mobil murah di Bali dengan supir
                dapat
                menjadi pilihan yang
                tepat untuk Anda jika Anda ingin mengunjungi berbagai tempat di Bali dengan fleksibilitas dan kenyamanan
                yang
                lebih tinggi. Dengan menyewa mobil dengan supir, Anda dapat mengeluarkan biaya transportasi yang lebih
                rendah
                dibandingkan jika Anda menyewa mobil tanpa supir atau menggunakan taksi. Selain itu, Anda juga dapat
                menikmati
                perjalanan yang lebih nyaman karena supir yang Anda sewa akan mengetahui jalur terbaik dan tempat-tempat
                menarik
                yang dapat dikunjungi di Bali.</p>
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
