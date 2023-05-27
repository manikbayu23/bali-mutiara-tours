@extends('layouts.main')

@section('content-main')
    <div class="slider-background">
        <div class="slide-fade">
            <div class="fade-items" style="background-image: url('umum/images/pura-danu.jpg')">
            </div>
            <div class="fade-items" style="background-image: url('umum/images/rafting-3.jpg')"></div>
            <div class="fade-items" style="background-image: url('umum/images/tirta-empul.jpg')"></div>
            <div class="fade-items" style="background-image: url('umum/images/tari-kecak3.jpg')"></div>
            <div class="fade-items" style="background-image: url('umum/images/bg-17.jpg')"></div>
        </div>
        <div class="intro-slider">
            <div class="container-fluid">
                <div class="col-md-10 col-lg-7 ftco-animate">
                    <span class="subheading">Welcome to Bali Mutiara Tours</span>
                    <h1 class="isi-intro">Temukan Tempat Liburan Favorit Anda Bersama Kami</h1>
                    <a href="{{ route('pengunjung.paket-tour') }}" class="btn bt-lihatPaket">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="{{ route('pengunjung.paket-tour.show', 'paket-tour-bali-4-hari-3-malam') }}">
                        <img src="{{ asset('gambar/banner-promosi.png') }}" width="100%" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light" id="paket-tour">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="subheading mb-3">Special Offers</h2>
                </div>
            </div>
            <div class="multiple-items" style="margin-bottom: 50px;">
                @forelse ($tourbali as $card)
                    <div class="tours show ftco-animate shadow-sm mr-3 mb-5">
                        <a href="{{ route('pengunjung.paket-tour.show', $card->slug) }}">
                            @if ($card->persentase == null)
                            @else
                                <div class="diskon-logo d-flex align-items-center justify-content-center"
                                    style="background-image: url('gambar/bookmark.png')">
                                    <div class="text-center">
                                        <span>{{ $card->persentase }}%</span> <span class="text-white">OFF</span>
                                    </div>

                                </div>
                            @endif
                            <div class="img-tour" style="background-image: url(images/gallery/{{ $card->id_gambar }});">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="isi-tour-show">
                                <div class="nama-tours"><a
                                        href="{{ route('pengunjung.paket-tour.show', $card->slug) }}">{{ $card->nama_tour }}</a>
                                </div>
                                <div class="nama-tours text-dark mb-2"><span class="fa fa-map-marker"></span>
                                    {{ $card->lokasi }}
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="harga-tours">Rp
                                    @if ($card->harga_diskon == null)
                                        {{ $card->harga_utama }}K
                                    @else
                                        {{ $card->harga_diskon }}K
                                    @endif
                                </p>
                                <ul class="rating">
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
                            <div class="w-100 mb-1">
                                <a href="{{ route('pengunjung.paket-tour.show', $card->slug) }}"
                                    class="w-100 btn btn-primary btn-pesan-tour"> pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-primary text-center">tidak ada paket tour</div>
                @endforelse
            </div>
            <div class="text-center">
                <a href="{{ route('pengunjung.paket-tour') }}" class="btn btn-outline-info text-center">lihat
                    selengkapnya</i></a>
            </div>
        </div>

    </section>



    <section class="ftco-section bg-white">
        <div class="container">
            <div class="col-md-12 heading-section text-center">
                <h2 class="subheading mb-3  ftco-animate">Gallery</h2>
            </div>
            <div class="slick-carousel  ftco-animate">
                <div style="background-image: url('umum/images/galeri-3.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-1.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-2.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-4.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-5.jpg');"></div>
                <div style="background-image: url('umum/images/galeri-6.jpg');"></div>
            </div>


        </div>
    </section>

    <section class="ftco-section" style="background-color: rgb(245, 245, 245);">
        <div class="container">
            <div class="col-md-12 heading-section text-center">
                <h2 class="subheading mb-3  ftco-animate">Video</h2>
            </div>
            <div class="row d-flex mt-4  ftco-animate">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aNiF0C0xa7k"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section services-section bg-white">
        <div class="container">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="subheading mb-3">Service</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-1 d-block img"
                        style="background-image: url(umum/images/renang1.jpg);">
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
                        <div class="media-body">
                            <h3 class="heading mb-3">Travel Arrangements</h3>
                            <p> Buat daftar aktivitas dan atraksi potensial untuk dikunjungi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-3 d-block img"
                        style="background-image: url(umum/images/private-guide.jpg);">
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
                        style="background-image: url(umum/images/ayunan.jpg);">
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
@endsection
