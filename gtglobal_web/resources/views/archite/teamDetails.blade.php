<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/teamDetails.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:03 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Team Details</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('archite/img/favicon.ico') }}">
    <!-- Fonts (google font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&amp;family=Tajawal:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <!-- Font awesome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/all.min.css') }}">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/bootstrap.min.css') }}">
    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/owl.carousel.css') }}">
    <!-- Modal Video stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/modal-video.min.css') }}">
    <!-- Owl theme stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/owl.theme.default.min.css') }}">
    <!-- AOS stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/aos.css') }}">
    <!-- Animated heading stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/jquery.animatedheadline.css') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('archite/css/normalize.css') }}">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/responsive.css') }}">
</head>

<body>
    <main class="team-details-page">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-35">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="nav nav-secondary d-flex align-items-center justify-content-between">
                            <!-- logo -->
                            <div class="logo-container">
                                <img class="header-logo" src="{{ asset('archite/img/LogoTwo.png') }}" alt="logo">
                            </div>
                            <div class="nav-menu d-flex align-items-center">
                                <ul
                                    class="header-menu d-none d-lg-flex flex-row align-items-center z-1 position-relative mr-35 menu">
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="index">Trang chủ</a>
                                        <ul class="submenu-container">
                                            <li><a class="submenu-link text-uppercase fw-500" href="index-2">Home
                                                    1</a></li>
                                            <li><a class="submenu-link text-uppercase fw-500" href="index2">Home
                                                    2</a></li>
                                            <li><a class="submenu-link text-uppercase fw-500" href="index3">Home
                                                    3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="about">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="services">Dịch vụ</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="portfolio">Dự án</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="blog">Tin tức</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="contact">Liên hệ</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="recruitment">Tuyển dụng</a>
                                    </li>
                                </ul>
                                <div class="desktop-menu-offcanvas position-relative">
                                    <img class="off-canvas-icon" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                                        src="{{ asset('archite/img/menuToggleIvonTwo.png') }}" alt="menu toggle icon">
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                        aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <img id="offcanvasRightLabel" class="header-logo offcanvas-title img-fluid"
                                                src="{{ asset('archite/img/LogoTwo.png') }}" alt="logo">
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div class="offcanvas-body">
                                                <ul class="accordion-menu">
                                                    <li>
                                                        <div class="dropdownlink">
                                                            <span class="text-uppercase">
                                                                <a href="index">Trang chủ</a>
                                                            </span>

                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="dropdownlink">
                                                            <span class="text-uppercase">
                                                                <a href="about">Giới thiệu</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdownlink">
                                                            <span class="text-uppercase">
                                                                <a href="portfolio">Dự án</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdownlink">
                                                            <span class="text-uppercase">
                                                                <a href="blog">Tin tức</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdownlink">
                                                            <span class="text-uppercase">
                                                                <a href="recruitment">Tuyển dụng</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdownlink">
                                                            <span class="text-uppercase">
                                                                <a href="contact">Liên hệ</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- start team details -->
        <section class="team-details section-padding-bottom section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="team-details-wrapper">
                            <h2 class="h2 text-white fw-700 line-height-3 mb-70 appear-text">
                                Gerald K. Banks Skills & <br>Biography
                            </h2>
                            <div class="row">
                                <div class="col-12 col-lg-4 pe-xl-4">
                                    <div class="hover-img-container">
                                        <img src="{{ asset('archite/img/teamDetailsImg.jpg') }}" alt="team member"
                                            class="img-fluid">
                                    </div>
                                    <div class="mt-50 d-flex flex-wrap">
                                        <a href="https://facebook.com/"
                                            class="btn small-light-btn text-capitalize mr-20 mb-20"><span
                                                class="z-1 position-relative">facebook</span></a>
                                        <a href="https://linkedin.com/"
                                            class="btn small-light-btn text-capitalize mr-20 mb-20"><span
                                                class="z-1 position-relative">Linkedin</span></a>
                                        <a href="https://instagram.com/"
                                            class="btn small-light-btn text-capitalize mr-20 mb-20"><span
                                                class="z-1 position-relative">Instagram</span></a>
                                        <a href="https://twitter.com/"
                                            class="btn small-light-btn text-capitalize mr-20 mb-20"><span
                                                class="z-1 position-relative">Twitter</span></a>
                                        <a href="https://dribble.com/"
                                            class="btn small-light-btn text-capitalize mr-20 mb-20"><span
                                                class="z-1 position-relative">Dribble</span></a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 ps-3 ps-lg-5">
                                    <div class="mb-70 mt-4 mt-lg-0">
                                        <h3 class="h3 dark-text fw-700 line-height-3">
                                            Gerald K. Banks
                                        </h3>
                                        <p class="p dark-text fw-500 line-height-3 mt-1 mb-25">
                                            Interior Designer
                                        </p>
                                        <p class="p body-text fw-500 line-height-5 mb-20">
                                            I’am are many variations of passages of Lorem Ipsum available, but the
                                            majority have
                                            suffered alteration in some form, by injected humour, or randomised words.
                                        </p>
                                        <p class="p body-text fw-500 line-height-5 mb-20">
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                            isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                            generators
                                            on the Internet tend to repeat predefined chunks.
                                        </p>
                                    </div>
                                    <div class="team-details-skills">
                                        <h3 class="h3 dark-text fw-700 line-height-3">
                                            Skills
                                        </h3>
                                        <div class="row mt-25 ps-4">
                                            <div class="col-12 col-sm-6 feature-one-box mb-40">
                                                <p class="brand-text fw-700 feature-one-number-top">01</p>
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    Design Concept
                                                </h5>
                                                <p
                                                    class="body-text-two fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers.
                                                </p>
                                            </div>
                                            <div class="col-12 col-sm-6 feature-one-box mb-40">
                                                <p class="brand-text fw-700 feature-one-number-top">02</p>
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    Design Refinement
                                                </h5>
                                                <p
                                                    class="body-text-two fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers.
                                                </p>
                                            </div>
                                            <div class="col-12 col-sm-6 feature-one-box mb-40">
                                                <p class="brand-text fw-700 feature-one-number-top">03</p>
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    Project Completion
                                                </h5>
                                                <p
                                                    class="body-text-two fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers.
                                                </p>
                                            </div>
                                            <div class="col-12 col-sm-6 feature-one-box mb-40">
                                                <p class="brand-text fw-700 feature-one-number-top">04</p>
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    Interior Design
                                                </h5>
                                                <p
                                                    class="body-text-two fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end team details -->
        <!-- start work together -->
        <section class="work-together-two section-padding-bottom-xl section-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="d-flex align-items-center justify-content-center flex-column work-together-content-wrapper">
                            <p class="p dark-text fw-500 line-height-3 mb-10">
                                Let’s Work Together
                            </p>
                            <h2 class="h2 fw-700 line-height-3 dark-text text-center">Let's Create Your Dream Space
                                Together!</h2>
                            <a href="contact.html" class="btn brand-btn text-uppercase mt-50 border-0"><span
                                    class="z-1 position-relative">let's build</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end work together -->
        <!-- start footer -->
        <footer class="footer-one">
            <div class="container">
                <div class="footer-one-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <div class="logo mb-1">
                                <img src="{{ asset('archite/img/Logo.png') }}" style="height: 30%; width: 30%;"
                                    alt="logo">
                            </div>
                            <p class="p text-white fw-500 line-height-5 mt-15">
                                Welcome to our interior design agency! Our team of experienced designers and decorators
                                is passionate about creating beautiful, functional spaces that enhance our clients'
                                lives. Welcome to our interior design agency!
                            </p>
                            <h2 class="fw-700 text-white mt-30 footer-email">dongtrieuarc@gmail.com</h2>
                        </div>
                        <div class="col-12 col-sm-3 mt-5 mt-sm-0">
                            <ul class="d-flex flex-column gap-4">
                                <li><a class="fw-500 text-uppercase" href="index-2">home</a></li>
                                <li><a class="fw-500 text-uppercase" href="about">Giới thiệu</a></li>

                                <li><a class="fw-500 text-uppercase" href="portfolio">Dự án</a></li>
                                <li><a class="fw-500 text-uppercase" href="blog">Tin tức</a></li>
                                <li><a class="fw-500 text-uppercase" href="contact">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-4 mt-5 mt-sm-0">
                            <div class="d-flex align-items-start mb-30">
                                <i class="fa-solid fa-location-dot brand-text d-inline-block mr-10 mt-2"></i>
                                <h6 class="h6 fw-400 line-height-4 footer-address">
                                    901 N Pitt Str., Suite 170
                                    Alexandria, NY, USA
                                </h6>
                            </div>
                            <div class="d-flex align-items-start mb-30">
                                <i class="fa-solid fa-phone-volume brand-text d-inline-block mr-10 mt-2"></i>
                                <h6 class="h6 fw-400 line-height-4 footer-address">
                                    0907 859 668
                                </h6>
                            </div>
                            <div class="d-flex align-items-start mb-30">
                                <i class="fa-solid fa-phone-volume brand-text d-inline-block mr-10 mt-2"></i>
                                <h6 class="h6 fw-400 line-height-4 footer-address">
                                    (406) 327-1246
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="mt-100 d-flex justify-content-between align-items-center flex-column flex-xl-row">
                        <div class="footer-one-social-container">
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://facebook.com/"><span
                                    class="z-1 position-relative">Facebook</span></a>
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://linkedin.com/"><span
                                    class="z-1 position-relative">LinkedIn</span></a>
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://instagram.com/"><span
                                    class="z-1 position-relative">Instagram</span></a>
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://twitter.com/"><span
                                    class="z-1 position-relative">Twitter</span></a>
                            <a class="btn dark-btn mb-4 mb-lg-0" href="https://dribble.com/"><span
                                    class="z-1 position-relative">Dribble</span></a>
                        </div>
                        <p class="p fw-500 line-height-3 footer-copyright-text pt-4 pt-xl-0">
                            Copyright 2025, All Right reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </main>

    <!-- Jquery script -->
    <script src="{{ asset('archite/js/jquery-3.6.4.min.js') }}"></script>
    <!-- Bootstrap Script -->
    <script src="{{ asset('archite/js/bootstrap.min.js') }}"></script>
    <!-- Font awesome script -->
    <script src="{{ asset('archite/js/all.min.js') }}"></script>
    <!-- Modal video script -->
    <script src="{{ asset('archite/js/jquery-modal-video.min.js') }}"></script>
    <!-- Owl carousel script -->
    <script src="{{ asset('archite/js/owl.carousel.min.js') }}"></script>
    <!-- AOS script -->
    <script src="{{ asset('archite/js/aos.js') }}"></script>
    <!-- jQuery Counterup -->
    <script src="{{ asset('archite/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('archite/js/jquery.counterup.min.js') }}"></script>
    <!-- Preloader script -->
    <script src="{{ asset('archite/js/jquery.preloader.min.js') }}"></script>
    <!-- Jquery viewport checker script -->
    <script src="{{ asset('archite/js/jquery.viewportchecker.min.js') }}"></script>
    <!-- textyle script -->
    <script src="{{ asset('archite/js/textyle.min.js') }}"></script>
    <!-- animated headline script -->
    <script src="{{ asset('archite/js/jquery.animatedheadline.min.js') }}"></script>
    <!-- Main JS script -->
    <script src="{{ asset('archite/js/main.js') }}"></script>
</body>


<!-- Mirrored from thememarch.com/demo/html/archite/teamDetails.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:03 GMT -->

</html>
