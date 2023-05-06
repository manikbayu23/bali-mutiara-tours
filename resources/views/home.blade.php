@extends('layouts.main')

@section('style')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endsection

@section('content-main')
    <div class="slider-background">
        <div class="slider ">
            <div class="slide active hero-wrap-2 js-fullheight" style="background-image: url('umum/images/pura-danu.jpg')">
            </div>
            <div class="slide hero-wrap-2 js-fullheight" style="background-image: url('umum/images/rafting-3.jpg')"></div>
            <div class="slide hero-wrap-2 js-fullheight" style="background-image: url('umum/images/tirta-empul.jpg')"></div>
            <div class="slide hero-wrap-2 js-fullheight" style="background-image: url('umum/images/tari-kecak3.jpg')"></div>
            <div class="slide hero-wrap-2 js-fullheight" style="background-image: url('umum/images/bg-17.jpg')"></div>
        </div>
        <div class="shadow-op"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Welcome to Bali Mutiara Tours</span>
                    <h1 class="mb-6">Temukan Tempat Liburan Favorit Anda Bersama Kami</h1>
                    <a href="{{ route('pengunjung.paket-tour') }}" class="btn bt-lihatPaket">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>



    <section class="ftco-section" style="background-color: rgb(255, 255, 255);" id="paket-tour">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="subheading mb-3">Paket Tour</h2>
                </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
                @forelse ($tour as $card)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="{{ route('pengunjung.paket-tour.show', $card->slug) }}" class="img"
                                style="background-image: url(images/gallery/{{ $card->id_gambar }});">
                                <span class="price">IDR {{ $card->harga_utama }}K/Person</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">{{ $card->durasi }}</span>
                                <h3><a
                                        href="{{ route('pengunjung.paket-tour.show', $card->slug) }}">{{ $card->nama_tour }}</a>
                                </h3>
                                <p class="location"><span class="fa fa-map-marker"></span> {{ $card->lokasi }}</p>
                                <ul>
                                    @if ($card->rating == '5')
                                        <li><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span></li>
                                    @elseif($card->rating == '4')
                                        <li><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span></li>
                                    @elseif($card->rating == '3')
                                        <li><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span></li>
                                    @elseif($card->rating == '2')
                                        <li><span class="fa fa-star"></span><span class="fa fa-star"></span></li>
                                    @else
                                        <li><span class="fa fa-star"></span></li>
                                    @endif
                                </ul>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-primary text-center">tidak ada paket tour</div>
                @endforelse

                <div class="ftco-animate text-right pb-4" style="width: 100%;">
                    <a href="{{ route('pengunjung.paket-tour') }}" class=" btn btn-link ">Lihat Selengkapnya <i
                            class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section" style="background-color: rgb(245, 245, 245);">
        <div class="container">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="subheading mb-3">Service</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-1 d-block img"
                        style="background-image: url(umum/images/renang1.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-paragliding"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Activities</h3>
                            <p>Menemukan kepuasan dalam membantu, merencanakan dan memesan liburan impian Anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-2 d-block img"
                        style="background-image: url(umum/images/nuspen.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-route"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Travel Arrangements</h3>
                            <p> Buat daftar aktivitas dan atraksi potensial untuk dikunjungi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-3 d-block img"
                        style="background-image: url(umum/images/tour.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-tour-guide"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Private Guide</h3>
                            <p>Jelajahi destinasi wisata impian Anda bersama pemandu wisata pribadi yang akan
                                memastikan pengalaman perjalanan Anda tidak terlupakan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-4 d-block img"
                        style="background-image: url(umum/images/lokasi.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-map"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Paket Tour Custom</h3>
                            <p>Nikmati pengalaman perjalanan yang tak terlupakan, fleksibel, dan disesuaikan
                                dengan kebutuhan Anda dengan menentukan lokasi dan perjalanan sendiri melalui
                                Paket Tour Custom.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ">
        <div class="container">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="subheading mb-3">Gallery</h2>
            </div>
            <div class="slick-carousel">
                <div style="background-image: url('umum/images/galeri-3.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-1.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-2.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-4.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-5.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-6.jpg');"></div>
            </div>


        </div>
    </section>

    {{-- <section class="ftco-section testimony-section bg-bottom" style="background-image: url(umum/images/bg-1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Tourist Feedback</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">FSaya sangat puas dengan jasa travel ini. Mereka sangat membantu
                                        dalam perencanaan perjalanan saya dan selalu tersedia untuk menjawab pertanyaan
                                        saya. Pelayanan mereka sangat cepat dan profesional.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/user.png)"></div>
                                        <div class="pl-3">
                                            <p class="name">Riana Dewi</p>
                                            <span class="position"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Pelayanan yang cepat dan ramah dari staf travel membuat
                                        perjalanan
                                        saya sangat menyenangkan. Mereka membantu mengatur segala sesuatu dengan baik
                                        dan memastikan saya tidak kesulitan. Saya sangat merekomendasikan perusahaan ini
                                        kepada siapapun yang berencana pergi berlibur.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(umum/images/user.png)"></div>
                                        <div class="pl-3">
                                            <p class="name">Aditya Wijaya</p>
                                            <span class="position"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Perjalanan yang luar biasa dalam segala hal. Dari pemesanan tiket
                                        hingga akomodasi, semuanya diatur dengan baik oleh tim travel. Saya sangat
                                        berterima kasih atas bantuan mereka dan pasti akan menggunakan jasa mereka
                                        lagi..</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/user.png)"></div>
                                        <div class="pl-3">
                                            <p class="name">Ahmad Rizki</p>
                                            <span class="position"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Saya sangat berterima kasih kepada jasa travel ini karena membuat
                                        perjalanan saya lancar dan menyenangkan. Mereka sangat membantu dalam
                                        menyelesaikan masalah yang saya hadapi dan selalu tersedia untuk memberikan
                                        bantuan. Saya akan merekomendasikan jasa ini kepada teman-teman saya.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/user.png)"></div>
                                        <div class="pl-3">
                                            <p class="name">Iwan
                                                Eko</p>
                                            <span class="position"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section" style="background-color: rgb(245, 245, 245);">
        <div class="container">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="subheading mb-3">Video</h2>
            </div>
            <div class="row d-flex mt-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=aNiF0C0xa7k"
                        allowfullscreen></iframe>
                </div>

            </div>

        </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slick-carousel').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                dots: true,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
                responsive: [{
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false,
                            infinite: true,
                            speed: 300,
                            adaptiveHeight: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false,
                            infinite: true,
                            speed: 300,
                            adaptiveHeight: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            dots: true,
                            arrows: false,
                            infinite: true,
                            speed: 300,
                            adaptiveHeight: true
                        }
                    }
                ]
            });

        });
    </script>
@endsection
