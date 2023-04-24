@extends('layouts.main')


@section('content-main')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('umum/images/bg-12.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Contact <i
                                class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Hubungi Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h3 class="mb-2">Alamat</h3>
                        <p>Jl. Kembang Matahari
                            No. 3XX Denpasar, Bali</p>
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
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="mailto:dewa@balimutiaratours.id" method="post" enctype="text/plain"
                        class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Your Name"
                                name="nama">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" class="form-control" placeholder="Your Email"
                                name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" class="form-control" placeholder="Subject" name="subjek">
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    <div class="alert alert-success" role="alert" style="display:none">
                        Pesan Anda berhasil dikirim!
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
