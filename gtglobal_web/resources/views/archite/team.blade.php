<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Team</title>
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
    <main class="team-page">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-30">
            <div class="container">
                <nav class="nav nav-secondary d-flex align-items-center justify-content-between">
                    <!-- logo -->
                    <div class="logo-container">
                        <img class="header-logo" src="{{ asset('archite/img/LogoTwo.png') }}" alt="logo">
                    </div>
                    <div class="nav-menu d-flex align-items-center">
                        <ul
                            class="header-menu d-none d-lg-flex flex-row align-items-center z-1 position-relative mr-35 menu">
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="index-2">Trang chủ</a>
                                <ul class="submenu-container">
                                    <li><a class="submenu-link text-uppercase fw-500" href="index-2">Trang chủ
                                            1</a></li>
                                    <li><a class="submenu-link text-uppercase fw-500" href="index2">Trang chủ
                                            2</a></li>
                                    <li><a class="submenu-link text-uppercase fw-500" href="index3">Trang chủ
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
                                <a class="menu-link text-uppercase fw-500" href="index-2">Pages</a>
                                <ul class="submenu-container">
                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="blogDetails">Blog
                                            Details</a>
                                    </li>

                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="portfolioDetails">Portfolio
                                            Details</a>
                                    </li>

                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="servicesDetails">Services
                                            Details</a>
                                    </li>
                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="team">Team</a>
                                    </li>
                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="teamDetails">Team
                                            Details</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="desktop-menu-offcanvas position-relative">
                            <img class="off-canvas-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight" src="{{ asset('archite/img/menuToggleIvonTwo.png') }}"
                                alt="menu toggle icon">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <img id="offcanvasRightLabel" class="header-logo offcanvas-title img-fluid"
                                        src="{{ asset('archite/img/LogoTwo.png') }}" alt="logo">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="accordion-menu">
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">Home</span>
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </div>
                                            <ul class="submenuItems">
                                                <li><a class="submenu-link text-uppercase fw-500" href="index-2">Home
                                                        1</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500" href="index2">Home
                                                        2</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500" href="index3">Home
                                                        3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="about">About Us</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="services">Services</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="portfolio">Portfolio</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="blog">Blog</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">Pages</span>
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </div>
                                            <ul class="submenuItems">


                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="servicesDetails">Services Details</a></li>

                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="portfolioDetails">Portfolio Details</a></li>

                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="blogDetails">Blog Details</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="team">Taem</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="teamDetails">Team Details</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="contact">Contact Us</a>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header -->
        <!-- start inner page banner-->
        <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                    <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                        Our Team
                    </h2>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- strat team members -->
        <section class="team-one section-padding-top-xl section-padding-bottom bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="team-one-card-container">
                            <div class="team-one-card-row">
                                <div class="team-one-item position-relative mb-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberNine.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Gerald K. Banks
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5">
                                            UI/UX Designer
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                                <div class="team-one-item position-relative mt-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberTen.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Juan I. Beebe
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5 ">
                                            Finance Manager
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                                <div class="team-one-item position-relative mb-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberEleven.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Edward C. Lasater
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5 ">
                                            IT Development
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                                <div class="team-one-item position-relative mt-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberTwelve.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Keith S. Perez
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5 ">
                                            Keith S. Perez
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                                <div class="team-one-item position-relative mb-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberFive.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Mina Buckingham
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5 ">
                                            Software Engineer
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                                <div class="team-one-item position-relative mt-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberSix.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Jerrod Garner
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5 ">
                                            Marketing
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                                <div class="team-one-item position-relative mb-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberSeven.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Justin B. Willison
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5 ">
                                            Customer Manager
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                                <div class="team-one-item position-relative mt-30">
                                    <div class="team-img">
                                        <img class="img-fluid" src="{{ asset('archite/img/teamMemberEight.jpg') }}"
                                            alt="team member">
                                    </div>
                                    <div class="team-one-card-info">
                                        <h6 class="h6 text-white fw-700 line-height-3">
                                            Patrick W. Seigler
                                        </h6>
                                        <p class="p body-text fw-500 line-height-5 ">
                                            Business Dev
                                        </p>
                                    </div>
                                    <div class="team-member-details d-flex flex-column">
                                        <div class="member-details-social d-flex align-items-center">
                                            <a class="mx-2" href="https://facebook.com/">
                                                <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://linkedin.com/">
                                                <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                            </a>
                                            <a class="mx-2" href="https://twitter.com/">
                                                <i class="fa-brands fa-twitter text-white fs-5"></i>
                                            </a>

                                        </div>
                                        <a class="btn light-btn mt-20" href="teamDetails"><span
                                                class="z-1 position-relative">Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end team members -->
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
                                <li><a class="fw-500 text-uppercase" href="services">Dịch vụ</a></li>
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


<!-- Mirrored from thememarch.com/demo/html/archite/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:03 GMT -->

</html>
