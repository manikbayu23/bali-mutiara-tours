@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('umum/lightbox/css/lightbox.css') }}">

    <link rel="stylesheet" href="{{ asset('umum/css/style2.css') }}">
    <style>
        p,
        li {
            color: #343A40;
            text-align: left;
        }


        .h-2 {
            font-size: 26px;
            color: rgb(199, 12, 12);
            font-weight: 600;
        }

        .nama-produk {
            font-size: 24px;
        }

        .item-produk {
            font-size: 16px
        }

        .harga-produk {
            font-size: 18px
        }

        @media (max-width: 912px) {


            .nama-produk {
                font-size: 24px;
            }


            .tour-desk h1 {
                font-size: 18px;

            }


            .h-2 {
                font-size: 26px;

            }

            .harga-produk {
                font-size: 14px
            }

            p,
            li,
            a {
                font-size: 18px;
            }


        }

        @media (max-width: 576px) {

            .tour-desk h1 {
                font-size: 16px !important;
            }

            .tour-desk h2 {
                font-size: 14px !important;
            }

            .nama-produk {
                font-size: 18px;
            }

            .item-produk {
                font-size: 14px
            }


            .h-2 {
                font-size: 20px;

            }

            p,
            li,
            a {
                font-size: 12px;
            }

            .bintang {
                font-size: 12px;
            }

            .social-links a {
                font-size: 5px !important;
            }
        }

        .tour-desk h1 {
            font-size: 24px;
            padding: 10px;
            border-left: 10px solid #343A40;
            margin-bottom: 20px;
        }

        .tour-desk h2 {
            font-size: 18px;
            padding: 10px;
            background-color: rgb(247, 247, 247);
        }

        .slider-slick {
            height: 100px
        }
    </style>
@endsection

