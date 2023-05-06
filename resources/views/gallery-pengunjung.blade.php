@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('umum/lightbox/css/lightbox.css') }}">
@endsection
@section('content-main')
    <div class="slider-background">
        <div class="slider ">
            <div class="slide active hero-wrap-2 js-fullheight" style="background-image: url('umum/images/rafting-3.jpg')">
            </div>
            <div class="slide  hero-wrap-2 js-fullheight" style="background-image: url('umum/images/tari-kecak3.jpg')">
            </div>
            <div class="slide hero-wrap-2 js-fullheight" style="background-image: url('umum/images/bg-17.jpg')"></div>
            <div class="slide hero-wrap-2 js-fullheight" style="background-image: url('umum/images/tirta-empul.jpg')"></div>
            <div class="slide hero-wrap-2 js-fullheight" style="background-image: url('umum/images/pura-danu.jpg')">
            </div>
        </div>
        <div class="shadow-op"></div>
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Gallery <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Gallery</h1>
            </div>
        </div>
    </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @forelse ($gambar as $data)
                    <a href="{{ asset('images/gallery/' . $data->gambar) }}" data-lightbox="-" data-title="-"
                        class="col-lg-3 col-md-4 col-sm-6 mb-4 gambar ftco-animate">
                        <div class="card rounded-0">
                            <img src="{{ asset('images/gallery/' . $data->gambar) }}" class="card-img-top" alt="Gambar">
                        </div>
                    </a>
                @empty
                    <div class="alert alert-info">
                        tidak ada gambar
                    </div>
                @endforelse
            </div>
            <div class="mt-3 d-flex justify-content-center">
                {{ $gambar->links() }}
            </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('umum/lightbox/js/lightbox.js') }}"></script>
@endsection
