<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/blogDetails.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:59 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Blog Details</title>
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
                                        <h6 class="h6 fw-400 body-text line-height-3 bottom-gradient-divider">Publish
                                            Date:
                                            <span class="fw-700 dark-text"> {{ $currentArticle->published_at }}</span>
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
                                            Our Related News
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
                                                        </style>
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
                                    Công ty TNHH TM & DV TOÀN CẦU GT là một trong những công ty có thế mạnh và tiềm năng
                                    trong lĩnh vực thiết kế, thi công, sản xuất,… nội – ngoại thất với hơn 10 năm hoạt
                                    động trong lĩnh vực và triển khai các dự án khối công trình văn phòng, showroom, nhà
                                    hàng, biệt thự, chung cư…tới xây dựng hình ảnh cho các doanh nghiệp, tập đoàn đa
                                    quốc gia.

                                    Chúng tôi với phương châm mỗi khách hàng đều là những người thân, người bạn tri kỉ.
                                    Lấy sự hài lòng của khách hàng làm tôn chỉ, để từ đó cung cấp cho khách hàng những
                                    sản phẩm tối ưu nhất cả về chất lượng sản phẩm và dịch vụ.

                                    Với đội ngủ trẻ và nhiệt huyết, chuyên môn cao cùng với sự đầu tư, học hỏi không
                                    ngừng nghỉ về công nghệ, dây chuyền sản xuất, cơ sở hạ tầng cho cán bộ công nhân
                                    viên. Chúng tôi sẽ mang đến cho khách hàng những sản phẩm và dịch vụ tiệm cận gần
                                    nhất với nhu cầu và yêu cầu của khách hàng.
                                </p>
                                <h2 class="fw-700 text-white mt-30 footer-email">dongtrieuarc@gmail.com</h2>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="mt-5 mt-sm-0">
                                    <ul class="d-flex flex-column gap-4">
                                        <li><a class="fw-500 text-uppercase" href="index">Trang chủ</a></li>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.blog-details-wrapper img');

            images.forEach(img => {
                const divWrapper = document.createElement('div');
                divWrapper.classList.add('hover-img-container');
                const imgClone = document.createElement('img');
                imgClone.src = img.src;
                if (img.alt) imgClone.alt = img.alt;
                if (img.width) imgClone.width = img.width;
                if (img.height) imgClone.height = img.height;

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


<!-- Mirrored from thememarch.com/demo/html/archite/blogDetails.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:00 GMT -->

</html>
