<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Dự án</title>
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
    <main>
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
                                        data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                                        <img class="off-canvas-icon"
                                            src="{{ asset('archite/img/menuToggleIvonTwo.png') }}"
                                            alt="Biểu tượng menu" style="width: 30px; height: 30px;">
                                    </button>

                                    <!-- Offcanvas Menu -->
                                    <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1"
                                        id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
                                        <!-- Header -->
                                        <div
                                            class="offcanvas-header d-flex align-items-center justify-content-between p-4">
                                            <img id="offcanvasMenuLabel" class="header-logo img-fluid"
                                                src="{{ asset('archite/img/LogoTwo.png') }}" alt="Logo"
                                                style="max-width: 150px;">
                                            <button type="button" class="btn-close btn-close-dark"
                                                data-bs-dismiss="offcanvas" aria-label="Đóng"></button>
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
                                        width: 280px !important;
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
                                        padding-left: 15px;
                                    }

                                    .offcanvas-header {
                                        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                                    }

                                    .btn-close-dark {
                                        filter: invert(0);
                                    }

                                    @media (max-width: 576px) {
                                        .custom-offcanvas {
                                            width: 80% !important;
                                        }

                                        .custom-menu .nav-link {
                                            font-size: 1rem;
                                        }

                                        .header-logo {
                                            max-width: 120px;
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
        <!-- start inner page banner-->
        <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                            <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                                Các dự án thiết kế nội thất chuyên nghiệp của chúng tôi
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start projects -->
        <div class="filter-menu">
            <button class="filter-btn active" data-filter="all">Tất cả</button>
            @foreach ($formattedResults as $item)
                <button class="filter-btn" data-filter="{{ $item['name'] }}">{{ $item['name'] }}</button>
            @endforeach
        </div>

        <section class="projects-one section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-container">
                            <div class="portfolio-grid">
                                @foreach ($formattedResults as $index => $item)
                                    @foreach ($item['articles'] as $articleIndex => $article)
                                        @if ($article['enabled'] == 1)
                                            @php
                                                $totalIndex = $index * count($item['articles']) + $articleIndex;
                                                $isLeftColumn = $totalIndex % 2 == 0;
                                                $itemIndex = floor($totalIndex / 2);
                                                $isVertical = $itemIndex % 4 == 0 || $itemIndex % 4 == 3;
                                            @endphp
                                            <div
                                                class="portfolio-item {{ $isVertical ? 'vertical' : 'horizontal' }} show">
                                                <a href="portfolioDetails" class="portfolio-link">
                                                    <h2
                                                        class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke {{ $isVertical ? '' : 'project-text-stroke-utility' }}">
                                                        {{ $item['name'] }}
                                                    </h2>
                                                </a>
                                                <div class="portfolio-content">
                                                    <div
                                                        class="portfolio-image {{ $isVertical ? 'vertical-img' : 'horizontal-img' }}">
                                                        <img src="{{ $article['image'] }}" alt="hình ảnh dự án">
                                                        <a href="portfolioDetails-{{ $article['id'] }}"
                                                            class="portfolio-btn">
                                                            <span style="color: white">Xem dự án</span>
                                                            <i class="fa-solid fa-arrow-right-long"></i>
                                                        </a>
                                                    </div>
                                                    <h6 class="portfolio-subtitle">
                                                        Dự án - {{ $article['title'] }}
                                                    </h6>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="portfolio-cta-btn text-center">
                            <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                <span class="position-relative z-1">Xem dự án</span>
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end projects -->
        <!-- start work together -->
        <section class="work-together">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="d-flex align-items-center justify-content-center flex-column work-together-content-wrapper">
                            <p class="p text-white fw-500 line-height-3 mb-10">
                                Hãy cùng hợp tác
                            </p>
                            <h2 class="h2 fw-700 line-height-3 text-white text-center">Cùng nhau tạo nên không gian mơ
                                ước của bạn!</h2>
                            <a href="contact" class="btn brand-btn text-uppercase mt-50 border-0"><span
                                    class="z-1 position-relative">Xây dựng ngay</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const buttons = document.querySelectorAll(".filter-btn");
                const projects = document.querySelectorAll(".portfolio-item");

                function applyFilter(filter) {
                    projects.forEach((project, index) => {
                        const projectCategory = project.querySelector('.h2').textContent.trim().toLowerCase();
                        const filterValue = filter.trim().toLowerCase();

                        if (filterValue === "all" || projectCategory === filterValue) {
                            project.classList.add("show");
                            setTimeout(() => {
                                project.style.opacity = "1";
                                project.style.transform = "translateY(0)";
                            }, index * 100);
                        } else {
                            project.classList.remove("show");
                            project.style.opacity = "0";
                            project.style.transform = "translateY(50px)";
                        }
                    });
                }

                const defaultButton = document.querySelector('.filter-btn.active');
                if (defaultButton) {
                    applyFilter(defaultButton.getAttribute("data-filter"));
                }

                buttons.forEach(button => {
                    button.addEventListener("click", function() {
                        const filter = this.getAttribute("data-filter");

                        buttons.forEach(btn => btn.classList.remove("active"));
                        this.classList.add("active");

                        applyFilter(filter);
                    });
                });
            });
        </script>

        <style>
            .row.align-items-start {
                display: flex;
                align-items: flex-start;
            }

            .col-12.col-lg-6 {
                width: 100%;
            }

            @media (min-width: 992px) {
                .col-12.col-lg-6 {
                    width: 50%;
                }
            }

            .pe-5 {
                padding-right: 3rem;
            }

            .projects-one-item {
                margin-top: 100px;
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.5s ease;
            }

            .projects-one-item.show {
                opacity: 1;
                transform: translateY(0);
            }

            .project-item-left-padding {
                padding-left: 20px;
            }

            .mt-100 {
                margin-top: 100px;
            }

            .ml-100 {
                margin-left: 100px;
            }

            .project-item-margin {
                margin-left: 100px;
            }

            .h2.text-uppercase.fw-700.line-height-3.projects-text-stroke {
                font-size: 2rem;
                text-transform: uppercase;
                font-weight: 700;
                line-height: 1.3;
                display: inline-block;
                color: transparent;
            }

            .project-text-stroke-utility {}

            .projects-one-contents {
                position: relative;
            }

            .project-img-ontainer {
                position: relative;
            }

            .project-img-ontainer.text-end {
                text-align: right;
            }

            .home-one-portfolio-fourth-img,
            .home-one-portfolio-third-img,
            .home-one-portfolio-second-img,
            .home-one-portfolio-sixth-img {
                width: 100%;
                height: auto;
            }

            .h6.dark-text.line-height-3.fw-700.mt-15 {
                font-size: 1rem;
                color: #333;
                line-height: 1.3;
                font-weight: 700;
                margin-top: 15px;
            }

            .portfolio-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 40px 20px;
            }

            .portfolio-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 90px;
            }

            @media (max-width: 768px) {
                .portfolio-grid {
                    grid-template-columns: 1fr;
                    gap: 40px;
                }

                .ml-100,
                .project-item-margin {
                    margin-left: 0 !important;
                }

                .project-item-left-padding {
                    padding-left: 10px;
                }

                .mt-100 {
                    margin-top: 50px;
                }
            }

            .portfolio-item {
                display: none;
                opacity: 1;
                transform: translateY(50px);
                transition: opacity 0.5s ease, transform 0.5s ease;
            }

            .portfolio-item.show {
                display: block;
            }

            .portfolio-title {
                font-size: 2rem;
                text-transform: uppercase;
                font-weight: 700;
                line-height: 1.3;
                display: inline-block;
                margin-bottom: 0.5em;
            }

            .shifted {
                padding-left: 20px;
            }

            .portfolio-content {
                position: relative;
            }

            .portfolio-image {
                position: relative;
                overflow: hidden;
                border-radius: 8px;
            }

            .portfolio-image img {
                width: 100%;
                height: auto;
                display: block;
                transition: transform 0.3s ease;
            }

            .portfolio-image:hover img {
                transform: scale(1.05);
            }

            .vertical-img img,
            .horizontal-img img {
                height: auto;
            }

            .portfolio-subtitle {
                font-size: 1rem;
                color: #333;
                line-height: 1.3;
                font-weight: 700;
                margin-top: 15px;
            }

            .portfolio-btn {
                position: absolute;
                bottom: 20px;
                right: 20px;
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 10px 20px;
                background: linear-gradient(135deg, #d28901, #FFA500);
                color: #fff;
                text-transform: uppercase;
                font-size: 0.9rem;
                font-weight: 600;
                text-decoration: none;
                border-radius: 50px;
                box-shadow: 0 4px 15px rgba(255, 165, 0, 0.3);
                transition: all 0.3s ease;
                opacity: 0;
                transform: translateY(10px);
            }

            .portfolio-btn span {
                position: relative;
                z-index: 1;
            }

            .portfolio-btn .fa-arrow-right-long {
                font-size: 1rem;
                transition: transform 0.3s ease;
            }

            .portfolio-btn:hover {
                background: linear-gradient(135deg, #d28901, #FFA500);
                box-shadow: 0 6px 20px rgba(255, 165, 0, 0.5);
                color: #fff;
            }

            .fa-arrow-right-long {
                color: #fff;
            }

            .portfolio-btn:hover .fa-arrow-right-long {
                transform: translateX(5px);
                color: #fff;
            }

            .portfolio-image:hover .portfolio-btn {
                opacity: 1;
                transform: translateY(0);
            }

            .filter-menu {
                display: flex;
                justify-content: center;
                gap: 15px;
                margin-top: 30px;
            }

            .filter-menu button {
                background: none;
                border: 2px solid #FFA500;
                color: #FFA500;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: 600;
                border-radius: 25px;
                cursor: pointer;
                transition: all 0.3s ease;
                outline: none;
            }

            .filter-menu button:hover,
            .filter-menu button.active {
                background: #FF8C00;
                border: 2px solid #FF8C00;
                color: #fff;
                box-shadow: 0 4px 12px rgba(255, 140, 0, 0.3);
                transform: translateY(-2px);
            }

            @media (max-width: 576px) {
                .filter-menu {
                    gap: 10px;
                    margin-top: 20px;
                }

                .filter-menu button {
                    padding: 8px 16px;
                    font-size: 14px;
                    border-radius: 20px;
                }

                .h2.text-uppercase.fw-700.line-height-3.projects-text-stroke {
                    display: none;
                }
            }
        </style>

        <!-- end work together -->
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

</html>
