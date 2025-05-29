<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Trang chủ</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('archite/img/favicon.ico') }}">
    <!-- Fonts (google font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Tajawal:wght@400;500;700&display=swap"
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
    <main class="home-one overflow-x-hidden">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header dark-header position-absolute top-0 left-0 z-3 w-100 pt-35">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="nav d-flex align-items-center justify-content-between">
                            <!-- logo -->
                            <div class="logo-container">
                                <img class="header-logo" src="{{ asset('archite/img/Logo.png') }}" alt="logo">
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
                                        <a class="menu-link text-uppercase fw-500" href="math">Dự toán chi phí</a>
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
                                    <button class="off-canvas-toggle" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <img class="off-canvas-icon"
                                            src="{{ asset('archite/img/MenuToggleIcon.png') }}" alt="Biểu tượng menu"
                                            style="width: 30px; height: 30px;">
                                    </button>

                                    <!-- Offcanvas Menu -->
                                    <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1"
                                        id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <!-- Header -->
                                        <div
                                            class="offcanvas-header d-flex align-items-center justify-content-between p-4">
                                            <img id="offcanvasRightLabel" class="header-logo img-fluid"
                                                src="{{ asset('archite/img/LogoTwo.png') }}" alt="Logo"
                                                style="max-width: 150px;">
                                            <button type="button" class="btn-close btn-close-dark"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                                        <a class="nav-link" href="math">Dự toán chi phí</a>
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
                                        color: #000000;
                                        /* Black text */
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
                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- start banner -->
        <section
            class="banner-one pt-70 pb-70 position-relative overflow-hidden bg-img-zoom d-flex justify-content-center align-items-center">
            <div class="banner-one-wrapper pt-5 pt-sm-0">
                <!-- floating contact bar -->
                <div class="floating-contact-box position-absolute">
                    <ul class="d-flex">
                        <li class="contact-info-one text-white">0907 859 668</li>
                        <li class="contact-info-two text-white">dongtrieuarc@gmail.com</li>
                    </ul>
                </div>
                <!-- floating contact bar line -->
                <div class="floating-line position-absolute"></div>
                <!-- floating social media bar -->
                <div class="floating-social-box position-absolute d-flex align-items-center justify-content-center">
                    <ul class="d-flex">
                        <li class="text-white floating-social-icon">
                            <a href="https://twitter.com/">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="text-white floating-social-icon">
                            <a href="https://linkedin.com/">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="text-white floating-social-icon">
                            <a href="https://facebook.com/">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-follow-text text-white">Theo dõi chúng tôi</li>
                    </ul>
                </div>
                <div class="container" style="position: relative; z-index: 2;">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-onecontents">
                                <div>
                                    <div class="col-12 col-lg-8 col-xl-7">
                                        <div class="banner-onecontent-left">
                                            <div class="animate-heading">
                                                <h1
                                                    class="text-white fw-700 text-capitalize mb-45 line-height-1 position-relative ah-headline home-mobile-heading">
                                                    <span>Biến</span> <br> không gian mơ ước <span
                                                        class="ah-words-wrapper">
                                                        <b class="is-visible">của bạn</b>
                                                        <b>thành hiện thực</b>
                                                    </span>
                                                </h1>
                                            </div>
                                            <p
                                                class="text-white fw-500 line-height-5 mb-60 banner-paragraph position-relative">
                                                Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ
                                                nhà thiết kế và trang trí giàu kinh nghiệm của chúng tôi đam mê tạo ra
                                                những không gian đẹp, tiện nghi, nâng tầm chất lượng cuộc sống cho khách
                                                hàng.
                                            </p>
                                            <a href="portfolio" class="btn brand-btn text-uppercase border-0"><span
                                                    class="z-1 position-relative">Dự án</span></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xl-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-scroll-bottom d-none d-sm-inline-block" style="position: relative; z-index: 2;">
                    <a href="#homeOneAbout" class="position-absolute d-flex flex-column">
                        <p class="fw-500 line-height-5 text-white text-uppercase z-3 mb-10">Cuộn xuống</p>
                        <i class="fa-solid fa-arrow-down-long text-white upDown-animation-fast"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- end banner -->
        <!-- start about -->
        <section id="homeOneAbout" class="about-one section-padding-top-xl section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-one-top">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h2 class="h2 text-white line-height-3 appear-text">
                                        Biến đổi không gian, nâng tầm cuộc sống
                                    </h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="about-one-first-text-box">
                                        <p class="p body-text fw-500 line-height-5">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế và trang trí giàu kinh nghiệm của chúng tôi đam mê tạo ra những
                                            không gian đẹp, tiện nghi, nâng tầm chất lượng cuộc sống cho khách hàng.
                                        </p>
                                        <a href="portfolio" class="btn brand-btn text-uppercase mt-30"><span
                                                class="z-1 position-relative">Tìm hiểu thêm</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-70 about-one-bottom">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="position-relative d-flex align-items-center">
                                        <div class="hover-img-container about-one-img">
                                            <img src="{{ asset('archite/img/aboutOne1.jpg') }}"
                                                alt="hình ảnh giới thiệu" class="rounded-0">
                                        </div>
                                        <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                                            class="hover-img-container about-one-img-small position-absolute d-none d-lg-inline-block">
                                            <img src="{{ asset('archite/img/aboutOneSmall1.jpg') }}"
                                                alt="hình ảnh giới thiệu nhỏ" class="rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div>
                                        <h3 class="h3 dark-text fw-700 about-one-subheading line-height-3">
                                            Tạo nên không gian nội thất mơ ước của bạn
                                        </h3>
                                        <div class="about-one-second-text-box mt-85 ml-60">
                                            <div class="mb-60 about-second-text-box-first-item">
                                                <h5 class="h5 fw-700 dark-text line-height-3">
                                                    Câu chuyện của chúng tôi
                                                </h5>
                                                <p class="p body-text fw/ fw-500 line-height-5 mt-10">
                                                    Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội
                                                    ngũ nhà thiết kế và trang trí giàu kinh nghiệm của chúng tôi đam mê
                                                    tạo ra những không gian đẹp, tiện nghi, nâng tầm chất lượng cuộc
                                                    sống cho khách hàng.
                                                </p>
                                            </div>
                                            <div class="mb-0">
                                                <h5 class="h5 fw-700 dark-text line-height-3">
                                                    Mục tiêu của chúng tôi
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mt-10">
                                                    Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội
                                                    ngũ nhà thiết kế và trang trí giàu kinh nghiệm của chúng tôi đam mê
                                                    tạo ra những không gian đẹp, tiện nghi, nâng tầm chất lượng cuộc
                                                    sống cho khách hàng.
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
        {{-- <section class="count-one section-padding-bottom-xl section-padding-top">
            <div class="container">
                <div class=" row">
                    <div class="col-6 col-xl-3">
                        <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">46</span>K</h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Dự án hoàn thành
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">3</span>K</h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Khách hàng hài lòng
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">26</span></h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Năm kinh nghiệm
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                            <div class="counter-container">
                                <h1 class="h1 dark-text"><span class="counter">24</span></h1>
                                <h4 class="h4 fw-400 line-height-1 body-text">
                                    Giải thưởng đạt được
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end count -->
        <!-- start services -->
        <section class="services-one section-padding-top-xl section-padding-bottom-xl bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h2 class="h2 text-black line-height-3 appear-text-dark">
                                        Dịch vụ thiết kế nội thất chuyên nghiệp của chúng tôi
                                    </h2>
                                </div>
                                <div class="col-12 col-sm-6">
                                </div>
                            </div>
                        </div>
                        <div class="service-one-card-container mt-80 position-relative">
                            <div class="owl-carousel owl-theme">
                                <div class="item service-one-card position-relative">
                                    <div class="service-imag">
                                        <img src="{{ asset('archite/img/serviceBgOne.jpg') }}"
                                            class="w-100 position-relative" alt="Hình ảnh dịch vụ">
                                    </div>
                                    <div class="position-absolute service-one-contents z-1">
                                        <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                            Lập kế hoạch không gian & Thiết kế nội thất cao cấp
                                        </h5>
                                        <p class="p text-white fw-500 line-height-5 mb-65">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế giàu kinh nghiệm của chúng tôi.
                                        </p>
                                        <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                                class="me-2">Tìm hiểu thêm</span> <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                {{-- <div class="item service-one-card position-relative">
                                    <div class="service-imag">
                                        <img src="{{ asset('archite/img/serviceBgTwo.jpg') }}"
                                            alt="Hình ảnh dịch vụ">
                                    </div>
                                    <div class="position-absolute z-1 service-one-contents">
                                        <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                            Lập kế hoạch & Thi công không gian
                                        </h5>
                                        <p class="p text-white fw-500 line-height-5 mb-65">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế giàu kinh nghiệm của chúng tôi.
                                        </p>
                                        <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                                class="me-2">Tìm hiểu thêm</span> <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="service-one-card-stroke position-absolute"></div>
                                </div> --}}
                                <div class="item service-one-card position-relative">
                                    <div class="service-imag">
                                        <img src="{{ asset('archite/img/serviceBgThree.jpg') }}"
                                            alt="Hình ảnh dịch vụ">
                                    </div>
                                    <div class="position-absolute z-1 service-one-contents">
                                        <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                            Lập kế hoạch & Thi công không gian
                                        </h5>
                                        <p class="p text-white fw-500 line-height-5 mb-65">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế giàu kinh nghiệm của chúng tôi.
                                        </p>
                                        <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                                class="me-2">Tìm hiểu thêm</span> <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="service-one-card-stroke position-absolute"></div>
                                </div>
                                <div class="item service-one-card position-relative">
                                    <div class="service-imag">
                                        <img src="{{ asset('archite/img/serviceBgFour.jpg') }}"
                                            alt="Hình ảnh dịch vụ">
                                    </div>
                                    <div class="position-absolute z-1 service-one-contents">
                                        <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                            Lập kế hoạch cho thiết kế kiến trúc
                                        </h5>
                                        <p class="p text-white fw-500 line-height-5 mb-65">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế giàu kinh nghiệm của chúng tôi.
                                        </p>
                                        <a class="btn p-0 text-white text-uppercase fw-500" href="about"><span
                                                class="me-2">Tìm hiểu thêm</span> <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="service-one-card-stroke position-absolute"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- end services -->
        <!-- start projects -->
        <section class="projects-one section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center">

                            <div class="col-12 col-lg-6 ">
                                <div class="projects-one-item">
                                    <a href="portfolioDetails">
                                        <h2
                                            class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block stroke-mobile-position">
                                            Thiết kế cấu trúc
                                        </h2>
                                    </a>
                                    <div>
                                        <h2
                                            class="h2 text-white fw-700 line-height-3 mb-90 appear-text projects-section-title">
                                            Dự án thiết kế nội thất chuyên nghiệp của chúng tôi
                                        </h2>
                                        <div class="project-img-ontainer">
                                            <img class="home-one-portfolio-first-img"
                                                src="{{ asset('archite/img/projectsOne.jpg') }}"
                                                alt="hình ảnh dự án">
                                            <a href="portfolio" class="btn text-uppercase project-btn">
                                                <span class="position-relative z-1">Xem dự án</span>
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </a>
                                        </div>
                                        <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Dự án - Thiết kế không gian
                                            cao cấp
                                        </h6>
                                        <a data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500"
                                            data-aos-offset="100" href="portfolio"
                                            class="btn brand-btn text-uppercase mt-100 d-none d-lg-inline-block">
                                            <span class="z-1 position-relative">Xem các dự án</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <div class="mt-5 mt-lg-0">
                                    <div class="ml-100 projects-one-item">
                                        <a href="portfolio">
                                            <h2
                                                class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block">
                                                Kiến trúc</h2>
                                        </a>
                                        <div class="projects-one-contents">
                                            <div class="project-img-ontainer">
                                                <img class="home-one-portfolio-second-img"
                                                    src="{{ asset('archite/img/projectsTwo.jpg') }}"
                                                    alt="hình ảnh dự án">
                                                <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">Xem dự án</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Dự án - Thiết kế nội
                                                thất văn phòng
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="project-item-left-padding mt-60 projects-one-item">
                                        <a href="portfolio">
                                            <h2
                                                class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block project-text-stroke-utility">
                                                Cảnh quan</h2>
                                        </a>
                                        <div class="projects-contents">
                                            <div class="project-img-ontainer text-end">
                                                <img class="home-one-portfolio-third-img"
                                                    src="{{ asset('archite/img/projectsThree.jpg') }}"
                                                    alt="hình ảnh dự án">
                                                <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">Xem dự án</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Dự án - Thiết kế kiến
                                                trúc hiện đại
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="project-mobile-cta-button">
                                        <a data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500"
                                            data-aos-offset="100" href="portfolio"
                                            class="btn brand-btn text-uppercase mt-60 d-inline-block d-lg-none">
                                            <span class="z-1 position-relative">Xem các dự án</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end projects -->
        <!-- start features -->
        <section class="features-one section-padding-top-xl section-padding-bottom-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div>
                                    <h2 class="h2 body-text-two fw-700 line-height-3 appear-text-dark">
                                        Các tính năng cốt lõi của công ty thiết kế nội thất của chúng tôi
                                    </h2>
                                    <p class="text-white fw-500 line-height-5 mt-40 position-relative pe-0 pe-lg-5">
                                        Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà thiết
                                        kế và trang trí giàu kinh nghiệm của chúng tôi đam mê tạo ra những không gian
                                        đẹp, tiện nghi, nâng tầm chất lượng cuộc sống cho khách hàng.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="mt-5 mt-lg-0">
                                    <div class="position-relative">
                                        <img src="{{ asset('archite/img/featuresVideoBg.png') }}"
                                            class="img-no-hover-effect features-bg-img" alt="nền video tính năng">
                                        <a href="#" class="js-video-button features-video-animation"
                                            data-video-id='Us442Oh-znE'><img
                                                src="{{ asset('archite/img/playIconWhite.png') }}"
                                                class="img-fluid features-play-icon" alt="biểu tượng phát video">
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
                                            Sáng tạo
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế giàu kinh nghiệm của chúng tôi.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="feature-one-box">
                                        <p class="brand-text fw-700 feature-one-number-top">02</p>
                                        <h5 class="h5 text-white fw-700 line-height-3">
                                            Quản lý
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế giàu kinh nghiệm của chúng tôi.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="feature-one-box">
                                        <p class="brand-text fw-700 feature-one-number-top">03</p>
                                        <h5 class="h5 text-white fw-700 line-height-3">
                                            Lập kế hoạch không gian
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi! Đội ngũ nhà
                                            thiết kế giàu kinh nghiệm của chúng tôi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogs-one section-padding-top section-padding-bottom-xl overflow-hidden">
            <div class="contact-container">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="row">
                                <div class="col-12 col-sm-5 col-lg-4">
                                    <div class="blog-heading">
                                        <h2
                                            class="h2 text-white fw-700 line-height-3 appear-text mb-5 mb-sm-0 blog-one-heading">
                                            Tin tức
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-lg-8">
                                    <div>
                                        <div class="blogs-one-cards-container">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item blogs-one-card">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogOne.jpg') }}"
                                                            alt="hình ảnh blog">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Tại sao tôi cần một kiến trúc sư?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi!
                                                        Đội ngũ nhà thiết kế giàu kinh nghiệm của chúng tôi.
                                                    </p>
                                                </div>
                                                <div class="item blogs-one-card mt-30">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogTwo.jpg') }}"
                                                            alt="hình ảnh blog">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Bạn có biết về các nhà xây dựng?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi!
                                                        Đội ngũ nhà thiết kế giàu kinh nghiệm của chúng tôi.
                                                    </p>
                                                </div>
                                                <div class="item blogs-one-card">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogThree.jpg') }}"
                                                            alt="hình ảnh blog">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Bạn có biết về nội thất?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi!
                                                        Đội ngũ nhà thiết kế giàu kinh nghiệm của chúng tôi.
                                                    </p>
                                                </div>
                                                <div class="item blogs-one-card mt-30">
                                                    <div class="hover-img-container">
                                                        <img class="img-no-hover-effect"
                                                            src="{{ asset('archite/img/blogTwo.jpg') }}"
                                                            alt="hình ảnh blog">
                                                    </div>
                                                    <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                        <a class="h5 fw-700" href="blogDetails">
                                                            Bạn có biết về các nhà xây dựng?
                                                        </a>
                                                    </h5>
                                                    <p class="p body-text fw-500 line-height-5 pt-15">
                                                        Chào mừng bạn đến với công ty thiết kế nội thất của chúng tôi!
                                                        Đội ngũ nhà thiết kế giàu kinh nghiệm của chúng tôi.
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

    <!-- Jquery script -->
    <!-- jQuery -->
    <script src="{{ asset('archite/js/jquery-3.6.4.min.js') }}"></script>
    <!-- Bootstrap Script -->
    <script src="{{ asset('archite/js/bootstrap.min.js') }}"></script>
    <!-- Font Awesome Script -->
    <script src="{{ asset('archite/js/all.min.js') }}"></script>
    <!-- Modal Video Script -->
    <script src="{{ asset('archite/js/jquery-modal-video.min.js') }}"></script>
    <!-- Owl Carousel Script -->
    <script src="{{ asset('archite/js/owl.carousel.min.js') }}"></script>
    <!-- AOS Script -->
    <script src="{{ asset('archite/js/aos.js') }}"></script>
    <!-- jQuery Counterup -->
    <script src="{{ asset('archite/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('archite/js/jquery.counterup.min.js') }}"></script>
    <!-- Preloader Script -->
    <script src="{{ asset('archite/js/jquery.preloader.min.js') }}"></script>
    <!-- jQuery Viewport Checker Script -->
    <script src="{{ asset('archite/js/jquery.viewportchecker.min.js') }}"></script>
    <!-- Textyle Script -->
    <script src="{{ asset('archite/js/textyle.min.js') }}"></script>
    <!-- Animated Headline Script -->
    <script src="{{ asset('archite/js/jquery.animatedheadline.min.js') }}"></script>
    <!-- Main JS Script -->
    <script src="{{ asset('archite/js/main.js') }}"></script>

</body>

</html>