@section('content-main')
    <section class="foto bg-dark">
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light content ">
        <div class="container bg-white p-3 mt-2 shadow">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 rounded-4">
                    <div class="slider-for mb-2">
                        <a href="{{ asset('images/gallery/' . $tour->id_gambar) }}" data-lightbox="-" data-title="-">
                            <div class="item-for" style="background-image: url('/images/gallery/{{ $tour->id_gambar }}');">
                            </div>
                        </a>

                        @if ($tour->lokasi == 'Bali')
                            <a href="{{ asset('../gambar/rafting.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/rafting.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/sawah.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/sawah.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/tari-barong.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/tari-barong.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/tirta-empul.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/tirta-empul.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/jimbaran.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/jimbaran.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/mongkey-forest.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/mongkey-forest.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/atv-ride.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/atv-ride.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/attlas.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/attlas.jpg');"></div>
                            </a>
                        @elseif ($tour->lokasi == 'Lombok')
                            <a href="{{ asset('../gambar/lombok-6.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/lombok-6.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/lombok-9.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/lombok-9.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/taliwang.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/taliwang.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/suku-sasak.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/suku-sasak.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/lombok-14.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/lombok-14.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/suku-sasak-2.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/suku-sasak-2.jpg');"></div>
                            </a>
                        @elseif ($tour->lokasi == 'Nusa Penida')
                            <a href="{{ asset('../gambar/diving-2.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/diving-2.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/billabong.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/billabong.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/broken-beach.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/broken-beach.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar//nusa-penida-taman.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/nusa-penida-taman.jpg');">
                                </div>
                            </a>
                            <a href="{{ asset('../gambar/bg-18.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/bg-18.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/nuspen-4.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/nuspen-4.jpg');"></div>
                            </a>
                            <a href="{{ asset('../gambar/pulau-seribu.jpg') }}" data-lightbox="-" data-title="-">
                                <div class="item-for" style="background-image: url('../gambar/pulau-seribu.jpg');"></div>
                            </a>
                        @endif


                    </div>
                    <div class="slider-nav">
                        <div class="item-nav" style="background-image: url('../images/gallery/{{ $tour->id_gambar }}');">
                        </div>

                        @if ($tour->lokasi == 'Bali')
                            <div class="item-nav" style="background-image: url('../gambar/rafting.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/sawah.jpg');"></div>
                            {{-- <div class="item-nav" style="background-image: url('../gambar/ayunan.jpg');"></div> --}}
                            <div class="item-nav" style="background-image: url('../gambar/tari-barong.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/tirta-empul.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/jimbaran.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/mongkey-forest.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/atv-ride.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/attlas.jpg');"></div>
                        @elseif ($tour->lokasi == 'Lombok')
                            <div class="item-nav" style="background-image: url('../gambar/lombok-6.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/lombok-9.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/taliwang.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/suku-sasak.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/lombok-14.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/suku-sasak-2.jpg');"></div>
                        @elseif ($tour->lokasi == 'Nusa Penida')
                            <div class="item-nav" style="background-image: url('../gambar/diving-2.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/billabong.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/broken-beach.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/nusa-penida-taman.jpg');">
                            </div>
                            <div class="item-nav" style="background-image: url('../gambar/bg-18.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/nuspen-4.jpg');"></div>
                            <div class="item-nav" style="background-image: url('../gambar/pulau-seribu.jpg');"></div>
                        @endif

                    </div>

                </div>
                <div class="col">
                    <h1 class="nama-produk"><b>{{ $tour->nama_tour }}</b></h1>
                    <div class="d-flex align-items-center">
                        <div class="bintang d-flex align-items-center mr-3"><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="text-dark mb-3 item-produk "><i class="fa fa-map-marker"></i> {{ $tour->lokasi }}<i
                                style="margin-left: 20px;" class="fa fa-clock-o"></i> {{ $tour->durasi }} </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        @if ($tour->harga_diskon == null)
                            <div class="h-2">Rp{{ $tour->harga_utama }}K</div>
                        @else
                            <div class="harga-produk mr-3"><del>Rp{{ $tour->harga_utama }}K </del></div>
                            <div class="h-2">Rp{{ $tour->harga_diskon }}K</div>
                        @endif

                    </div>
                    <img src="{{ asset('gambar/garansi.png') }}" class="img-fluid mb-3" width="150px" alt="">

                    <div class="row tombol1 mb-3">
                        <button class="btn bt-list" data-toggle="modal" data-target="#exampleModal" type="button"
                            id="myBtn"><i class="fa fa-money" aria-hidden="true"></i>

                            Cek Harga Paket </button>

                        <a href="#pemesanan" class="btn  bt-pesan"><i class=" fa fa-whatsapp"></i>
                            Pesan Sekarang</a>

                    </div>
                    <div id="social-links" class="d-flex align-items-center justify-content-end">
                        <ul>
                            <a class=""><i> Share : </i></a>
                            <a class="text-danger h6 mr-2"
                                href="https://www.instagram.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank"><span class="fa fa-instagram"></span></a>

                            <a class="text-primary h6 mr-2"
                                href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank"><span class="fa fa-facebook-official"></span></a>

                            <a class="text-info h6 mr-2"
                                href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($tour->nama_tour) }}"
                                target="_blank"><span class="fa fa-twitter"></span></a></a>

                            <a class="text-secondary h6 mr-2"
                                href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}&summary=Extra linkedin summary can be passed here"
                                target="_blank"><span class="fa fa-linkedin"></span></a>

                            <a class="text-success h6"
                                href="https://wa.me/?text={{ urlencode(url()->current()) }} - {{ urlencode($tour->nama_tour) }}"
                                target="_blank"><span class="fa fa-whatsapp"></span></a>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" style="z-index: 9999; " tabindex="-1" id="exampleModal"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel"><b>DAFTAR HARGA PAKET </b> </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! $tour->tabel_harga !!}
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light tour-desk mt-3 mb-3">
        <div class="container p-lg-5 p-4 bg-white shadow">
            <div class="row">
                <div class="col-lg-8 py-md-5  pt-2 mt-lg-1">
                    <div class="text-justify">
                        {!! $tour->deskripsi !!}
                    </div>

                    @if ($tour->lokasi == 'Bali' || $tour->lokasi == 'Lombok')
                        <h2>
                            <strong>
                                HARGA SUDAH TERMASUK
                            </strong>
                        </h2>
                        <ul>
                            <li>
                                Transfer in/out bandara
                            </li>
                            <li>Hotel</li>
                            <li>Makan pagi, makan siang, dan makan malam</li>
                            <li>Tiket masuk obyek wisata</li>
                            <li>Lokal guide</li>
                            <li>Mineral water</li>
                        </ul>
                    @else
                    @endif

                    <h2><strong>HARGA BELUM TERMASUK </strong></h2>
                    <ul>
                        <li>Tiket pesawat</li>
                        <li>Pengeluaran pribadi seperti : telp room, mini bar dan laundry</li>
                        <li>Tips guide & sopir</li>
                    </ul>
                    <div class="tombol-2 mb-4">
                        <button class="btn bt-list" data-toggle="modal" data-target="#exampleModal" type="button"
                            id="myBtn"><i class="fa fa-money" aria-hidden="true"></i>

                            Cek Harga Paket </button>

                        <a href="#pemesanan" class="btn bt-pesan"><i class=" fa fa-whatsapp"></i>
                            Pesan Sekarang</a>

                    </div>
                    <h2><strong>TESTIMONI </strong></h2>

                    <div class="slick-carousel  ftco-animate">
                        <div style="background-image: url('../umum/images/galeri-3.jpg');"></div>
                        <div style="background-image: url('../umum/images/galeri-1.jpg');"></div>
                        <div style="background-image: url('../umum/images/galeri-2.jpg');"></div>
                        <div style="background-image: url('../umum/images/galeri-4.jpg');"></div>
                        <div style="background-image: url('../umum/images/galeri-5.jpg');"></div>
                        <div style="background-image: url('../umum/images/galeri-6.jpg');"></div>
                    </div>
                </div>

                <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar bg-light py-md-5">
                    <div class="sidebar-box ">
                        <div class="form-pemesanan">
                            <form id="pemesanan">
                                <h2 class="h5"><strong>Pesan Tour</strong></h2>
                                <div class="form-group">
                                    <input type="text" class="form-control " id="paket" name="paket"
                                        value="{{ $tour->nama_tour }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control " name="nama" id="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name">Nomer Wa:</label>
                                    <input type="number" class="form-control " name="numberWa" id="numberWa" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">ALamat Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Pilih Hotel</label>
                                    <select class="form-control" id="hotel" name="hotel" required>
                                        <option selected>--Pilih Paket Hotel--</option>
                                        @if ($tour->lokasi == 'Bali')
                                            <optgroup label="Hotel Bintang 1">
                                                <option value="Hotel Bintang 1 RESTU KUTA (Standard)">RESTU KUTA (Standard)
                                                </option>
                                                <option value="Hotel Bintang 1 ROSANI KUTA (Superior)">ROSANI KUTA
                                                    (Superior)
                                                </option>
                                                <option value="Hotel Bintang 1 HARMONY LEGIAN (Superior)">HARMONY LEGIAN
                                                    (Superior)</option>
                                                <option value="Hotel Bintang 1 14 ROSES LEGIAN (Standard)">14 ROSES LEGIAN
                                                    (Standard)</option>
                                                <option value="Hotel Bintang 1 LEGIAN VILLAGE (Deluxe)">LEGIAN VILLAGE
                                                    (Deluxe)
                                                </option>
                                            </optgroup>
                                            <optgroup label="Hotel Bintang 2">
                                                <option value="Hotel Bintang 2 FAVE BY PASS (Standard)">FAVE BY PASS
                                                    (Standard)
                                                </option>
                                                <option value="Hotel Bintang 2 ANEKA KUTA (Standard)">ANEKA KUTA (Standard)
                                                </option>
                                                <option value="Hotel Bintang 2 PALM BEACH (Standard)">PALM BEACH (Standard)
                                                </option>
                                                <option value="Hotel Bintang 2 14 ROSES BEACH (Superior)">14 ROSES BEACH
                                                    (Superior)</option>
                                                <option value="Hotel Bintang 2 MELASTI KUTA (Standard)	">MELASTI KUTA
                                                    (Standard)</option>
                                            </optgroup>
                                            <optgroup label="Hotel Bintang 3">
                                                <option value="Hotel Bintang 3 ZIE HOTEL">ZIE HOTEL</option>
                                                <option value="Hotel Bintang 3 J4 LEGIAN">J4 LEGIAN</option>
                                                <option value="Hotel Bintang 3 RIVAVI STATION (Superior)">RIVAVI STATION
                                                    (Superior)</option>
                                                <option value="Hotel Bintang 3 SANTIKA KUTA (Superior)">SANTIKA KUTA
                                                    (Superior)
                                                </option>
                                                <option value="Hotel Bintang 3 GRAND WHIZ (Superior)">GRAND WHIZ (Superior)
                                                </option>
                                            </optgroup>
                                            <optgroup label="Hotel Bintang 4">
                                                <option value="Hotel Bintang 4 THE ONE LEGIAN">THE ONE LEGIAN</option>
                                                <option value="Hotel Bintang 4 HARPER LEGIAN">HARPER LEGIAN</option>
                                                <option value="Hotel Bintang 4 JAYAKARTA (Standard)">JAYAKARTA (Standard)
                                                </option>
                                                <option value="Hotel Bintang 4 RAMAYANA RESORT (Deluxe)">RAMAYANA RESORT
                                                    (Deluxe)</option>
                                                <option value="Hotel Bintang 4 SANTIKA BEACH (Deluxe)">SANTIKA BEACH
                                                    (Deluxe)
                                                </option>
                                            </optgroup>
                                            <optgroup label="Hotel Bintang 5">
                                                <option value="Hotel Bintang 5 INNA GRAND BALI (Superior)">INNA GRAND BALI
                                                    (Superior)</option>
                                                <option value="Hotel Bintang 5 KUTA PARADISO (Deluxe)">KUTA PARADISO
                                                    (Deluxe)
                                                </option>
                                                <option value="Hotel Bintang 5 RAMADA BINTANG (Superior)">RAMADA BINTANG
                                                    (Superior)</option>
                                                <option value="Hotel Bintang 5 BALI GARDEN (Superior)">BALI GARDEN
                                                    (Superior)
                                                </option>
                                                <option value="Hotel Bintang 5 PULLMAN KUTA (Deluxe)">PULLMAN KUTA (Deluxe)
                                                </option>
                                            </optgroup>
                                        @elseif($tour->lokasi == 'Lombok')
                                            <optgroup label="Hotel Bintang 1">
                                                <option value="Hotel Bintang 1 PURI SENGGIGI">PURI SENGGIGI</option>
                                                <option value="Hotel Bintang 1 TRANSIT HOTEL">TRANSIT HOTEL</option>
                                            </optgroup>
                                            <optgroup label="Hotel Bintang 2">
                                                <option value="Hotel Bintang 2 BUKIT SENGGIGI">BUKIT SENGGIGI</option>

                                            </optgroup>
                                            <optgroup label="Hotel Bintang 3">
                                                <option value="Hotel Bintang 3 PURI BUNGA">PURI BUNGA</option>
                                                <option value="Hotel Bintang 3 GRAHA">GRAHA</option>
                                                <option value="Hotel Bintang 3 PURI SARON">PURI SARON</option>

                                            </optgroup>
                                            <optgroup label="Hotel Bintang 4">
                                                <option value="Hotel Bintang 4 HOLIDAY RESORT">HOLIDAY RESORT</option>
                                                <option value="Hotel Bintang 4 THE JAYAKARTA">THE JAYAKARTA</option>
                                                <option value="Hotel Bintang 4 THE SENTOSA">THE SENTOSA</option>

                                            </optgroup>
                                            <optgroup label="Hotel Bintang 5">
                                                <option value="Hotel Bintang 5 MERUMATA">MERUMATA</option>
                                                <option value="Hotel Bintang 5 SHERATON SENGGIGI">SHERATON SENGGIGI
                                                </option>
                                            </optgroup>
                                        @elseif($tour->lokasi == 'Nusa Penida')
                                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Perjalanan</label><br>
                                    <input type="date" id="tanggal" class="form-control tanggal" name="tanggal">
                                </div>
                                <label for="jumlah-pesanan">Jumlah Peserta</label><br>

                                <div class="form-group d-flex justify-content-between">
                                    <button class="btn btn-primary  w-25" type="button" id="btn-min">-</button>
                                    <input type="number" id="jumlah-pesanan" class="form-control w-50"
                                        name="jumlah-pesanan" value="1">
                                    <button type="button" class="btn btn-primary  w-25" id="btn-plus">+</button>
                                </div>

                                <input type="button" class="btn btn-success w-100 p-2" value="Pesan Paket"
                                    onclick="sendWhatsApp()">

                                <button id="btn-wa">button</button>
                            </form>
                        </div>
                        <div class="p-1 bg-white w-100 mt-4"></div>
                        <h3 class="mt-4">Anda Mungkin Juga Suka</h3>
                        @foreach ($datatours as $data)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url(../images/gallery/{{ $data->id_gambar }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ route('pengunjung.paket-tour.show', $data->slug) }}">{{ $data->nama_tour }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="fa fa-calendar"></span>
                                                {{ date('d/m/Y', strtotime($data->created_at)) }}
                                            </a>
                                        </div>
                                        <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tombol">
        <button class="btn bt-list w-50 m-1" data-toggle="modal" data-target="#exampleModal" type="button"
            id="myBtn"><i class="fa fa-money" aria-hidden="true"></i>

            Cek Harga Paket </button>

        <a href="#pemesanan" class="btn bt-pesan w-50 m-1"><i class=" fa fa-whatsapp"></i>
            Pesan Sekarang</a>

    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('umum/lightbox/js/lightbox.js') }}"></script>
