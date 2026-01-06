<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{--  --}}
    <style>
    /* warna scrollbar */
    ::-webkit-scrollbar {
        width: 12px;
    }

    /* warna track */
    ::-webkit-scrollbar-track {
        background: #005555;
    }

    /* warna thumb */
    ::-webkit-scrollbar-thumb {
        background: #009999;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    </style>
    <script>
    //     // mencegah klik kanan pada halaman web
    document.addEventListener("contextmenu", function(e) {
        e.preventDefault();
    }, false);
    document.onkeydown = function(e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
    }
    </script>
    {{--  --}}

    <title>SMK Budi Mulia Pakisaji - @yield('title')</title>
    <meta content="SMK Budi Mulia Pakisaji" name="description">
    <meta content="SMK Budi Mulia Pakisaji" name="keywords">
    <!---->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9539844897878104"
        crossorigin="anonymous"></script>
    <meta name="google-adsense-account" content="ca-pub-9539844897878104">
    <!---->
    <meta name="keywords"
        content="sekolah, pendidikan, belajar, murid, guru, pelajaran, smk, sekolah menengah atas, bm, budi mulia">
    <meta name="description"
        content="SMK Budi Mulia Pakisaji adalah Sekolah menengah kejuruan di Kab.Malang Indonesia di bidang Jaringan, Desain, Teknologi dan Informatika.">
    <meta property="og:site_name" content="SMK Budi Mulia" />
    <meta property="og:url" content="https://smkbudimuliapakisaji.sch.id" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Website SMK Budi Mulia Pakisaji" />
    <meta property="og:image" content="https://smkbudimuliapakisaji.sch.id/img/hariguru3.jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="SMK Budi Mulia Pakisaji" />
    <meta content=" #005555" name="theme-color" />


    <!-- Favicons -->
    <link href="{{('/public/assets/aset/005441cb-ab2b-4c72-bfe9-6b8aa15f0ee5.png')}}" rel="icon">
    <link href="{{('/public/assets/aset/005441cb-ab2b-4c72-bfe9-6b8aa15f0ee5.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- owl -->
    <!--<link rel="stylesheet" href="{{('/carosel/owl.carousel.min.css')}}">-->
    <!--<link rel="stylesheet" href="{{('/carosel/owl.theme.default.min.css')}}">-->
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick-theme.css') }}" />


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- Vendor CSS Files -->
    <link href="{{('/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/glightbox/css/glightbox.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{('/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/assets/aset/logo.png" class="img-fluid" alt=""></a>
            <div class"justify-content-end">
                <a class="btn btn-outline-warning d-inline d-lg-none" href="ppdb" role="button">SPMB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div style="width: 70%" class="offcanvas offcanvas-end mobil" tabindex="-1" id="offcanvasDarkNavbar"
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
                            <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Berita
                                Terkini</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ Request::is('profil', 'guru', 'kegiatan', 'prestasi') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang Kami <b><i class="bi bi-chevron-compact-down"></i></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark rounded">
                                <!--<li><a class="dropdown-item rounded" href="blog">Berita Terkini</a></li>-->
                                <li><a class="dropdown-item rounded {{ Request::is('profil') ? 'active' : '' }}"
                                        href="/profil">Profil</a></li>
                                <li><a class="dropdown-item rounded" href="#">Sejarah</a></li>
                                <li><a class="dropdown-item rounded" href="#">Visi & Misi</a></li>
                                <li><a class="dropdown-item rounded {{ Request::is('guru') ? 'active' : '' }}"
                                        href="/guru">Pengajar</a></li>
                                <li><a class="dropdown-item rounded" href="#">Akreditasi</a></li>
                                <li><a class="dropdown-item rounded" href="#">Hubungan Industri</a></li>
                                <li><a class="dropdown-item rounded {{ Request::is('prestasi') ? 'active' : '' }}"
                                        href="/prestasi">Prestasi</a></li>
                                <li><a class="dropdown-item rounded {{ Request::is('kegiatan') ? 'active' : '' }}"
                                        href="/kegiatan">Kegiatan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Program</a>
                        </li>
                        <!--<li class="nav-item dropdown">-->
                        <!--  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                        <!--    Jurusan <b><i class="bi bi-chevron-compact-down"></i></b>-->
                        <!--  </a>-->
                        <!--  <ul class="dropdown-menu dropdown-menu-dark rounded">-->
                        <!--    <li><a class="dropdown-item rounded" href="#">Teknik Komputer & Jaringan (TKJ)</a></li>-->
                        <!--    <li><a class="dropdown-item rounded" href="#">Desain Komunikasi Visual (DKV)</a></li>-->
                        <!--    <li><a class="dropdown-item rounded" href="#">Bidang Daring (BD)</a></li>-->
                        <!--    <li><a class="dropdown-item rounded" href="jurusan-sija">Sistem Informasi Jaringan & Aplikasi (SIJA)</a></li>-->
                        <!--  </ul>-->
                        <!--</li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Informasi</a>
                        </li>

                    </ul>

                    <div class="d-none d-lg-inline">
                        <a href="/ppdb"><button class="btn btn-outline-warning" type="button">SPMB</button></a>
                    </div>
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
                                    (YPIKU) "BUDI MULIA"</em></p>
                            <p><a
                                    href="https://www.google.com/maps/place/Smk+Budi+Mulia+Pakisaji,+Jl.+Anjasmoro+No.108,+Bendo,+Karangpandan,+Kec.+Pakisaji,+Kabupaten+Malang,+Jawa+Timur+65162/@-8.0721185,112.5892621,17z/data=!3m1!4b1!4m9!1m2!2m1!1ssmk+budi+mulia+pakisaji!3m5!1s0x2e789dc24973f83d:0xc3f6f84a45b5de37!8m2!3d-8.0721238!4d112.5934893!15sChdzbWsgYnVkaSBtdWxpYSBwYWtpc2FqaZIBEWNvbXBvdW5kX2J1aWxkaW5n4AEA">
                                    <i class="bi bi-geo-alt-fill me-2"></i>
                                    Jl. Anjasmoro No.108 Bendo, Karangpandan Kec. Pakisaji, Kabupaten Malang, Jawa Timur
                                    65162, Indonesia<br></a>
                                <a href="tel:0341837317" class="me-2"><strong><i
                                            class="bi bi-telephone-fill me-2"></i></strong>(0341) 837317</a>/<a
                                    href="tel:081334562731" class="ms-2">081334562731<br></a>
                                <a href="mailto:Official@smkbudimuliapakisaji.sch.id"><strong><i
                                            class="bi bi-envelope-fill me-2"></i></strong>Official@smkbudimuliapakisaji.sch.id<br></a>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/smkbmpakisaji" class="twitter"><i
                                        class="bx bxl-twitter"></i></a>
                                <a href="https://facebook.com/smkbudimuliapakisaji" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="https://instagram.com/smkbmpakisaji" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                                <a href="https://www.youtube.com/@smkbudimulia4514" class="google-plus"><i
                                        class="bx bxl-youtube"></i></a>
                                <a href="https://www.tiktok.com/@smkbmpakisaji" class="linkedin"><i
                                        class="bx bxl-tiktok"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="text-light">Produk Kami</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">E-Learning BM</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://smkbm.net">BM-NET</a></li>
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

    <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>

    <!-- Vendor JS Files -->
    <script src="{{('/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{('/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{('/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{('/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{('/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{('/assets/js/main.js')}}"></script>

    <!-- owl -->
    <!--  <script src="{{('/carosel/jquery.min.js')}}"></script>-->
    <!--  <script src="{{('/carosel/owl.carousel.min.js')}}"></script>-->


    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3,
            },
            1300: {
                items: 4,
            }
        }
    });
    </script>
    <script>
    // Ambil elemen "nav-link" pada bagian dropdown menu
    var dropdownLink = document.querySelector('.dropdown .nav-link');

    // Periksa apakah salah satu dari link dropdown sedang aktif
    if (dropdownLink.classList.contains('active')) {
        // Jika iya, tambahkan kelas "active" ke "nav-item" pada bagian dropdown menu
        dropdownLink.closest('.nav-item').classList.add('active');
    }
    </script>
</body>

</html>