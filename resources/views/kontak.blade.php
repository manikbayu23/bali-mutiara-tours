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
        <div class="nav-slider">
            <div class="container-fluid">
                <div class="ftco-animate text-center">
                    <h1 class="mb-0 isi-intro">Kontak Kami</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Kontak <i
                                class="fa fa-chevron-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb contact-section mb-4 bg-light">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h3 class="mb-2">Alamat</h3>
                        <p>Jl. Jaya Giri XI
                            No. 19, Denpasar, Bali</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-2">Nomer Telepon</h3>
                        <p><a href="https://api.whatsapp.com/send?phone=6282133226622">+62 821 3322
                                6622 </a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <h3 class="mb-2">Alamat Email</h3>
                        <p><a
                                href="mailto:dewa@balimutiaratours.id?subject=Hai, Bali Mutiara Tours..">dewa@balimutiaratours</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <h3 class="mb-2">Website</h3>
                        <p><a href="https://balimutiaratours.id">balimutiaratours.id</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2893836751696!2d115.2230486751723!3d-8.664004688171726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24164b3a36f89%3A0xf9dda403422036fc!2sBali%20Mutiara%20Tours!5e0!3m2!1sid!2sid!4v1683345466387!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
