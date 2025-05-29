<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:57 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Tin tức</title>
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
                                <a class="menu-link text-uppercase fw-500" href="#">Dự toán chi phí</a>
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
                            <!-- Toggle Button -->
                            <button class="off-canvas-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                                aria-controls="offcanvasMenu">
                                <img class="off-canvas-icon" src="{{ asset('archite/img/menuToggleIvonTwo.png') }}"
                                    alt="Menu Toggle Icon" style="width: 30px; height: 30px;">
                            </button>

                            <!-- Offcanvas Menu -->
                            <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="offcanvasMenu"
                                aria-labelledby="offcanvasMenuLabel">
                                <!-- Header -->
                                <div class="offcanvas-header d-flex align-items-center justify-content-between p-4">
                                    <img id="offcanvasMenuLabel" class="header-logo img-fluid"
                                        src="{{ asset('archite/img/LogoTwo.png') }}" alt="Logo"
                                        style="max-width: 150px;">
                                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>

                                <!-- Body -->
                                <div class="offcanvas-body p-4">
                                    <nav>
                                        <ul class="nav flex-column custom-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index">Trang chủ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="about">Giới thiệu</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Dự toán chi phí</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="portfolio">Dự án</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog">Tin tức</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="recruitment">Tuyển dụng</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact">Liên hệ</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <!-- Custom CSS -->
                        <style>
                            .custom-offcanvas {
                                background-color: #ffffff;
                                /* White background */
                                width: 280px !important;
                                /* Consistent width */
                                transition: transform 0.3s ease-in-out;
                            }

                            .off-canvas-toggle {
                                background: none;
                                border: none;
                                padding: 10px;
                                cursor: pointer;
                                transition: transform 0.2s ease;
                            }

                            .off-canvas-toggle:hover {
                                transform: scale(1.1);
                            }

                            .custom-menu {
                                list-style: none;
                                padding: 0;
                                margin: 0;
                            }

                            .custom-menu .nav-item {
                                margin-bottom: 10px;
                            }

                            .custom-menu .nav-link {
                                color: #ffffff;
                                /* White text */
                                font-size: 1.1rem;
                                font-weight: 500;
                                text-transform: uppercase;
                                padding: 12px 0;
                                transition: color 0.3s ease, padding-left 0.3s ease;
                                display: block;
                                text-decoration: none;
                                padding-left: 10px;
                            }

                            .custom-menu .nav-link:hover {
                                color: #00aaff;
                                /* Teal/blue on hover */
                                padding-left: 15px;
                            }

                            .offcanvas-header {
                                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                                /* Subtle border for white background */
                            }

                            .btn-close-dark {
                                filter: invert(0);
                                /* Dark close button for white background */
                            }

                            /* Mobile adjustments */
                            @media (max-width: 576px) {
                                .custom-offcanvas {
                                    width: 80% !important;
                                    /* Wider on mobile */
                                }

                                .custom-menu .nav-link {
                                    font-size: 1rem;
                                    /* Smaller font for mobile */
                                }

                                .header-logo {
                                    max-width: 120px;
                                    /* Smaller logo on mobile */
                                }
                            }
                        </style>
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
                            Dành tặng nguồn cảm hứng của chúng tôi <br>Tin tức mới
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
                                    @php
                                        $enabledCount = 0;
                                    @endphp
                                    @foreach ($articles as $item)
                                        @if ($item->enabled == 1)
                                            <div class="blogs-archieve-card mb-70">
                                                <style>
                                                    .collapse-content {
                                                        height: 100px;
                                                        /* Chiều cao ban đầu */
                                                        overflow: hidden;
                                                        /* Ẩn phần vượt quá */
                                                        padding: 15px;
                                                        background-color: #f9f9f9;
                                                        border-radius: 4px;
                                                        font-size: 15px;
                                                        color: #333;
                                                        transition: height 0.3s ease;
                                                        /* Hiệu ứng trượt mượt mà */
                                                    }

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
                                                <div class="collapse-content">
                                                    {!! $item->description !!}
                                                </div>
                                                {{-- {!! $item->description !!} --}}
                                                <a class="fs-6 dark-text fw-500 line-height-3 text-uppercase mt-25 d-flex align-items-center"
                                                    href="blogDetails-{{ $item->id }}">
                                                    <span class="mr-10">read more</span>
                                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                            @php
                                                $enabledCount++; // Tăng biến đếm khi hiển thị một phần tử enabled
                                            @endphp

                                            @if ($enabledCount == 3)
                                                @break
                                            @endif
                                        @endif
                                    @endforeach


                                </div>
                                <div class="col-12 col-lg-4 pl-20 mt-5 mt-lg-0 blog-sidebar">
                                    <div class="recent-articles mt-60">
                                        <h5 class="h5 dark-text fw-700 line-height-3 mb-20">Bài viết khác</h5>
                                        @foreach ($articles as $item)
                                            @if ($item->enabled == 1)
                                                <div class="recent-article-item mb-25">
                                                    <div class="row g-2 g-sm-0 g-lg-2 align-items-center">
                                                        <div class="col-3 col-sm-2 col-lg-3">
                                                            <img class="img-fluid"
                                                                src="{{ json_decode($item->image_url, true)[0] }}"
                                                                alt="blog image">
                                                        </div>
                                                        <div class="col-9 col-sm-10 col-lg-9">
                                                            <h6 class="mb-10">
                                                                <a class="fs-6 dark-text fw-500 recent-article-title"
                                                                    href="blogDetails-{{ $item->id }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </h6>
                                                            <p class="p body-text fw-500 line-height-5">
                                                                {{ $item->published_at }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

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
        <footer class="footer-one" style="background-color: #1a1a1a; padding: 60px 0;">
            <div class="container">
                <div class="footer-one-wrapper">
                    <div class="row">
                        <!-- Cột thông tin công ty -->
                        <div class="col-12 col-md-6 col-lg-5 mb-5 mb-md-0">
                            <div class="logo mb-4">
                                <img src="{{ asset('archite/img/Logo.png') }}" style="height: 50px; width: auto;"
                                    alt="logo">
                            </div>
                            <p class="text-white fw-400 line-height-4" style="font-size: 15px; opacity: 0.9;">
                                Công ty TNHH TM & DV TOÀN CẦU GT – Đơn vị hàng đầu với hơn 10 năm kinh nghiệm trong
                                thiết kế, thi công và sản xuất nội – ngoại thất. Chúng tôi chuyên thực hiện các dự án
                                văn phòng, showroom, nhà hàng, biệt thự, chung cư và xây dựng hình ảnh cho các doanh
                                nghiệp, tập đoàn đa quốc gia. Với phương châm "Khách hàng là người thân", chúng tôi cam
                                kết mang đến sản phẩm và dịch vụ chất lượng cao, đáp ứng tối ưu nhu cầu của bạn.
                            </p>
                            <h5 class="text-white fw-600 mt-4" style="font-size: 18px;">
                                Email: <span style="color: #f5a623;">dongtrieuarc@gmail.com</span>
                            </h5>
                        </div>
                        <!-- Cột thông tin liên hệ -->
                        <div class="col-12 col-md-6 col-lg-4 offset-lg-3">
                            <h5 class="text-white fw-600 mb-4"
                                style="font-size: 18px; border-bottom: 2px solid #f5a623; padding-bottom: 10px;">
                                Thông tin liên hệ
                            </h5>
                            <div class="d-flex align-items-start mb-4">
                                <i class="fa-solid fa-location-dot text-white d-inline-block mr-6 mt-2"
                                    style="font-size: 20px; color: #f5a623; padding-right: 10px"></i>
                                <p class="text-white fw-400 line-height-4 mb-0" style="font-size: 15px;">
                                    159 Đường CN11, Sơn Kỳ, Tân Phú, Hồ Chí Minh, Việt Nam
                                </p>
                            </div>
                            <div class="d-flex align-items-start mb-4">
                                <i class="fa-solid fa-phone-volume text-white d-inline-block mr-6 mt-2"
                                    style="font-size: 20px; color: #f5a623; padding-right: 10px"></i>
                                <p class="text-white fw-400 line-height-4 mb-0" style="font-size: 15px;">
                                    0907 859 668
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- Dòng bản quyền -->
                    <div class="mt-5 pt-4 text-center" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                        <p class="text-white fw-400 line-height-3 mb-0" style="font-size: 14px; opacity: 0.7;">
                            Copyright © 2025 Công ty TNHH TM & DV TOÀN CẦU GT. All Rights Reserved.
                        </p>
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
