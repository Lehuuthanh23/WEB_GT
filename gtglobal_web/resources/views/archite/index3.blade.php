<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:54 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home Three</title>
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
    <main class="home-three position-relative overflow-hidden">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-35">
            <div class="container">
                <div class="row">
                    <nav class="nav nav-secondary d-flex align-items-center justify-content-between">
                        <!-- logo -->
                        <div class="logo-container">
                            <img class="header-logo" src="{{ asset('archite/img/LogoTwo.png') }}" alt="logo">
                        </div>
                        <div class="nav-menu d-flex align-items-center">
                            <div class="desktop-menu-offcanvas position-relative">
                                <img class="off-canvas-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight"
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
                                        <ul class="accordion-menu">
                                            <li>
                                                <div class="dropdownlink">
                                                    <span class="text-uppercase">Home</span>
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                                <ul class="submenuItems">
                                                    <li><a class="submenu-link text-uppercase fw-500"
                                                            href="index-2">Home
                                                            1</a></li>
                                                    <li><a class="submenu-link text-uppercase fw-500"
                                                            href="index2">Home 2</a></li>
                                                    <li><a class="submenu-link text-uppercase fw-500"
                                                            href="index3">Home 3</a></li>
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
                                                <a class="menu-link text-uppercase fw-500" href="contact">Contact
                                                    Us</a>
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- start banner -->
        <section class="banner-three-carousel">
            <div class="banner-three pt-35 pb-70 position-relative overflow-hidden d-sm-flex justify-content-center">
                <div class="banner-one-wrapper">
                    <!-- floating contact bar -->
                    <div class="floating-contact-box position-absolute">
                        <ul class="d-flex">
                            <li class="contact-info-one-dark dark-text">0907 859 668</li>
                            <li class="contact-info-two dark-text">dongtrieuarc@gmail.com</li>
                        </ul>
                    </div>
                    <!-- floating social media bar -->
                    <div
                        class="floating-social-box position-absolute d-flex align-items-center justify-content-center">
                        <ul class="d-flex">
                            <li class="text-white floating-social-icon"><i class="fa-brands fa-twitter"></i></li>
                            <li class="text-white floating-social-icon"><i class="fa-brands fa-linkedin-in"></i>
                            </li>
                            <li class="text-white floating-social-icon"><i class="fa-brands fa-facebook-f"></i></li>
                            <li class="social-follow-text text-white">follow us</li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="banner-three-contents">
                                            <div>
                                                <div class="col-12 col-lg-8 col-xl-7">
                                                    <div class="banner-onecontent-left">
                                                        <p
                                                            class="p dark-text fw-500 line-height-5 banner-three-subheading position-relative">
                                                            Interior Design<br>
                                                            Services
                                                        </p>
                                                        <div>
                                                            <h1
                                                                class="dark-text fw-700 text-capitalize mb-45 line-height-1 position-relative home-mobile-heading">
                                                                <span>making
                                                                    your</span> <br> dream space
                                                            </h1>
                                                        </div>
                                                        <p
                                                            class="dark-text fw-500 line-height-5 mb-60 position-relative banner-paragraph">
                                                            Welcome to our interior design agency! Our team of
                                                            experienced designers
                                                            and
                                                            decorators
                                                            is
                                                            passionate about creating beautiful, functional spaces that
                                                            enhance our
                                                            client's
                                                            lives.
                                                        </p>
                                                        <a href="portfolio.html"
                                                            class="btn brand-btn text-uppercase border-0"><span
                                                                class="z-1 position-relative">portfolio</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4 col-xl-5"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="container item">
                                        <div class="banner-three-contents">
                                            <div>
                                                <div class="col-12 col-lg-8 col-xl-7">
                                                    <div class="banner-onecontent-left">
                                                        <p
                                                            class="p dark-text fw-500 line-height-5 banner-three-subheading position-relative">
                                                            Interior Design<br>
                                                            Services
                                                        </p>
                                                        <div>
                                                            <h1
                                                                class="dark-text fw-700 text-capitalize mb-45 line-height-1 position-relative home-mobile-heading">
                                                                <span>making
                                                                    your</span> <br> dream design
                                                            </h1>
                                                        </div>
                                                        <p
                                                            class="dark-text fw-500 line-height-5 mb-60 position-relative banner-paragraph">
                                                            Welcome to our interior design agency! Our team of
                                                            experienced designers
                                                            and
                                                            decorators
                                                            is
                                                            passionate about creating beautiful, functional spaces that
                                                            enhance our
                                                            client's
                                                            lives.
                                                        </p>
                                                        <a href="portfolio.html"
                                                            class="btn brand-btn text-uppercase border-0"><span
                                                                class="z-1 position-relative">portfolio</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4 col-xl-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav-three"></div>
                </div>
            </div>
        </section>
        <!-- end banner -->
        <!-- start purposes -->
        <section class="purposes section-padding-top-xl section-padding-bottom overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="p-3">
                            <h6 class="h6 fw-700 line-height-5 dark-text mb-10">
                                <small class="brand-text">01/</small> Commercial
                            </h6>
                            <p class="p fw-500 line-height-3 purposes-paragraph">
                                Welcome to our interior design agency! Our team of experienced designers. Welcome to our
                                interior design agency!
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="p-3">
                            <h6 class="h6 fw-700 line-height-5 dark-text mb-10">
                                <small class="brand-text">02/</small> Organization
                            </h6>
                            <p class="p fw-500 line-height-3 purposes-paragraph">
                                Welcome to our interior design agency! Our team of experienced designers. Welcome to our
                                interior design agency!
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="p-3">
                            <h6 class="h6 fw-700 line-height-5 dark-text mb-10">
                                <small class="brand-text">03/</small> Residential
                            </h6>
                            <p class="p fw-500 line-height-3 purposes-paragraph">
                                Welcome to our interior design agency! Our team of experienced designers. Welcome to our
                                interior design agency!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end purposes -->
        <!-- start experience -->
        <section class="experience-one section-padding-bottom section-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="experience-one-wrapper">
                            <div class="row align-items-center">
                                <div class="col-12 col-xl-6">
                                    <div class="mt-5 mt-lg-0">
                                        <h2 class="h2 fw-700 line-height-3 text-white mb-15 appear-text">
                                            Transforming Spaces Elevating Lives</h2>
                                        <p class="p body-text fw-500 line-height-5 mb-10">
                                            Welcome to our interior design agency! Our team of experienced designers and
                                            decorators
                                            is passionate about creating beautiful, functional spaces that enhance our
                                            clients'
                                            lives.
                                        </p>
                                        <p class="p body-text fw-500 line-height-5 mb-10">
                                            Welcome to our interior design agency! Our team of experienced designers and
                                            decorators
                                            is passionate about creating beautiful.
                                        </p>
                                        <div class="mt-30">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-lg-3 col-xl-5">
                                                    <div class="count-one-border position-relative py-3 py-sm-0">
                                                        <div class="counter-container">
                                                            <h2 class="h2 dark-text"><span class="counter">46</span>K
                                                            </h2>
                                                            <p class="p fw-400 line-height-1 body-text">
                                                                Project Completed
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-lg-3 col-xl-5">
                                                    <div class="position-relative py-3 py-sm-0">
                                                        <div class="counter-container">
                                                            <h2 class="h2 dark-text"><span class="counter">3</span>K
                                                            </h2>
                                                            <p class="p fw-400 line-height-1 body-text">
                                                                Happy customers
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-50 d-flex flex-column flex-sm-row align-items-start align-items-xl-center">
                                            <a href="projects.html"
                                                class="btn brand-btn text-uppercase mr-40 mb-4 mb-xl-0"><span
                                                    class="z-1 position-relative">Learn More</span></a>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('archite/img/phoneIcon.png') }}" alt="phone icon">
                                                <h4
                                                    class="dark-text fw-700 line-height-3 experience-contact-number ml-15">
                                                    (406)
                                                    555-0120</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6 d-flex justify-content-end">
                                    <div class="hover-img-container">
                                        <img src="{{ asset('archite/img/experienceOneImg.jpg') }}"
                                            class="img-fluid experience-one-img d-none d-xl-inline"
                                            alt="experience one image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end experience -->
        <!-- start count -->
        <section class="count-one section-padding-bottom-xl section-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-xl-3">
                        <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">46</span>K</h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Project Completed
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">3</span>K</h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Happy customers
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">26</span></h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Years Experiences
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">24</span></h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Awards Achievement
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end count -->
        <!-- start services -->
        <section class="services-three section-padding-top-xl section-padding-bottom-xl overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-90">
                                        <h2 class="h2 body-text-two fw-700 line-height-3 appear-text-dark">
                                            Our Expert Interior <br>Design Services
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-5 mt-sm-0">
                                        <div class="service-three-cards-container">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item service-two-card position-relative mb-30 mt-30">
                                                    <div class="z-1">
                                                        <h2
                                                            class="h2 service-two-stroke-text position-absolute service-two-stroke-absolute">
                                                            01</h2>
                                                        <div class="serivice-three-contents">
                                                            <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                                                Architecture Design Planning
                                                            </h5>
                                                            <p class="p text-white fw-500 line-height-5 mb-35">
                                                                Welcome to our interior design agency! Our team of
                                                                experienced
                                                                designers
                                                            </p>
                                                            <a class="btn p-0 text-white text-uppercase fw-500"
                                                                href="services"><span class="me-2">Read More</span>
                                                                <i class="fa-solid fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item service-two-card position-relative mb-30 mt-30">
                                                    <div class="z-1">
                                                        <h2
                                                            class="h2 service-two-stroke-text service-two-stroke-absolute position-absolute">
                                                            02</h2>
                                                        <div class="serivice-three-contents">
                                                            <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                                                Luxury Interior Design Planning
                                                            </h5>
                                                            <p class="p text-white fw-500 line-height-5 mb-35">
                                                                Welcome to our interior design agency! Our team of
                                                                experienced
                                                                designers
                                                            </p>
                                                            <a class="btn p-0 text-white text-uppercase fw-500"
                                                                href="services"><span class="me-2">Read More</span>
                                                                <i class="fa-solid fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item service-two-card position-relative mb-30 mt-30">
                                                    <div class="z-1">
                                                        <h2
                                                            class="h2 service-two-stroke-text service-two-stroke-absolute position-absolute">
                                                            03</h2>
                                                        <div class="serivice-three-contents">
                                                            <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                                                Space Planning & Installation
                                                            </h5>
                                                            <p class="p text-white fw-500 line-height-5 mb-35">
                                                                Welcome to our interior design agency! Our team of
                                                                experienced
                                                                designers
                                                            </p>
                                                            <a class="btn p-0 text-white text-uppercase fw-500"
                                                                href="services"><span class="me-2">Read More</span>
                                                                <i class="fa-solid fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item service-two-card position-relative mb-30 mt-30">
                                                    <div class="z-1">
                                                        <h2
                                                            class="h2 service-two-stroke-text position-absolute service-two-stroke-absolute">
                                                            04</h2>
                                                        <div class="serivice-three-contents">
                                                            <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                                                Space Planning & Installation
                                                            </h5>
                                                            <p class="p text-white fw-500 line-height-5 mb-35">
                                                                Welcome to our interior design agency! Our team of
                                                                experienced
                                                                designers
                                                            </p>
                                                            <a class="btn p-0 text-white text-uppercase fw-500"
                                                                href="services"><span class="me-2">Read More</span>
                                                                <i class="fa-solid fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
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
        <!-- end services -->
        <!-- start projects -->
        <section class="projects-one section-padding-bottom section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="h2 text-center text-white fw-700 line-height-3 appear-text">
                            Our Expert Interior Design <br>Project
                        </h2>
                        <div class="mt-90">
                            <div class="row g-lg-5 g-xxl-0">
                                <div class="col-12 col-lg-6">
                                    <div class="d-flex align-items-center projects-one-col">
                                        <div class="project-container-three">
                                            <div class="project-img-ontainer">
                                                <img class="img-fluid"
                                                    src="{{ asset('archite/img/homeThreeProjectOne.jpg') }}"
                                                    alt="project image">
                                                <a href="portfolioDetails.html"
                                                    class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Project</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="ps-4">
                                                <p class="p brand-text fw-500 line-height-5 mt-30">Architecture</p>
                                                <h6 class="h6 dark-text line-height-3 fw-700 mt-1">Project - Modern
                                                    Architecture
                                                    Design
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center projects-one-col mt-60">
                                        <div class="projects-one-contents project-container-three">
                                            <div class="project-img-ontainer">
                                                <img class="img-fluid"
                                                    src="{{ asset('archite/img/homeThreeProjectThree.jpg') }}"
                                                    alt="project image">
                                                <a href="portfolioDetails.html"
                                                    class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Project</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="ps-4">
                                                <p class="p brand-text fw-500 line-height-5 mt-30">Interior</p>
                                                <h6 class="h6 dark-text line-height-3 fw-700 mt-1">Project - Luxury
                                                    Space
                                                    Design
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-12 col-lg-6 d-flex flex-column justify-content-lg-center align-items-lg-center">
                                    <div class="d-flex align-items-center mt-5 mt-lg-0">
                                        <div class="projects-contents project-container-three">
                                            <div class="project-img-ontainer">
                                                <img class="img-fluid"
                                                    src="{{ asset('archite/img/homeThreeProjectTwo.jpg') }}"
                                                    alt="project image">
                                                <a href="portfolioDetails.html"
                                                    class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Project</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="ps-4">
                                                <p class="p brand-text fw-500 line-height-5 mt-30">Interior</p>
                                                <h6 class="h6 dark-text line-height-3 fw-700 mt-1">Project - Modern
                                                    Office
                                                    Interior
                                                    Design
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-60">
                                        <div class="projects-contents project-container-three">
                                            <div class="text-center text-lg-end">
                                                <div class="project-img-ontainer">
                                                    <img class="img-fluid"
                                                        src="{{ asset('archite/img/homeThreeProjectFour.jpg') }}"
                                                        alt="project image">
                                                    <a href="portfolioDetails.html"
                                                        class="btn text-uppercase project-btn">
                                                        <span class="position-relative z-1">View Project</span>
                                                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ps-4">
                                                <p class="p brand-text fw-500 line-height-5 mt-30">Architecture</p>
                                                <h6 class="h6 dark-text line-height-3 fw-700 mt-1">Project - Modern
                                                    Tech
                                                    Zone
                                                    Design
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="portfolio.html" class="btn brand-btn text-uppercase mt-100"><span
                                    class="z-1 position-relative">Load More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end projects -->
        <!-- start clients -->
        <section class="clients-one section-padding-bottom section-padding-top overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="row g-5 justify-content-between">
                                <div class="col-6 col-lg-2">
                                    <div class="client-hover-img-container">
                                        <img class="testimonial-one-icon"
                                            src="{{ asset('archite/img/testimonialIconOne.jpg') }}"
                                            alt="testimonial item logo">
                                    </div>
                                    <h6
                                        class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                        Wof
                                        Daks
                                    </h6>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <div class="client-hover-img-container">
                                        <img class="testimonial-one-icon"
                                            src="{{ asset('archite/img/testimonialIconTwo.jpg') }}"
                                            alt="testimonial item logo">
                                    </div>
                                    <h6
                                        class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                        Adka
                                        Alko
                                    </h6>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <div class="client-hover-img-container">
                                        <img class="testimonial-one-icon"
                                            src="{{ asset('archite/img/testimonialIconThree.jpg') }}"
                                            alt="testimonial item logo">
                                    </div>
                                    <h6
                                        class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                        Juba
                                        Had
                                    </h6>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <div class="client-hover-img-container">
                                        <img class="testimonial-one-icon"
                                            src="{{ asset('archite/img/testimonialIconFour.jpg') }}"
                                            alt="testimonial item logo">
                                    </div>
                                    <h6
                                        class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                        Das
                                        Ker
                                    </h6>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <div class="client-hover-img-container">
                                        <img class="testimonial-one-icon"
                                            src="{{ asset('archite/img/testimonialIconFive.jpg') }}"
                                            alt="testimonial item logo">
                                    </div>
                                    <h6
                                        class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                        KIDA
                                        Jadu
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end clients -->
        <!-- start testimonial -->
        <section class="testimonial-one section-padding-top section-padding-bottom-xl bg-white overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <div class="testimonial-one-slider-wrapper position-relative">
                                <div class="owl-carousel owl-theme">
                                    <div class="item testimonial-one-card">
                                        <div class="row">
                                            <div class="col-12 col-lg-2">
                                                <img class="testimonial-one-quote-icon"
                                                    src="{{ asset('archite/img/quoteIcon.png') }}" alt="quote icon">
                                            </div>
                                            <div class="col-12 col-lg-10">
                                                <div class="testimonial-item-content">
                                                    <h3 class="h3 fw-700 line-height-1 dark-text mb-50">
                                                        Choosing the right architecture and interior design agency for
                                                        your
                                                        project
                                                        depends
                                                        on several factors, such as their experience.
                                                    </h3>
                                                    <p
                                                        class="dark-text fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5 mb-1">
                                                        From USA
                                                    </p>
                                                    <h6 class="h6 fw-700 line-height-3 dark-text">
                                                        Alex Smith Emer
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item testimonial-one-card">
                                        <div class="row">
                                            <div class="col-12 col-lg-2">
                                                <img class="testimonial-one-quote-icon"
                                                    src="{{ asset('archite/img/quoteIcon.png') }}" alt="quote icon">
                                            </div>
                                            <div class="col-12 col-lg-10">
                                                <div class="testimonial-item-content">
                                                    <h3 class="h3 fw-700 line-height-1 dark-text mb-50">
                                                        Choosing the right architecture and interior design agency for
                                                        your
                                                        project
                                                        depends
                                                        on several factors, such as their experience.
                                                    </h3>
                                                    <p
                                                        class="dark-text fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5 mb-1">
                                                        From USA
                                                    </p>
                                                    <h6 class="h6 fw-700 line-height-3 dark-text">
                                                        Alex Smith Emer
                                                    </h6>
                                                </div>
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
        <!-- end testimonial -->
        <!-- start why choose us -->
        <section class="why-choose-us-two overflow-hidden section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-xl-5 d-none d-xl-block">
                        <div class="why-choose-two-left-col mb-5 mb-lg-0">
                            <div class="hover-img-container">
                                <img src="{{ asset('archite/img/whyChooseTwo.jpg') }}" class="img-fluid"
                                    alt="why choose us image">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="why-choose-two-right-col">
                            <p class="p text-white fw-500 line-height-5 why-choose-subheading position-relative">
                                Why Choose Us
                            </p>
                            <h2 class="h2 text-white line-height-3 mb-50">
                                We will Offer You Stunning Interior Design Services
                            </h2>
                            <div class="why-choose-items-wrapper">
                                <div class="why-choose-item why-choose-item-first  mb-35">
                                    <h5 class="h5 text-white fw-700 line-height-3">
                                        <span class="brand-text"> 01 </span>High Quality Services
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5">
                                        Welcome to our interior design agency! Our team of experienced designers and
                                        decorators is passionate about creating beautiful.
                                    </p>
                                </div>
                                <div class="mt-55 why-choose-bottom">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="why-choose-item">
                                                <h5 class="h5 text-white fw-700 line-height-3">
                                                    <span class="brand-text"> 02 </span>Qualified Treatment
                                                </h5>
                                                <p class="p text-white fw-500 line-height-5 mb-35">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="why-choose-item">
                                                <h5 class="h5 text-white fw-700 line-height-3">
                                                    <span class="brand-text"> 03 </span>Affordable Price
                                                </h5>
                                                <p class="p text-white fw-500 line-height-5 mb-35">
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
        <!-- end why choose us -->
        <!-- start title carousel -->
        <section class="title-carousel section-padding-bottom section-padding-top-xl">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <h1 class="h1 fw-700 line-height-3 text-uppercase page-title-stroke">
                        structural design .
                    </h1>
                </div>
                <div class="item">
                    <h1 class="h1 fw-700 line-height-3 text-uppercase page-title-stroke">
                        structural design .
                    </h1>
                </div>
                <div class="item">
                    <h1 class="h1 fw-700 line-height-3 text-uppercase page-title-stroke">
                        structural design .
                    </h1>
                </div>
            </div>
        </section>
        <!-- end title carousel -->
        <!-- start team-->
        <section class="team-one section-padding-top section-padding-bottom bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div>
                            <h2 class="h2 text-white line-height-3 appear-text">
                                Our Dedicated Interior Designer Team
                            </h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="about-one-first-text-box">
                            <p class="p body-text fw-500 line-height-5">
                                Welcome to our interior design agency! Our team of experienced designers and decorators
                                is
                                passionate about creating beautiful, functional spaces that enhance our clients' lives.
                                Welcome to our interior design agency!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-one-card-container mt-100">
                <div class="team-one-card-carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="team-one-item position-relative">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('archite/img/teamMemberOne.jpg') }}"
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
                        <div class="team-one-item position-relative">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('archite/img/teamMemberTwo.jpg') }}"
                                    alt="team member">
                            </div>
                            <div class="team-one-card-info">
                                <h6 class="h6 text-white fw-700 line-height-3">
                                    Gerald K. Banks
                                </h6>
                                <p class="p body-text fw-500 line-height-5 ">
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
                        <div class="team-one-item position-relative">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('archite/img/teamMemberThree.jpg') }}"
                                    alt="team member">
                            </div>
                            <div class="team-one-card-info">
                                <h6 class="h6 text-white fw-700 line-height-3">
                                    Gerald K. Banks
                                </h6>
                                <p class="p body-text fw-500 line-height-5 ">
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
                        <div class="team-one-item position-relative">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('archite/img/teamMemberFour.jpg') }}"
                                    alt="team member">
                            </div>
                            <div class="team-one-card-info">
                                <h6 class="h6 text-white fw-700 line-height-3">
                                    Gerald K. Banks
                                </h6>
                                <p class="p body-text fw-500 line-height-5 ">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- end team -->
        <!-- start video -->
        <div class="intro-video-one section-padding-top section-padding-top section-padding-bottom">
            <div class="container">
                <div class="video-thumbnail-two-container text-center bg-zoom-in-out">
                    <a href="index2.html" class="js-video-button intro-video-animation" data-video-id="Us442Oh-znE">
                        <img src="{{ asset('archite/img/videoPlay.png') }}" alt="video play icon">
                    </a>
                </div>
            </div>
        </div>
        <!-- end video -->
        <!-- start blog -->
        <section class="blogs-two section-padding-top section-padding-bottom-xl overflow-hidden">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-60">
                                        <h2 class="h2 text-white fw-700 line-height-3 appear-text">
                                            Our Inspiration <br>News
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-5 mt-sm-0">
                                        <div class="blogs-two-cards-container">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item blogs-one-card">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogOne.jpg') }}"
                                                            alt="blog image">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Why do I need an architect?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Welcome to our interior design agency! Our team of experienced
                                                        designers
                                                    </p>
                                                </div>
                                                <div class="item blogs-one-card">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogTwo.jpg') }}"
                                                            alt="blog image">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Do you know builders?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Welcome to our interior design agency! Our team of experienced
                                                        designers
                                                    </p>
                                                </div>
                                                <div class="item blogs-one-card">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogThree.jpg') }}"
                                                            alt="blog image">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Do you know interior?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Welcome to our interior design agency! Our team of experienced
                                                        designers
                                                    </p>
                                                </div>
                                                <div class="item blogs-one-card">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogTwo.jpg') }}"
                                                            alt="blog image">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Do you know builders?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Welcome to our interior design agency! Our team of experienced
                                                        designers
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
            </div>
        </section>
        <!-- end blog -->
        <!-- start work together -->
        <section class="work-together ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="d-flex align-items-center justify-content-center flex-column work-together-content-wrapper">
                            <p class="p text-white fw-500 line-height-3 mb-10">
                                Let’s Work Together
                            </p>
                            <h2 class="h2 fw-700 line-height-3 text-white text-center">Let's Create Your Dream Space
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


<!-- Mirrored from thememarch.com/demo/html/archite/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:56 GMT -->

</html>
