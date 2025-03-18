<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/about by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:56 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>About Us</title>
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
    <main class="about-us overflow-hidden">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header pt-35">
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
        <!-- start video -->
        <section class="intro-video-one section-padding-bottom section-padding-top-xl position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-title">
                            <div class="intro-video-title">
                                <h2 class="h2 text-white fw-700 line-height-3 mb-70 appear-text intro-video-title">
                                    Design Haven Creating Beautiful Spaces That Inspire Your New Space
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-area position-relative">
                <div class="contact-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="video-thumbnail-container bg-zoom-in-out text-center">
                                <a href="index-2" class="js-video-button intro-video-animation"
                                    data-video-id='Us442Oh-znE'>
                                    <img src="{{ asset('archite/img/videoPlay.png') }}" alt="video play icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end video -->
        <!-- start about -->
        <section id="homeOneAbout" class="about-one section-padding-top section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-one-top">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h2 class="h2 text-white line-height-3 appear-text">
                                        Transforming Spaces Elevating Lives
                                    </h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="about-one-first-text-box">
                                        <p class="p body-text fw-500 line-height-5">
                                            Welcome to our interior design agency! Our team of experienced designers and
                                            decorators
                                            is passionate about creating beautiful, functional spaces that enhance our
                                            clients'
                                            lives.
                                        </p>
                                        <a href="portfolio" class="btn brand-btn text-uppercase mt-30"><span
                                                class="z-1 position-relative">learn more</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-70 about-one-bottom">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="position-relative d-flex align-items-center">
                                        <div class="hover-img-container about-one-img">
                                            <img src="{{ asset('archite/img/aboutOne.jpg') }}" alt="about image"
                                                class="rounded-0">
                                        </div>
                                        <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                                            class="hover-img-container about-one-img-small position-absolute d-none d-lg-inline-block">
                                            <img src="{{ asset('archite/img/aboutOneSmall.jpg') }}"
                                                alt="about image small" class="rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div>
                                        <h3 class="h3 dark-text fw-700 about-one-subheading line-height-3">
                                            Making Your Interior Dream Space
                                        </h3>
                                        <div class="about-one-second-text-box mt-85 ml-60">
                                            <div class="mb-60 about-second-text-box-first-item">
                                                <h5 class="h5 fw-700 dark-text line-height-3">
                                                    Our Story
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mt-10">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers
                                                    and
                                                    decorators is passionate about creating beautiful, functional spaces
                                                    that
                                                    enhance our clients' lives.
                                                </p>
                                            </div>
                                            <div class="mb-0">
                                                <h5 class="h5 fw-700 dark-text line-height-3">
                                                    Our Goal
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mt-10">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers
                                                    and
                                                    decorators is passionate about creating beautiful, functional spaces
                                                    that
                                                    enhance our clients' lives.
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
        <!-- end about -->
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
        <!-- start features -->
        <section class="features-one section-padding-top-xl section-padding-bottom-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div>
                                    <h2 class="h2 body-text-two fw-700 line-height-3 appear-text-dark">
                                        Core Features of Our Interior Design Agency
                                    </h2>
                                    <p class="text-white fw-500 line-height-5 mt-40 position-relative pe-0 pe-lg-5">
                                        Welcome to our interior design agency! Our team of experienced designers and
                                        decorators
                                        is
                                        passionate about creating beautiful, functional spaces that enhance our client's
                                        lives.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="mt-5 mt-lg-0">
                                    <div class="position-relative">
                                        <img src="{{ asset('archite/img/featuresVideoBg.png') }}"
                                            class="img-no-hover-effect features-bg-img"
                                            alt="features video background">
                                        <a href="#" class="js-video-button features-video-animation"
                                            data-video-id='Us442Oh-znE'><img
                                                src="{{ asset('archite/img/playIconWhite.png') }}"
                                                class="img-fluid features-play-icon" alt="features image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-items">
                            <div class="row gy-5 gy-sm-0">
                                <div class="col-12 col-sm-4">
                                    <div class="feature-one-box">
                                        <p class="brand-text fw-700 feature-one-number-top">01</p>
                                        <h5 class="h5 text-white fw-700 line-height-3">
                                            Creativity
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Welcome to our interior design agency! Our team of experienced designers.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="feature-one-box">
                                        <p class="brand-text fw-700 feature-one-number-top">02</p>
                                        <h5 class="h5 text-white fw-700 line-height-3">
                                            Management
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Welcome to our interior design agency! Our team of experienced designers.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="feature-one-box">
                                        <p class="brand-text fw-700 feature-one-number-top">03</p>
                                        <h5 class="h5 text-white fw-700 line-height-3">
                                            Space Planning
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Welcome to our interior design agency! Our team of experienced designers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end features -->
        <!-- start testimonial -->
        <section class="testimonial-one section-padding-top-xl section-padding-bottom bg-white overflow-hidden">
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
        <section class="why-choose-us-three overflow-hidden section-padding-bottom section-padding-top">
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
                            <p class="p dark-text fw-500 line-height-5 why-choose-subheading position-relative">
                                Why Choose Us
                            </p>
                            <h2 class="h2 dark-text line-height-3 mb-50">
                                We will Offer You Stunning Interior Design Services
                            </h2>
                            <div class="why-choose-items-wrapper">
                                <div class="why-choose-item why-choose-item-first  mb-35">
                                    <h5 class="h5 dark-text fw-700 line-height-3">
                                        <span class="brand-text"> 01 </span>High Quality Services
                                    </h5>
                                    <p class="p body-text fw-500 line-height-5">
                                        Welcome to our interior design agency! Our team of experienced designers and
                                        decorators is passionate about creating beautiful.
                                    </p>
                                </div>
                                <div class="mt-55 why-choose-bottom">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="why-choose-item">
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    <span class="brand-text"> 02 </span>Qualified Treatment
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mb-35">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="why-choose-item">
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    <span class="brand-text"> 03 </span>Affordable Price
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mb-35">
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
        <!-- start clients -->
        <section class="clients-one section-padding-bottom-xl section-padding-top overflow-hidden">
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
                            <a href="contact" class="btn brand-btn text-uppercase mt-50 border-0"><span
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


<!-- Mirrored from thememarch.com/demo/html/archite/about by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:56 GMT -->

</html>