@endpush
@push('scripts')
    <script>
        $('#btn-wa').on('click', function(e) {

            alert('danger');

        })
        // Ambil elemen input jumlah pesanan
        const jumlahPesananInput = document.getElementById('jumlah-pesanan');

        // Ambil elemen tombol min
        const btnMin = document.getElementById('btn-min');

        // Tambahkan event click pada tombol min
        btnMin.addEventListener('click', function() {
            // Ambil nilai jumlah pesanan
            let jumlahPesanan = jumlahPesananInput.value;

            // Kurangi jumlah pesanan sebanyak 1
            jumlahPesanan--;

            // Jika jumlah pesanan kurang dari 1, set nilai jumlah pesanan menjadi 1
            if (jumlahPesanan < 1) {
                jumlahPesanan = 1;
            }

            // Update nilai jumalh
            // Update nilai jumlah pesanan pada input
            jumlahPesananInput.value = jumlahPesanan;
        });

        // Ambil elemen tombol plus
        const btnPlus = document.getElementById('btn-plus');

        // Tambahkan event click pada tombol plus
        btnPlus.addEventListener('click', function() {
            // Ambil nilai jumlah pesanan
            let jumlahPesanan = jumlahPesananInput.value;
            jumlahPesanan++;

            // Update nilai jumlah pesanan pada input
            jumlahPesananInput.value = jumlahPesanan;
        });

        const tanggalInput = document.getElementById('tanggal');

        // Set nilai awal tanggal menjadi tanggal hari ini
        tanggalInput.valueAsDate = new Date();
        const tanggalHariIniString = new Date().toISOString().split('T')[0];
        tanggalInput.setAttribute('min', tanggalHariIniString);




        function sendWhatsApp() {
            var namaPaket = document.getElementById("paket").value;
            var name = document.getElementById("nama").value;
            var wa = document.getElementById("numberWa").value;
            var email = document.getElementById("email").value;
            var namaHotel = document.getElementById("hotel").value;
            var tanggalPesanan = document.getElementById("tanggal").value;
            var jumlahPesanan = document.getElementById("jumlah-pesanan").value;

            if (validateForm()) {

                var message = "Hai Bali Mutiara Tours, Saya ingin memesan " + namaPaket + "%0ANama: " + name +
                    "%0ANomer WA: " + wa + "%0AEmail: " + email + "%0APaket Hotel: " + namaHotel +
                    "%0ATanggal Perjalanan: " + tanggalPesanan + "%0AJumlah Peserta: " + jumlahPesanan + "%20Orang" +
                    "%0ATerima kasih.";
                var url = "https://wa.me/" + 6287861184488 + "?text=" + message;

                gtag('event', 'conversion', {
                    'send_to': 'AW-11097109091/iJz4CJ3EwI0YEOPkwasp'
                });


                window.open(url);
            }
        }

        function validateForm() {
            var namaPaket = document.getElementById("paket").value;
            var name = document.getElementById("nama").value;
            var wa = document.getElementById("numberWa").value;
            var email = document.getElementById("email").value;
            var namaHotel = document.getElementById("hotel").value;
            var tanggalPesanan = document.getElementById("tanggal").value;
            var jumlahPesanan = document.getElementById("jumlah-pesanan").value;

            if (namaPaket == "" || name == "" || wa == "" || email == "" || namaHotel == "" || tanggalPesanan == "" ||
                jumlahPesanan == "") {
                alert("Please complete all forms before ordering.");
                return false;
            }
            return true;
        }
    </script>
@endpush
