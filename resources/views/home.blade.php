@extends('layouts.main')


@section('content-main')
    <div class="hero-wrap " style="background-image: url('umum/images/bg-17.jpg');">
        <div class="overlay"></div>
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
                    <span class="subheading">Paket Tour</span>
                    <h2 class="mb-4">Paket Tour Terpopuler</h2>
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
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Welcome to Bali Mutiara Tours</span>
                        <h2 class="mb-4">Saatnya Mulai Petualangan Anda</h2>

                        <p> Bali Mutiara Tours, tempat dimana perjalanan impian Anda menjadi kenyataan. Dengan kerja
                            sama yang erat dengan berbagai hotel dan resort terkemuka, travel operator lokal dan
                            operator cruise ternama, kami menawarkan beragam paket tour yang akan membuat perjalanan
                            Anda di Bali dan seluruh dunia menjadi sangat spesial. Dari paket tour pribadi hingga
                            kelompok, dari cruise mewah hingga pengalaman wisata yang eksotis, kami menawarkan semuanya
                            untuk Anda yang merencanakan perjalanan domestik atau mancanegara. Baik untuk dua orang atau
                            lebih, kami siap membuat perjalanan Anda menjadi kenangan yang tak terlupakan.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
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
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
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
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
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
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
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
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(umum/images/bg-1.jpg);">
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
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Artikel</span>
                <h2 class="mb-7">Artikel Terbaru</h2>
            </div>
            <div class="row d-flex mt-4">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="artikel/artikel-1.html" class="block-20"
                            style="background-image: url('images/restoran-2.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">05</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2023</span>
                                    <span class="mos">Februari</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="artikel/artikel-1.html">Rekomendasi Restoran di Bali Yang
                                    Wajib
                                    Kamu Coba!</a></h3>
                            <p>Saat pergi liburan ke Bali, tak lengkap rasanya kalau belum mencoba hidangan khasnya
                                seperti Nasi Campur...
                            </p>
                            <p><a href="artikel/artikel-1.html" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="artikel/artikel-2.html" class="block-20"
                            style="background-image: url('images/destianasi-hits/attlas-2.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">15</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2023</span>
                                    <span class="mos">Februari</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="artikel/artikel-2.html">Destinasi Wisata Di Bali Yang Hits &
                                    Populer Buat Liburan</a></h3>
                            <p>Bali adalah salah satu tujuan wisata terpopuler di dunia, dan tidak salah jika banyak
                                orang memilih Bali sebagai...
                            </p>
                            <p><a href="artikel/artikel-2.html" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="artikel/artikel-3.html" class="block-20"
                            style="background-image: url('images/nuspen.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">16</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2023</span>
                                    <span class="mos">Februari</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="artikel/artikel-3.html">Destinasi Wisata Di Bali Yang Hits &
                                    Populer Buat Liburan</a></h3>
                            <p>Nusa Penida menyimpan pesona pantai-pantai yang memukau, dengan pasir putihnya yang halus
                                dan air birunya
                                yang jernih...
                            </p>
                            <p><a href="artikel/artikel-3.html" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="ftco-animate text-right" style="width: 100%;">
                <a href="artikel.html" class=" btn btn-link ">Lihat Selengkapnya <i class="fa fa-arrow-right"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
@endsection
