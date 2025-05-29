<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Giới thiệu</title>
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
                                                <a href="math">Dự toán chi phí</a>
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

                                <!-- Custom CSS for Offcanvas Menu -->
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
                                        color: #000000;
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
        <!-- start about -->
        <section id="homeOneAbout" class="about-one section-padding-top section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-one-top">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h2 class="h2 text-white line-height-3 appear-text">
                                        Biến đổi không gian, nâng cao chất lượng sống
                                    </h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="about-one-first-text-box">
                                        <p class="p body-text fw-500 line-height-5">
                                            Chào mừng bạn đến với Công ty TNHH TM & DV Toàn Cầu GT! Chúng tôi tự hào là
                                            đơn vị hàng đầu trong lĩnh vực thiết kế nội thất và xây dựng, với hơn 10 năm
                                            kinh nghiệm. Đội ngũ chuyên gia của chúng tôi cam kết mang đến những không
                                            gian sống và làm việc đẳng cấp, đáp ứng mọi nhu cầu của khách hàng.
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
                                            <img src="{{ asset('archite/img/aboutOne.jpg') }}"
                                                alt="hình ảnh giới thiệu" class="rounded-0">
                                        </div>
                                        <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                                            class="hover-img-container about-one-img-small position-absolute d-none d-lg-inline-block">
                                            <img src="{{ asset('archite/img/aboutOneSmall.jpg') }}"
                                                alt="hình ảnh giới thiệu nhỏ" class="rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div>
                                        <h3 class="h3 dark-text fw-700 about-one-subheading line-height-3">
                                            Tạo dựng không gian mơ ước của bạn
                                        </h3>
                                        <div class="about-one-second-text-box mt-85 ml-60">
                                            <div class="mb-60 about-second-text-box-first-item">
                                                <h5 class="h5 fw-700 dark-text line-height-3">
                                                    Câu chuyện của chúng tôi
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mt-10">
                                                    Thành lập với sứ mệnh mang đến những giải pháp thiết kế nội thất và
                                                    xây dựng hoàn hảo, Công ty TNHH TM & DV Toàn Cầu GT đã không ngừng
                                                    phát triển, phục vụ hàng loạt dự án từ văn phòng, nhà ở đến các công
                                                    trình lớn. Đam mê và sáng tạo là động lực để chúng tôi tạo ra những
                                                    không gian độc đáo, phù hợp với từng khách hàng.
                                                </p>
                                            </div>
                                            <div class="mb-0">
                                                <h5 class="h5 fw-700 dark-text line-height-3">
                                                    Mục tiêu của chúng tôi
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mt-10">
                                                    Chúng tôi hướng đến việc trở thành đơn vị hàng đầu trong ngành thiết
                                                    kế nội thất và xây dựng tại Việt Nam, với cam kết mang lại chất
                                                    lượng
                                                    cao, giá trị bền vững và sự hài lòng tuyệt đối cho khách hàng.
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
                                        Điểm nổi bật của chúng tôi trong thiết kế nội thất và xây dựng
                                    </h2>
                                    <p class="text-white fw-500 line-height-5 mt-40 position-relative pe-0 pe-lg-5">
                                        Với đội ngũ chuyên gia giàu kinh nghiệm, chúng tôi cung cấp các giải pháp thiết
                                        kế nội thất và xây dựng chuyên nghiệp, từ ý tưởng ban đầu đến hoàn thiện công
                                        trình, nhằm tạo ra những không gian sống và làm việc hoàn hảo.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="mt-5 mt-lg-0">
                                    <div class="position-relative">
                                        <img src="{{ asset('archite/img/featuresVideoBg.png') }}"
                                            class="img-no-hover-effect features-bg-img" alt="nền hình ảnh tính năng">
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
                                            Sáng tạo thiết kế
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Đội ngũ thiết kế của chúng tôi luôn tìm kiếm những ý tưởng mới mẻ để tạo ra
                                            không gian độc đáo.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="feature-one-box">
                                        <p class="brand-text fw-700 feature-one-number-top">02</p>
                                        <h5 class="h5 text-white fw-700 line-height-3">
                                            Quản lý dự án
                                        </h5>
                                        <p
                                            class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                            Chúng tôi đảm bảo mọi dự án được thực hiện đúng tiến độ và chất lượng cao.
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
                                            Tối ưu hóa không gian sống và làm việc với các giải pháp thông minh.
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
                                                    src="{{ asset('archite/img/quoteIcon.png') }}"
                                                    alt="biểu tượng trích dẫn">
                                            </div>
                                            <div class="col-12 col-lg-10">
                                                <div class="testimonial-item-content">
                                                    <h3 class="h3 fw-700 line-height-1 dark-text mb-50">
                                                        Việc lựa chọn một công ty thiết kế nội thất và xây dựng phù hợp
                                                        phụ thuộc vào kinh nghiệm và sự chuyên nghiệp của họ.
                                                    </h3>
                                                    <p
                                                        class="dark-text fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5 mb-1">
                                                        Từ Việt Nam
                                                    </p>
                                                    <h6 class="h6 fw-700 line-height-3 dark-text">
                                                        Nguyễn Văn A
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item testimonial-one-card">
                                        <div class="row">
                                            <div class="col-12 col-lg-2">
                                                <img class="testimonial-one-quote-icon"
                                                    src="{{ asset('archite/img/quoteIcon.png') }}"
                                                    alt="biểu tượng trích dẫn">
                                            </div>
                                            <div class="col-12 col-lg-10">
                                                <div class="testimonial-item-content">
                                                    <h3 class="h3 fw-700 line-height-1 dark-text mb-50">
                                                        Dịch vụ của công ty thật sự tuyệt vời, không gian nhà tôi trở
                                                        nên
                                                        hoàn hảo hơn bao giờ hết.
                                                    </h3>
                                                    <p
                                                        class="dark-text fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5 mb-1">
                                                        Từ Hà Nội
                                                    </p>
                                                    <h6 class="h6 fw-700 line-height-3 dark-text">
                                                        Trần Thị B
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
                                    alt="hình ảnh tại sao chọn chúng tôi">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="why-choose-two-right-col">
                            <p class="p dark-text fw-500 line-height-5 why-choose-subheading position-relative">
                                Tại sao chọn chúng tôi
                            </p>
                            <h2 class="h2 dark-text line-height-3 mb-50">
                                Chúng tôi mang đến dịch vụ thiết kế nội thất và xây dựng đỉnh cao
                            </h2>
                            <div class="why-choose-items-wrapper">
                                <div class="why-choose-item why-choose-item-first mb-35">
                                    <h5 class="h5 dark-text fw-700 line-height-3">
                                        <span class="brand-text"> 01 </span>Dịch vụ chất lượng cao
                                    </h5>
                                    <p class="p body-text fw-500 line-height-5">
                                        Công ty chúng tôi cam kết cung cấp các giải pháp thiết kế và xây dựng đạt tiêu
                                        chuẩn quốc tế.
                                    </p>
                                </div>
                                <div class="mt-55 why-choose-bottom">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="why-choose-item">
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    <span class="brand-text"> 02 </span>Đội ngũ chuyên nghiệp
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mb-35">
                                                    Đội ngũ chuyên gia của chúng tôi luôn sẵn sàng hỗ trợ bạn từ ý tưởng
                                                    đến hiện thực hóa.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="why-choose-item">
                                                <h5 class="h5 dark-text fw-700 line-height-3">
                                                    <span class="brand-text"> 03 </span>Giá cả hợp lý
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 mb-35">
                                                    Chúng tôi cung cấp các dịch vụ chất lượng với mức giá cạnh tranh.
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

        <!-- end team -->
        <!-- start clients -->

        <!-- end clients -->
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
                                <p class="text-white fw-500 line-height-4 mb-0" style="font-size: 15px;">
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
