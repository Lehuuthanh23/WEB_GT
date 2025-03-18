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
