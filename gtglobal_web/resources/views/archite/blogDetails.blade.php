<!DOCTYPE html>
<html lang="vi">

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
    <style>
        /* Font chữ */
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        span {
            font-family: 'Space Grotesk', sans-serif !important;
        }

        /* Căn giữa hình ảnh */
        .hover-img-container {
            text-align: center;
            margin: 0 auto;
        }

        .hover-img-container img {
            display: block !important;
            margin: 0 auto !important;
            max-width: 100%;
            height: auto;
        }

        /* Căn giữa logo trong header và footer */
        .logo-container img,
        .footer-one .logo img {
            display: block !important;
            margin: 0 auto !important;
        }

        /* Căn giữa hình ảnh trong nội dung động */
        .blog-details-wrapper img,
        .collapse-content img {
            display: block !important;
            margin: 0 auto !important;
            max-width: 100%;
            height: auto;
        }

        /* Ghi đè float hoặc kiểu lệch */
        img {
            float: none !important;
            clear: both !important;
        }

        /* Responsive */
        @media (max-width: 991px) {

            .hover-img-container img,
            .blog-details-wrapper img,
            .collapse-content img {
                max-width: 100%;
                margin: 0 auto !important;
            }
        }

        /* Giữ style collapse-content nguyên gốc */
        .collapse-content {
            height: 100px;
            overflow: hidden;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            font-size: 15px;
            color: #333;
            transition: height 0.3s ease;
        }
    </style>
</head>

<body>
    <main class="blog-details-page overflow-x-hidden">
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
                            <li><a class="menu-link text-uppercase fw-500" href="index">Trang chủ</a></li>
                            <li><a class="menu-link text-uppercase fw-500" href="about">Giới thiệu</a></li>
                            <li><a class="menu-link text-uppercase fw-500" href="portfolio">Dự án</a></li>
                            <li><a class="menu-link text-uppercase fw-500" href="blog">Tin tức</a></li>
                            <li><a class="menu-link text-uppercase fw-500" href="contact">Liên hệ</a></li>
                            <li><a class="menu-link text-uppercase fw-500" href="recruitment">Tuyển dụng</a></li>
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
                                            <div class="dropdownlink"><span class="text-uppercase"><a
                                                        href="index">Trang chủ</a></span></div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink"><span class="text-uppercase"><a
                                                        href="about">Giới thiệu</a></span></div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink"><span class="text-uppercase"><a
                                                        href="portfolio">Dự án</a></span></div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink"><span class="text-uppercase"><a href="blog">Tin
                                                        tức</a></span></div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink"><span class="text-uppercase"><a
                                                        href="recruitment">Tuyển dụng</a></span></div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink"><span class="text-uppercase"><a
                                                        href="contact">Liên hệ</a></span></div>
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
        <section class="blog-details-page-banner section-padding-bottom section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-details-page-banner-wrapper">
                            <h2 class="h2 dark-text fw-700 line-height-3 text-start">
                                {{ $currentArticle->title }}
                            </h2>
                            <div class="mt-50 blog-details-banner-bottom">
                                <div class="row w-100">
                                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mt-3 mt-sm-0">
                                        <h6 class="h6 fw-400 body-text line-height-3 bottom-gradient-divider">Ngày
                                            đăng:
                                            <span class="fw-700 dark-text">{{ $currentArticle->published_at }}</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start blog details -->
        <div class="blog-details section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-details-wrapper">
                            {!! $currentArticle->perex !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end blog details -->
        <!-- start related news -->
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
                                            Dự án khác
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-lg-8">
                                    <div>
                                        <div class="blogs-one-cards-container">
                                            <div class="owl-carousel owl-theme">
                                                @foreach ($articles as $item)
                                                    <div
                                                        class="item blogs-one-card {{ $loop->index % 2 == 0 ? 'mt-3' : '' }}">
                                                        <div class="hover-img-container">
                                                            <img class="img-no-hover-effect"
                                                                src="{{ $item->image_url[0] }}" alt="blog image">
                                                        </div>
                                                        <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                            <a class="h5 fw-700"
                                                                href="blogDetails-{{ $item->id }}">
                                                                {{ $item->title }}
                                                            </a>
                                                        </h5>
                                                        <div class="collapse-content">
                                                            {!! $item->description !!}
                                                        </div>
                                                    </div>
                                                @endforeach
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
        <!-- end related news -->
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Xử lý hình ảnh trong blog-details-wrapper và collapse-content
            const images = document.querySelectorAll('.blog-details-wrapper img, .collapse-content img');
            images.forEach(img => {
                const divWrapper = document.createElement('div');
                divWrapper.classList.add('hover-img-container');
                const imgClone = document.createElement('img');
                imgClone.src = img.src;
                if (img.alt) imgClone.alt = img.alt;
                if (img.width) imgClone.width = img.width;
                if (img.height) imgClone.height = img.height;
                imgClone.classList.add('img-no-hover-effect');
                divWrapper.appendChild(imgClone);
                img.parentNode.replaceChild(divWrapper, img);
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

</html>
