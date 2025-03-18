<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:56 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Services</title>
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
    <main class="services-page position-relative">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-30">
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
        <!-- start inner page banner-->
        <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                            <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                                Our Expert Interior Design <br>Services
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start services -->
        <section class="services-archieve section-padding-bottom section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="services-archieve-grid">
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="{{ asset('archite/img/serviceBgOne.jpg') }}"
                                        class="w-100 position-relative" alt="Service Images">
                                </div>
                                <div class="position-absolute service-one-contents z-1">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Installation Space Planning & Luxury Interior Design
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="{{ asset('archite/img/serviceBgTwo.jpg') }}"
                                        class="w-100 position-relative" alt="Service Images">
                                </div>
                                <div class="position-absolute service-one-contents z-1">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Luxury Interior Design
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="{{ asset('archite/img/serviceBgThree.jpg') }}"
                                        class="w-100 position-relative" alt="Service Images">
                                </div>
                                <div class="position-absolute service-one-contents z-1">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Space Planning & Installation
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="{{ asset('archite/img/serviceBgFour.jpg') }}"
                                        class="w-100 position-relative" alt="Service Images">
                                </div>
                                <div class="position-absolute service-one-contents z-1">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Decoration, Restoration, and Installation
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="{{ asset('archite/img/serviceBgFive.jpg') }}"
                                        class="w-100 position-relative" alt="Service Images">
                                </div>
                                <div class="position-absolute service-one-contents z-1">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Painting and Polishing Services
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="{{ asset('archite/img/serviceBgSix.jpg') }}"
                                        class="w-100 position-relative" alt="Service Images">
                                </div>
                                <div class="position-absolute service-one-contents z-1">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Construction Concept & Administration
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end services -->
        <!-- start FAQ -->
        <section class="services-faq section-padding-top section-padding-bottom-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="services-faq-wrapper">
                            <div class="mb-50">
                                <h2 class="h2 text-white fw-700 line-height-3 text-center appear-text">
                                    Frequently Asked <br>Questions
                                </h2>
                            </div>
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            What services does an architecture and interior design agency offer?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            How do I choose the right architecture and interior design agency for my
                                            project?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            How much does it cost to hire an architecture and interior design agency?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFour">
                                            How long does it take to complete a project with an architecture and
                                            interior design
                                            agency?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFive">
                                            What is the design process for a project with an architecture and interior
                                            design
                                            agency?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseSix">
                                            How involved do I need to be in the design process?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end FAQ -->
        <!-- start work together -->
        <section class="work-together">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                                data-aos-offset="200" class="p text-white fw-500 line-height-3 mb-10">
                                Let’s Work Together
                            </p>
                            <h2 data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"
                                data-aos-offset="200" class="h2 fw-700 line-height-3 text-white text-center">Let's
                                Create Your Dream <br>Space
                                Together!</h2>
                            <a data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500"
                                data-aos-offset="200" href="contact.html"
                                class="btn brand-btn text-uppercase mt-50"><span class="z-1 position-relative">let's
                                    build</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end work together -->
        <!-- start footer -->
        <footer class="footer-one">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-sm-5">
                                <div class="logo mb-1">
                                    <img src="{{ asset('archite/img/Logo.png') }}" style="height: 30%; width: 30%;"
                                        alt="logo">
                                </div>
                                <p class="p text-white fw-500 line-height-5 mt-15">
                                    Welcome to our interior design agency! Our team of experienced designers and
                                    decorators
                                    is passionate about creating beautiful, functional spaces that enhance our clients'
                                    lives. Welcome to our interior design agency!
                                </p>
                                <h2 class="fw-700 text-white mt-30 footer-email">dongtrieuarc@gmail.com</h2>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="mt-5 mt-sm-0">
                                    <ul class="d-flex flex-column gap-4">
                                        <li><a class="fw-500 text-uppercase" href="index-2">home</a></li>
                                        <li><a class="fw-500 text-uppercase" href="about">Giới thiệu</a></li>

                                        <li><a class="fw-500 text-uppercase" href="portfolio">Dự án</a></li>
                                        <li><a class="fw-500 text-uppercase" href="blog">Tin tức</a></li>
                                        <li><a class="fw-500 text-uppercase" href="contact">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex align-items-start mb-30 mt-5 mt-sm-0">
                                    <i class="fa-solid fa-location-dot brand-text d-inline-block mr-10 mt-2"></i>
                                    <h6 class="h6 fw-400 line-height-4 footer-address">
                                        159 Đường CN11, Sơn Kỳ, Tân Phú, Hồ Chí Minh, Việt Nam
                                    </h6>
                                </div>
                                <div class="d-flex align-items-start mb-30">
                                    <i class="fa-solid fa-phone-volume brand-text d-inline-block mr-10 mt-2"></i>
                                    <h6 class="h6 fw-400 line-height-4 footer-address">
                                        0907 859 668
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


<!-- Mirrored from thememarch.com/demo/html/archite/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:56 GMT -->

</html>
