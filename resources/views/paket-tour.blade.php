@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('umum/css/style2.css') }}">
    <style>
        p,
        li {
            color: #343A40;
        }

        @media (max-width: 576px) {


            .h-1 {
                font-size: 26px;

            }

            h1 strong {
                font-size: 26px;

            }

            h2 strong {
                font-size: 20px;

            }

            .h-2 {
                font-size: 20px;

            }

            p,
            li,
            a {
                font-size: 12px;
            }

        }

        .tour-desk h1 {
            font-size: 2rem;
            padding: 10px;
            border-left: 10px solid #343A40;
            margin-bottom: 20px;
        }

        .tour-desk h2 {
            font-size: 1.5rem;
            padding: 10px;
            background-color: rgb(247, 247, 247);
        }
    </style>
@endsection

@section('content-main')
    <section class="foto bg-dark">
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light content ">
        <div class="container bg-white p-5 shadow">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 rounded-4">
                    <img class="img-fluid shadow-sm" width="500px" src="{{ asset('images/gallery/' . $tour->id_gambar) }}">
                </div>
                <div class="col">
                    <h1 class="h-1"><b>{{ $tour->nama_tour }}</b></h1>
                    <p class="text-secondary mb-3"><i class="fa fa-map-marker"></i> {{ $tour->lokasi }}<i
                            style="margin-left: 20px;" class="fa fa-clock-o"></i> {{ $tour->durasi }}</p>

                    <h2 class="h-2"><b>IDR {{ $tour->harga_utama }}K</b></h2>
                    <div class="h6 bintang"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="row tombol1">
                        <button class="btn bt-list" data-toggle="modal" data-target="#exampleModal" type="button"
                            id="myBtn"><i class="fa fa-money" aria-hidden="true"></i>

                            Cek Harga Paket </button>

                        <a href="#pemesanan" class="btn  bt-pesan"><i class=" fa fa-whatsapp"></i>
                            Pesan Sekarang</a>

                    </div>
                    <div class="d-flex mt-4">
                        <div class="col-4">
                            <p class=""><i class="fa fa-solid fa-map-pin"></i> {{ $total_destinasi }} destinasi</p>
                        </div>
                        <div id="social-links" class="d-flex justify-content-end  col">
                            <ul>
                                <a class="mr-2"><i> Share : </i></a>
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
        </div>
    </section>


    <div class="modal fade" style="z-index: 9999; " tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>DAFTAR HARGA PAKET </b> </h5>
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


    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light tour-desk mt-3">
        <div class="container p-lg-5 p-sm-1 p-md-4 bg-white shadow">
            <div class="row">
                <div class="col-lg-8 ftco-animate py-md-5 mt-md-5 pt-4 mt-lg-1">
                    <div>
                        {!! $tour->deskripsi !!}
                    </div>
                    <div class="tombol-2 mb-4">
                        <button class="btn bt-list" data-toggle="modal" data-target="#exampleModal" type="button"
                            id="myBtn"><i class="fa fa-money" aria-hidden="true"></i>

                            Cek Harga Paket </button>

                        <a href="#pemesanan" class="btn bt-pesan"><i class=" fa fa-whatsapp"></i>
                            Pesan Sekarang</a>

                    </div>
                    <h2><strong>Destinasi</strong></h2>
                    <p>
                        @foreach ($destinasiList as $destinasi)
                            <strong> {{ $destinasi->nama_destinasi }}</strong> ,
                        @endforeach
                    </p>

                </div>

                <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
                    <div class="sidebar-box ftco-animate">
                        <div class="form-pemesanan">
                            <form id="pemesanan">
                                <h1 class="h5"><strong>Pesan Tour</strong></h1>
                                <div class="form-group">
                                    <input type="hidden" id="paket" name="paket" value="{{ $tour->nama_tour }}">
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
                            </form>
                        </div>
                        <div class="p-1 bg-white w-100 mt-4"></div>
                        <h3 class="mt-4">Anda Mungkin Juga Suka</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url(../images/destianasi-hits/attlas.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="artikel-2.html">Destinasi Wisata Di Bali Yang Hits & Populer
                                        Buat
                                        Liburan</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> Februari 15, 2023</a>
                                    </div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                </div>
                            </div>
                        </div>
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
