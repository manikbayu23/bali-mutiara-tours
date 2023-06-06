@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('umum/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('umum/lightbox/css/lightbox.css') }}">
@endsection
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
        <div class="nav-slider">
            <div class="container-fluid">
                <div class="ftco-animate text-center">
                    <h1 class="mb-0 isi-intro">Gallery</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Gallery <i
                                class="fa fa-chevron-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-6 row-cols-md-4">
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
