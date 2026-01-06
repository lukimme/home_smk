<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{--  --}}

    {{--  --}}

    <title>SMK Budi Mulia Pakisaji - @yield('title')</title>
    <meta content="SMK Budi Mulia Pakisaji" name="description">
    <meta content="SMK Budi Mulia Pakisaji" name="keywords">

    <!---->
    <meta name="keywords" content="ppdb, smk, SMK, Smk, bm, Budi Mulia, budi mulia, PPDB, 2023/2024, pakisaji, malang">
    <meta name="author" content="Lukman Hakim">
    <meta property="og:url" content="https://smkbudimuliapakisaji.sch.id/ppdb" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PPDB SMK Budi Mulia Pakisaji" />
    <meta property="og:description" content="yuk daftar sekarang di smk budi mulia pakisaji" />
    <meta property="og:image" content="https://smkbudimuliapakisaji.sch.id/assets/img/img1212.png" />
    <meta property="og:site_name" content="SMK BM Pakisaji" />
    <meta content=" #005555" name="theme-color" />



    <!-- Favicons -->
    <link href="{{('public/assets/aset/005441cb-ab2b-4c72-bfe9-6b8aa15f0ee5.png')}}" rel="icon">
    <link href="{{('public/assets/aset/005441cb-ab2b-4c72-bfe9-6b8aa15f0ee5.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <!-- ====== Tailwind CDN (tanpa preflight agar tidak mereset Bootstrap) ====== -->
<script>
  tailwind = window.tailwind || {};
  tailwind.config = {
    corePlugins: { preflight: false },
    theme: {
      extend: {}
    }
  }
</script>
<script src="https://cdn.tailwindcss.com"></script>

    <!-- owl -->
    <link rel="stylesheet" href="{{('carosel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{('carosel/owl.theme.default.min.css')}}">

    <!-- Vendor CSS Files -->
    <link href="{{('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/glightbox/css/glightbox.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

    <nav id="nav-p" class="navbar navbar-expand-lg navbar-dark fixed-top sticked">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="assets/aset/logo.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="width: 50%" class="offcanvas offcanvas-end mobil" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('ppdb') ? 'active' : '' }}" aria-current="page"
                                href="ppdb">SPMB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#gel">Daftar Gelombang</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--  <a class="nav-link" href="ppdb">PPDB</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">

                            <img src="{{('assets/aset/logo.png')}}" alt="">

                            <p class="pb-3 text-center"><em>SMK Budi Mulia Pakisaji berdiri sejak tahun 2003 dan salah
                                    satu lembaga dibawah naungan Yayasan Pendidikan Islam dan Kesejahteraan Ummat
                                    (YPTIKU) "BUDI MULIA"</em></p>
                            <p><a
                                    href="https://www.google.com/maps/place/Smk+Budi+Mulia+Pakisaji,+Jl.+Anjasmoro+No.108,+Bendo,+Karangpandan,+Kec.+Pakisaji,+Kabupaten+Malang,+Jawa+Timur+65162/@-8.0721185,112.5892621,17z/data=!3m1!4b1!4m9!1m2!2m1!1ssmk+budi+mulia+pakisaji!3m5!1s0x2e789dc24973f83d:0xc3f6f84a45b5de37!8m2!3d-8.0721238!4d112.5934893!15sChdzbWsgYnVkaSBtdWxpYSBwYWtpc2FqaZIBEWNvbXBvdW5kX2J1aWxkaW5n4AEA">
                                    <i class="bi bi-geo-alt-fill me-2"></i>
                                    Jl. Anjasmoro No.108 Bendo, Karangpandan Kec. Pakisaji, Kabupaten Malang, Jawa Timur
                                    65162, Indonesia<br></a>
                                <a href="#"><strong><i class="bi bi-telephone-fill me-2"></i></strong>(0341)
                                    837317<br></a>
                                <a href="Official@smkbudimuliapakisaji.sch.id"><strong><i
                                            class="bi bi-envelope-fill me-2"></i></strong>Official@smkbudimuliapakisaji.sch.id<br></a>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="text-light">Produk Kami</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">E-Learning BM</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">BM-NET</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">BM-MART</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">BM-PRODUCTION</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">BM-VICTORY</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="text-light">Layanan Kami</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Copyright &copy; <span><strong>2022 - {{ date('Y') }}</strong> Budi Mulia Vocational</span>. All Rights
                Reserved
            </div>
            <div class="credits">


                Developed by <strong>IT BMDev and SIJA major.</strong>

            </div>
        </div>
    </footer><!-- End Footer -->

    <!--<div id="preloader"></div>-->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{('assets/js/main.js')}}"></script>

    <!-- owl -->
    <script src="{{('carosel/jquery.min.js')}}"></script>
    <script src="{{('carosel/owl.carousel.min.js')}}"></script>

    <script>
    $('.owl-carousel').owlCarousel({
        center: true,
        stagePadding: 150,
        loop: true,
        margin: 2,
        items: 2,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        // nav:true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
                loop: true,
                margin: 10,
                responsiveClass: true,
                center: false
                // margin: 
            },
            500: {
                items: 1,
                stagePadding: 49,
                margin: 10
            },
            575: {
                items: 2,
                stagePadding: 0,
            },
            1000: {
                items: 2,
                stagePadding: 0
            },
            1355: {
                items: 3,
                stagePadding: 0
            }
        }
    })
    </script>
</body>

</html>