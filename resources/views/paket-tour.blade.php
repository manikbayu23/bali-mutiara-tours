@extends('layouts.main')

@section('content-main')
    <div class="slider-background">
        <div class="slide-fade">
            <div class="fade-items">
                <img src="{{ asset('gambar/rafting.jpg') }}" alt="rafting" class="w-100 h-100" style="object-fit:cover;">
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
                <img src="{{ asset('gambar/nusa-penida.jpg') }}" alt="nusa penida" class="w-100 h-100"
                    style="object-fit:cover;">
            </div>
        </div>
        <div class="shadow-op"></div>
        <div class="nav-slider">
            <div class="container-fluid">
                <div class="ftco-animate text-center">
                    <h1 class="mb-0 isi-intro">Paket Tour</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Tours <i
                                class="fa fa-chevron-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="{{ route('pengunjung.paket-tour') }}" method="GET" class="search-property-1"
                            id="fiter">
                            <div class="row no-gutters">
                                <div class="col-md d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Lokasi</label>
                                        <div class="select-wrap">

                                            <div class="icon"><span class="fa fa-chevron-down"></span>
                                            </div>
                                            <div class="form-field">
                                                <select name="lokasi" id="destinasi" class="form-control">
                                                    <option value="">Semua Lokasi</option>
                                                    <option value="Bali" {{ $lokasi == 'Bali' ? 'selected' : '' }}>
                                                        Bali</option>
                                                    <option value="Lombok" {{ $lokasi == 'Lombok' ? 'selected' : '' }}>
                                                        Lombok</option>
                                                    <option value="Nusa Penida"
                                                        {{ $lokasi == 'Nusa Penida' ? 'selected' : '' }}>Nusa Penida
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Durasi</label>
                                        <div class="select-wrap">

                                            <div class="icon"><span class="fa fa-chevron-down"></span>
                                            </div>
                                            <div class="form-field">
                                                <select name="durasi" id="durasi" class="form-control">
                                                    <option value="">Semua Durasi</option>
                                                    <option value="1 Hari" {{ $durasi == '1 Hari' ? 'selected' : '' }}>1
                                                        Hari
                                                    </option>
                                                    <option value="2 Hari 1 Malam"
                                                        {{ $durasi == '2 Hari 1 Malam' ? 'selected' : '' }}>2 Hari 1 Malam
                                                    </option>
                                                    <option value="3 Hari 2 Malam"
                                                        {{ $durasi == '3 Hari 2 Malam' ? 'selected' : '' }}>3 Hari 2 Malam
                                                    </option>
                                                    <option value="4 Hari 3 Malam"
                                                        {{ $durasi == '4 Hari 3 Malam' ? 'selected' : '' }}>4 Hari 3 Malam
                                                    </option>
                                                    <option value="5 Hari 4 Malam"
                                                        {{ $durasi == '5 Hari 4 Malam' ? 'selected' : '' }}>5 Hari 4 Malam
                                                    </option>
                                                    <option value="6 Hari 5 Malam"
                                                        {{ $durasi == '6 Hari 5 Malam' ? 'selected' : '' }}>6 Hari 5 Malam
                                                    </option>
                                                    <option value="6 Hari 5 Malam"
                                                        {{ $durasi == '7 Hari 6 Malam' ? 'selected' : '' }}>6 Hari 5 Malam
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Kategori</label>
                                        <div class="select-wrap">

                                            <div class="icon"><span class="fa fa-chevron-down"></span>
                                            </div>
                                            <div class="form-field">
                                                <select name="kategori" id="durasi" class="form-control">
                                                    <option value="">Semua Kategori</option>
                                                    <option value="Reguler" {{ $kategori == 'Reguler' ? 'selected' : '' }}>
                                                        Reguler</option>
                                                    <option value="Fantastic"
                                                        {{ $kategori == 'Fantastic' ? 'selected' : '' }}>Fantastic</option>
                                                    <option value="Adventure"
                                                        {{ $kategori == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex">
                                    <div class="form-group d-flex w-100 border-0">
                                        <div class="form-field w-100 align-items-center d-flex">
                                            <button type="submit" value="Cari"
                                                class="align-self-stretch form-control btn"><i class="fa fa-search"></i>
                                                Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container container-sm" id="hasil">
            <div class="row row-cols-2 row-cols-sm-6 row-cols-md-4">
                @forelse ($tours as $card)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="tours show ftco-animate shadow-sm ">
                            <a href="{{ route('pengunjung.paket-tour.show', $card->slug) }}">
                                @if ($card->persentase == null)
                                @else
                                    <div class="diskon-logo-show d-flex align-items-center justify-content-center"
                                        style="background-image: url('gambar/bookmark.png')">
                                        <div class="text-center">
                                            <span>{{ $card->persentase }}%</span> <span class="text-white">OFF</span>
                                        </div>

                                    </div>
                                @endif
                                <div class="img-tour show"
                                    style="background-image: url(images/gallery/{{ $card->id_gambar }});">
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
                                    <ul class="rating show">
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
                                        class="w-100 btn btn-primary btn-pesan-tour">pesan sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-primary text-center">tidak ada paket tour</div>
                @endforelse
            </div>
            <div class="d-flex mt-5 justify-content-center">
                {{ $tours->links() }}
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
