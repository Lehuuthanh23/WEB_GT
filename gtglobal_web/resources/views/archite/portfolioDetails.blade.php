<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/portfolioDetails by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:00 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Portfolio Details</title>
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
    <style>
        .portfolio-grid-image {
            border-radius: 10px;
            /* Bo góc hình ảnh */
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>

<body>
    <main class="portfolio-details-page">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-30">
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
                                        <ul class="submenu-container">
                                            <li><a class="submenu-link text-uppercase fw-500" href="index-2">Home
                                                    1</a></li>
                                            <li><a class="submenu-link text-uppercase fw-500" href="index2">Home
                                                    2</a></li>
                                            <li><a class="submenu-link text-uppercase fw-500" href="index3">Home
                                                    3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="about">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" href="services">Dịch vụ</a>
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
        <!-- start inner page banner-->
        <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                            <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                                Dự án - {{ $tag_name }} <br>{{ $data->title }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start portfolio details -->
        <section class="portfolio-details-contents section-padding-bottom section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-details-contents-wrapper">
                            <div>
                                <img src="{{ !empty($data->image_url) ? $data->image_url[0] : asset('archite/img/portfolioDetails.jpg') }}"
                                    class="img-fluid mb-100 portfolio-details-featured-image " style="width: 100%"
                                    alt="portfolio details image">
                            </div>
                            <div class="row gx-lg-5">
                                <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                    <h3 class="h3 dark-text fw-700 line-height-3">
                                        {{ $data->title }}
                                    </h3>
                                    <p class="p body-text fw-500 line-height-5 mt-50">
                                        @if ($data->description)
                                            {{ $data->description }}
                                        @else
                                            Chào mừng bạn đến với dự án của chúng tôi! Đây là một không gian được thiết
                                            kế để mang lại sự thoải mái, tiện nghi và hiện đại, phù hợp với mọi nhu cầu
                                            của bạn.
                                        @endif
                                    </p>
                                    {{-- <p class="p body-text fw-500 line-height-5 mt-35">
                                        Interior on the Internet. It uses a dictionary of over 200 Latin words, combined
                                        with a
                                        handful of model sentence structures, to generate Lorem Ipsum which looks
                                        reasonable.
                                        The generated Lorem Ipsum is therefore always free from repetition, injected
                                        humour, or
                                        non-characteristic words etc.
                                    </p> --}}
                                </div>
                                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                                    <div class="portfolio-details-contnts-right">
                                        <h2
                                            class="h2 text-uppercase fw-700 line-height-3 portfolio-text-stroke d-inline-block">
                                            {{ $tag_name }}</h2>
                                        <div class="mt-70">
                                            <div class="mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-6 col-sm-8">
                                                        <h6 class="h6 fw-400 body-text line-height-3">
                                                            Loại dự án:
                                                        </h6>
                                                    </div>
                                                    <div class="col-6 col-sm-4">
                                                        <h6 class="h6 fw-700 dark-text line-height-3">
                                                            {{ $tag_name }} </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-details-divider"></div>
                                            <div class="mt-4">
                                                <div class="row align-items-center">
                                                    <div class="col-6 col-sm-8">
                                                        <h6 class="h6 fw-400 body-text line-height-3">
                                                            Ngày đăng:
                                                        </h6>
                                                    </div>
                                                    <div class="col-6 col-sm-4">
                                                        <h6 class="h6 fw-700 dark-text line-height-3">
                                                            {{ \Carbon\Carbon::parse($data->published_at)->format('d/m/Y') }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @if (!empty($data->image_url))
                                    <div class="mt-100 mb-5">
                                        <!-- Thêm mb-5 để tạo khoảng cách dưới -->
                                        <div class="row gy-4 gy-sm-0">
                                            @foreach ($data->image_url as $image)
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="hover-img-container">
                                                        <img src="{{ $image }}"
                                                            class="img-fluid portfolio-grid-image"
                                                            alt="portfolio image">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- end portfolio details -->
        <!-- start navigation -->

        <!-- end navigation -->
        <!-- start work together -->
        <section class="work-together ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="d-flex align-items-center justify-content-center flex-column work-together-content-wrapper">
                            <p class="p text-white fw-500 line-height-3 mb-10">
                                Hợp tác ngay
                            </p>
                            <h2 class="h2 fw-700 line-height-3 text-white text-center">Hơp tác phát triển và xây dựng
                                cùng chúng tôi</h2>
                            <a href="contact" class="btn brand-btn text-uppercase mt-50 border-0"><span
                                    class="z-1 position-relative">Liên hệ</span></a>
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


<!-- Mirrored from thememarch.com/demo/html/archite/portfolioDetails by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:01 GMT -->

</html>
