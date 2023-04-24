@extends('layouts.main')

@section('content-main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('umum/images/pura-danu.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Paket Tour <i
                                class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Paket Tour</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
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
        <div class="container" id="hasil">
            <div class="row">
                @forelse ($tours as $card)
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
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $tours->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
