<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:57 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Blogs</title>
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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>
    <main class="blogs-page">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-35">
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
                                <a class="menu-link text-uppercase fw-500" href="index">Trang chủ</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="about">Giới thiệu</a>
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
        </header>
        <!-- end header -->
        <!-- start inner page banner-->
        <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="col-12">
                    <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                        <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                            Dedicated Our Inspiration <br>News Team
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start blogs -->
        <section class="blogs-archieve section-padding-top-xl section-padding-bottom-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blogs-archieve-wrapper">
                            <div class="row">
                                <div class="col-12 col-lg-8 pr-80 blog-archieve-body">
                                    @foreach ($articles as $item)
                                        @if ($item->enabled == 1)
                                            <div class="blogs-archieve-card mb-70">
                                                <style>
                                                    /* Thay đổi màu nền và icon của nút prev/next */
                                                    .swiper-button-next,
                                                    .swiper-button-prev {
                                                        color: white;
                                                        /* Màu biểu tượng mũi tên */
                                                        background-color: rgba(0, 0, 0, 0.5);
                                                        /* Màu nền trong suốt */
                                                        padding: 15px;
                                                        border-radius: 50%;
                                                        /* Làm nút tròn */
                                                        width: 30px;
                                                        height: 30px;
                                                    }

                                                    /* Nếu muốn thay đổi icon thành mũi tên tùy chỉnh */
                                                    .swiper-button-next::after,
                                                    .swiper-button-prev::after {
                                                        font-size: 20px;
                                                        /* Tăng kích thước icon */
                                                        font-weight: bold;
                                                    }

                                                    /* Đổi màu các chấm tròn */
                                                    .swiper-pagination-bullet {
                                                        background-color: white;
                                                        /* Màu chấm tròn mặc định */
                                                        width: 6px;
                                                        /* Tăng kích thước */
                                                        height: 6px;
                                                        opacity: 0.5;
                                                        /* Làm mờ chấm không active */
                                                        transition: background-color 0.3s, opacity 0.3s;
                                                        /* Hiệu ứng mượt */
                                                    }

                                                    /* Chấm tròn đang active (trang hiện tại) */
                                                    .swiper-pagination-bullet-active {
                                                        background-color: rgb(246, 138, 10, 1) !important;
                                                        /* Đổi màu cho chấm tròn active */
                                                        opacity: 1;
                                                        /* Làm sáng chấm active */
                                                        transform: scale(1.2);
                                                        /* Phóng to chấm active */
                                                    }

                                                    /* Thay đổi vị trí các chấm tròn (mặc định ở giữa dưới slider) */
                                                    .swiper-pagination {
                                                        bottom: 10px !important;
                                                        /* Điều chỉnh khoảng cách so với slider */
                                                    }
                                                </style>
                                                <div class="swiper mySwiper">
                                                    <div class="swiper-wrapper">
                                                        @foreach (json_decode($item->image_url, true) as $image)
                                                            <div class="swiper-slide">
                                                                <div class="hover-img-container">
                                                                    <img src="{{ $image }}"
                                                                        class="img-fluid img-no-hover-effect"
                                                                        alt="blog image">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>

                                                    <div class="swiper-pagination"></div>
                                                </div>

                                                <p class="p body-text fw-500 line-height-5 pt-35">
                                                    {{ $item->published_at }}
                                                </p>
                                                <h5 class="mt-10">
                                                    <a class="blog-archieve-card-title dark-text fw-700 line-height-3">
                                                        {{-- href="blogDetails"> --}}
                                                        {{ $item->title }}
                                                    </a>
                                                </h5>
                                                {!! $item->description !!}
                                                <a class="fs-6 dark-text fw-500 line-height-3 text-uppercase mt-25 d-flex align-items-center"
                                                    href="blogDetails">
                                                    <span class="mr-10">read more</span>
                                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                            <div class="portfolio-cta-btn text-start">
                                                <a data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500"
                                                    data-aos-offset="100" href="portfolio"
                                                    class="btn brand-btn text-uppercase">
                                                    <span class="z-1 position-relative">View
                                                        Projects</span>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach


                                </div>
                                <div class="col-12 col-lg-4 pl-20 mt-5 mt-lg-0 blog-sidebar">
                                    <div class="input-group mb-30">
                                        <input type="text" class="form-control blog-sidebar-search-input"
                                            placeholder="Search" aria-label="Recipient's username"
                                            aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary blog-sidebar-search-icon"
                                            type="button" id="button-addon2"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                    <div
                                        class="author-details d-flex justify-content-center align-items-center flex-column mb-50">
                                        <img class="img-fluid rounded-circle text-center"
                                            src="{{ asset('archite/img/authorOne.jpg') }}" alt="author image">
                                        <h6 class="h6 fw-700 dark-text line-height-3 mt-3 text-center">Ralph Waldo</h6>
                                        <p class="p body-text fw-500 line-height-5 pt-10 text-center">
                                            I'm are many variations of passages of Lor available.
                                        </p>
                                        <div
                                            class="blog-author-social d-flex justify-content-center align-items-center mt-30">
                                            <i class="fa-brands fa-facebook-f me-3"></i>
                                            <i class="fa-brands fa-twitter me-3"></i>
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </div>
                                    </div>
                                    <div class="blog-sidebar-category">
                                        <h5 class="h5 dark-text fw-700 line-height-3">Popular Category</h5>
                                        <ul class="sidebar-category-container mt-20">
                                            <li class="sidebar-category-item mb-20">
                                                <a class="fs-6 fw-500 body-text" href="blogDetails">Architecture
                                                    Design</a>
                                            </li>
                                            <li class="sidebar-category-item mb-20">
                                                <a class="fs-6 fw-500 body-text" href="blogDetails">Interior
                                                    Design</a>
                                            </li>
                                            <li class="sidebar-category-item mb-20">
                                                <a class="fs-6 fw-500 body-text" href="blogDetails">Luxury Interior
                                                    Design</a>
                                            </li>
                                            <li class="sidebar-category-item mb-20">
                                                <a class="fs-6 fw-500 body-text" href="blogDetails">Office Interior
                                                    Design</a>
                                            </li>
                                            <li class="sidebar-category-item mb-20">
                                                <a class="fs-6 fw-500 body-text" href="blogDetails">Home
                                                    Decoration</a>
                                            </li>
                                            <li class="sidebar-category-item">
                                                <a class="fs-6 fw-500 body-text" href="blogDetails">House Exterior
                                                    Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="recent-articles mt-60">
                                        <h5 class="h5 dark-text fw-700 line-height-3 mb-20">Recent Article</h5>
                                        <div class="recent-article-item mb-25">
                                            <div class="row g-2 g-sm-0 g-lg-2 align-items-center">
                                                <div class="col-3 col-sm-2 col-lg-3">
                                                    <img class="img-fluid"
                                                        src="{{ asset('archite/img/recentBlogOne.jpg') }}"
                                                        alt="blog image">
                                                </div>
                                                <div class="col-9 col-sm-10 col-lg-9">
                                                    <h6 class="mb-10">
                                                        <a class="fs-6 dark-text fw-500 recent-article-title"
                                                            href="blogDetails">
                                                            Interior Design Trends for 2023: The Latest and Greatest
                                                            Ideas
                                                        </a>
                                                    </h6>
                                                    <p class="p body-text fw-500 line-height-5">
                                                        14 Mar, 2023
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-article-item mb-25">
                                            <div class="row g-2 g-sm-0 g-lg-2 align-items-center">
                                                <div class="col-3 col-sm-2 col-lg-3">
                                                    <img class="img-fluid"
                                                        src="{{ asset('archite/img/recentBlogTwo.jpg') }}"
                                                        alt="blog image">
                                                </div>
                                                <div class="col-9 col-sm-10 col-lg-9">
                                                    <h6 class="mb-10">
                                                        <a class="fs-6 dark-text fw-500 recent-article-title"
                                                            href="blogDetails">
                                                            Small Spaces, Big Design: Maximizing Functionality.
                                                        </a>
                                                    </h6>
                                                    <p class="p body-text fw-500 line-height-5">
                                                        05 Mar, 2023
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-article-item mb-25">
                                            <div class="row g-2 g-sm-0 g-lg-2 align-items-center">
                                                <div class="col-3 col-sm-2 col-lg-3">
                                                    <img class="img-fluid"
                                                        src="{{ asset('archite/img/recentBlogThree.jpg') }}"
                                                        alt="blog image">
                                                </div>
                                                <div class="col-9 col-sm-10 col-lg-9">
                                                    <h6 class="mb-10">
                                                        <a class="fs-6 dark-text fw-500 recent-article-title"
                                                            href="blogDetails">
                                                            From Concept to Reality, The Journey of Success.
                                                        </a>
                                                    </h6>
                                                    <p class="p body-text fw-500 line-height-5">
                                                        02 Feb, 2023
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-article-item mb-25">
                                            <div class="row g-2 g-sm-0 g-lg-2 align-items-center">
                                                <div class="col-3 col-sm-2 col-lg-3">
                                                    <img class="img-fluid"
                                                        src="{{ asset('archite/img/recentBlogFour.jpg') }}"
                                                        alt="blog image">
                                                </div>
                                                <div class="col-9 col-sm-10 col-lg-9">
                                                    <h6 class="mb-10">
                                                        <a class="fs-6 dark-text fw-500 recent-article-title"
                                                            href="blogDetails">
                                                            Luxury Living: Designing High-End Interiors and Architecture
                                                        </a>
                                                    </h6>
                                                    <p class="p body-text fw-500 line-height-5">
                                                        14 Mar, 2023
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="popular-tags mt-60">
                                        <h5 class="h5 dark-text fw-700 line-height-3 mb-20">Popular Tag</h5>
                                        <div class="d-flex flex-wrap">
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Interior
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Architecture
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Design
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Décor
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Furniture
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Office
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Home
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Décor
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Furniture
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Design
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Flat
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Door
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Architecture
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Gallery
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Office
                                                </a>
                                            </p>
                                            <p class="mr-20">
                                                <a class="p body-text fw-500 line-height-5" href="blogDetails">
                                                    Urban
                                                </a>
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
        <!-- end blogs -->
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
                                        <li><a class="fw-500 text-uppercase" href="index-2">Trang chủ</a></li>
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
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 3000, // Tự động chuyển ảnh sau 3 giây
                    disableOnInteraction: false,
                },
            });
        });
    </script>

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


<!-- Mirrored from thememarch.com/demo/html/archite/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:59 GMT -->

</html>
