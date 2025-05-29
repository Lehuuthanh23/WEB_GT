<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:57 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Tuyển dụng</title>
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
                            Tuyển dụng Tài năng <br>Kiến tạo Tương lai
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
                                    @foreach ($exports as $item)
                                        @if ($item->enabled == 1)
                                            <div class="blogs-archive-card" style="margin-bottom: 10px !important;">
                                                <div class="card-content">
                                                    <p class="published-date body-text fw-500 line-height-5">
                                                        {{ $item->published_at }}
                                                    </p>
                                                    <h5 class="card-title mt-10">
                                                        <a href="#"
                                                            class="blog-archive-title dark-text fw-700 line-height-3">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h5>
                                                    <div class="collapsible-section">
                                                        <div class="collapse-content"
                                                            id="collapse-{{ $item->id }}">
                                                            {!! $item->perex !!}
                                                        </div>
                                                        <a href="#" class="toggle-link"
                                                            data-bs-target="#collapse-{{ $item->id }}"
                                                            aria-expanded="false"
                                                            aria-controls="collapse-{{ $item->id }}">
                                                            Xem thêm
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    <!-- CSS -->
                                    <style>
                                        .blogs-archive-card {
                                            border: 1px solid #e0e0e0;
                                            border-radius: 8px;
                                            padding: 20px;
                                            margin-bottom: 70px;
                                            background-color: #fff;
                                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                                            transition: box-shadow 0.3s ease;
                                        }

                                        .blogs-archive-card:hover {
                                            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                                        }

                                        .card-content {
                                            display: flex;
                                            flex-direction: column;
                                            gap: 15px;
                                        }

                                        .published-date {
                                            color: #666;
                                            font-size: 14px;
                                            margin: 0;
                                        }

                                        .card-title {
                                            margin: 0;
                                        }

                                        .blog-archive-title {
                                            color: #212f3f;
                                            text-decoration: none;
                                            font-size: 20px;
                                            transition: color 0.3s ease;
                                        }

                                        .blog-archive-title:hover {
                                            color: #007bff;
                                        }

                                        .collapsible-section {
                                            margin-top: 10px;
                                        }

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

                                        .toggle-link {
                                            text-decoration: underline;
                                            color: #007bff;
                                            font-size: 14px;
                                            cursor: pointer;
                                            display: inline-block;
                                            margin-top: 10px;
                                        }

                                        .toggle-link:hover {
                                            color: #0056b3;
                                        }
                                    </style>

                                    <!-- JavaScript -->
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            document.querySelectorAll('.toggle-link').forEach(link => {
                                                const contentId = link.getAttribute('data-bs-target').substring(1);
                                                const content = document.getElementById(contentId);
                                                const initialHeight = '100px'; // Chiều cao ban đầu
                                                content.style.height = initialHeight; // Đảm bảo chiều cao ban đầu được áp dụng

                                                link.addEventListener('click', function(e) {
                                                    e.preventDefault();
                                                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                                                    const fullHeight = content.scrollHeight +
                                                        'px'; // Chiều cao thực tế của nội dung

                                                    if (isExpanded) {
                                                        // Thu gọn: Giảm chiều cao về initialHeight
                                                        content.style.height =
                                                            fullHeight; // Đặt full height trước để transition hoạt động
                                                        setTimeout(() => {
                                                            content.style.height = initialHeight;
                                                        }, 10); // Delay nhỏ để transition chạy
                                                        this.setAttribute('aria-expanded', 'false');
                                                        this.textContent = 'Xem thêm';
                                                    } else {
                                                        // Mở rộng: Tăng chiều cao lên fullHeight
                                                        content.style.height = fullHeight;
                                                        this.setAttribute('aria-expanded', 'true');
                                                        this.textContent = 'Thu gọn';
                                                    }
                                                });
                                            });
                                        });
                                    </script>
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
