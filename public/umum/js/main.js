(function ($) {

    "use strict";

    $(window).stellar({
        responsive: true,
        parallaxBackgrounds: true,
        parallaxElements: true,
        horizontalScrolling: false,
        hideDistantElements: false,
        scrollProperty: 'scroll'
    });


    var fullHeight = function () {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function () {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    // loader
    var loader = function () {
        setTimeout(function () {
            if ($('#ftco-loader').length > 0) {
                $('#ftco-loader').removeClass('show');
            }
        }, 1);
    };
    loader();

    // Scrollax
    $.Scrollax();

   

    $('nav .dropdown').hover(function () {
        var $this = $(this);
        // 	 timer;
        // clearTimeout(timer);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').addClass('show');
    }, function () {
        var $this = $(this);
        // timer;
        // timer = setTimeout(function(){
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').removeClass('show');
        // }, 100);
    });


    $('#dropdown04').on('show.bs.dropdown', function () {
        console.log('show');
    });

    // scroll
    var scrollWindow = function () {
        $(window).scroll(function () {
            var $w = $(this),
                st = $w.scrollTop(),
                navbar = $('.ftco_navbar'),
                sd = $('.js-scroll-wrap');

            if (st > 150) {
                if (!navbar.hasClass('scrolled')) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if (navbar.hasClass('scrolled')) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if (st > 350) {
                if (!navbar.hasClass('awake')) {
                    navbar.addClass('awake');
                }

                if (sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if (st < 350) {
                if (navbar.hasClass('awake')) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if (sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();

    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var counter = function () {

        $('#section-counter, .hero-wrap, .ftco-counter').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
                $('.number').each(function () {
                    var $this = $(this),
                        num = $this.data('number');
                    console.log(num);
                    $this.animateNumber({
                        number: num,
                        numberStep: comma_separator_number_step
                    }, 7000);
                });

            }

        }, {
            offset: '95%'
        });

    }
    counter();


    var contentWayPoint = function () {
        var i = 0;
        $('.ftco-animate').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function () {

                    $('body .ftco-animate.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn ftco-animated');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft ftco-animated');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight ftco-animated');
                            } else {
                                el.addClass('fadeInUp ftco-animated');
                            }
                            el.removeClass('item-animate');
                        }, k * 50, 'easeInOutExpo');
                    });

                }, 100);

            }

        }, {
            offset: '95%'
        });
    };
    contentWayPoint();


    $(document).ready(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
    
    
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            arrows: false,
            centerMode: true,
            focusOnSelect: true
        });
    
    });


    $(document).ready(function() {
        var slideCount = $('.slide').length;
        var currentSlide = 0;

        function nextSlide() {
            $('.slide').eq(currentSlide).removeClass('active');
            currentSlide = (currentSlide + 1) % slideCount;
            $('.slide').eq(currentSlide).addClass('active');
        }

        setInterval(nextSlide, 4000);
    });

    $(document).ready(function() {
        $('.slick-carousel').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            responsive: [{
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false,
                        infinite: true,
                        speed: 300,
                        adaptiveHeight: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false,
                        infinite: true,
                        speed: 300,
                        adaptiveHeight: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll:1,
                        dots: true,
                        arrows: false,
                        infinite: true,
                        speed: 300,
                        adaptiveHeight: true
                    }
                }
            ]
        });

    });

    $(document).ready(function() {
        $('.multiple-items').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });
    $(document).ready(function() {
        setTimeout(function() {
            $('#myModal').modal('show');
        }, 4000);
    });
})(jQuery);

// Ambil elemen input jumlah pesanan
const jumlahPesananInput = document.getElementById('jumlah-pesanan');

// Ambil elemen tombol min
const btnMin = document.getElementById('btn-min');

// Tambahkan event click pada tombol min
btnMin.addEventListener('click', function () {
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
btnPlus.addEventListener('click', function () {
    // Ambil nilai jumlah pesanan
    let jumlahPesanan = jumlahPesananInput.value;
    jumlahPesanan++;

    // Update nilai jumlah pesanan pada input
    jumlahPesananInput.value = jumlahPesanan;
});

const tanggalInput = document.getElementById('tanggal');

// Set nilai awal tanggal menjadi tanggal hari ini
tanggalInput.valueAsDate = new Date();
const tanggalHariIni = new Date();
tanggalInput.setAttribute('min', tanggalHariIniString);

// function tampilkanModal() {
// 	var modal = document.getElementById("modalPemesanan");
// 	modal.classList.add("show");
// }

// $("#myBtn").click(function (event) {
// 	event.preventDefault();
// 	// kode Anda di sini
//   });

//   function tampilkanModal() {
// 	var tanggal = document.getElementById("tanggal").value;
// 	var jumlah = document.getElementById("jumlah-pesanan").value;
// 	document.getElementById("tanggal_modal").value = tanggal;
// 	document.getElementById("jumlah_modal").value = jumlah;

// 	var modal = document.getElementById("modalPemesanan");
// 	modal.style.display = "block";
//   }

//   var span = document.getElementsByClassName("close")[0];
//   span.onclick = function () {
// 	var modal = document.getElementById("modalPemesanan");
// 	modal.style.display = "none";
//   }

//   window.onclick = function (event) {
// 	var modal = document.getElementById("modalPemesanan");
// 	if (event.target == modal) {
// 	  modal.style.display = "none";
// 	}
//   }


$('.bt-lihatPaket').on('click', function () {
    $(this).toggleClass('clicked');
});


function sendWhatsApp() {
    var namaPaket = document.getElementById("paket").value;
    var name = document.getElementById("nama").value;
    var wa = document.getElementById("numberWa").value;
    var email = document.getElementById("email").value;
    var namaHotel = document.getElementById("hotel").value;
    var tanggalPesanan = document.getElementById("tanggal").value;
    var jumlahPesanan = document.getElementById("jumlah-pesanan").value;

    if (validateForm()) {
        var message = "Hai Bali Mutiara Tours, Saya ingin memesan " + namaPaket + "%0ANama: " + name + "%0ANomer WA: " + wa + "%0AEmail: " + email + "%0APaket Hotel: " + namaHotel + "%0ATanggal Perjalanan: " + tanggalPesanan + "%0AJumlah Peserta: " + jumlahPesanan + "%20Orang" + "%0ATerima kasih.";
        var url = "https://wa.me/" + 6287861184488 + "?text=" + message;
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

    if (namaPaket == "" || name == "" || wa == "" || email == "" || namaHotel == "" || tanggalPesanan == "" || jumlahPesanan == "") {
        alert("Harap lengkapi semua form sebelum memesan paket.");
        return false;
    }
    return true;
}


$("form").submit(function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    var mailto = "mailto:dewa@balimutiaratours.id?subject=" + subject + "&body=" + message + " Name :" + name + " Email :" + email;
    window.location.href = mailto;
    $(".alert-success").addClass("show");
});


