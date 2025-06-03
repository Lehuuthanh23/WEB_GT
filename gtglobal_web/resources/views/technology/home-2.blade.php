<!doctype html>
<html lang="vi">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>GT GLOBAL - CÔNG NGHỆ</title>

    <link rel="shortcut icon" href="{{ asset('technology/img/favicon.png') }}" type="image/x-icon" />

    <!-- css include -->
    <link rel="stylesheet" href="{{ asset('technology/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/main.css') }}">
</head>

<style>
    /* CSS cho Popup */
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .popup-content {
        background: #1a1a1a;
        color: #ffffff;
        padding: 30px;
        border-radius: 15px;
        width: 90%;
        max-width: 500px;
        position: relative;
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
        border: 1px solid #00ffff;
        font-family: 'Arial', sans-serif;
        animation: popupFadeIn 0.3s ease;
    }

    @keyframes popupFadeIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .popup-content h3 {
        margin: 0 0 20px;
        font-size: 24px;
        color: #00ffff;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .popup-content ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .popup-content ul li {
        margin-bottom: 15px;
        font-size: 16px;
        line-height: 1.5;
        display: flex;
        align-items: center;
    }

    .popup-content ul li::before {
        content: '✔';
        color: #00ffff;
        margin-right: 10px;
    }

    .popup-close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        color: #00ffff;
        cursor: pointer;
        transition: color 0.3s;
    }

    .popup-close:hover {
        color: #ff3333;
    }

    /* CSS cho nút "Xem tất cả tính năng" */
    .thm-btn--gradient {
        background: linear-gradient(90deg, #00ffff, #007bff);
        color: #fff;
        padding: 10px 25px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        transition: transform 0.2s, box-shadow 0.3s;
    }

    .thm-btn--gradient:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
    }

    .crm-testimonial {
        padding-bottom: 80px;
        position: relative;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .crm-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .crm-title__heading {
        font-size: 2.5rem;
        font-weight: bold;
        color: #ffffff;
    }

    .contact-form {
        margin-top: 100px;
        background: rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 255, 255, 0.1);
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
    }

    .col-lg-6,
    .col-12 {
        padding: 0 15px;
        margin-bottom: 20px;
    }

    .row input,
    .row select {
        background-color: transparent;
        border: 1px solid #ccc;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        transition: border-color 0.3s, box-shadow 0.3s;
        color: white;
    }

    .row input:focus,
    .row select:focus {
        border-color: #00ffff;
        box-shadow: 0 0 5px rgba(0, 255, 255, 0.5);
        outline: none;
    }

    .contact-form__btn {
        text-align: center;
    }

    .thm-btn {
        padding: 10px 20px;
        background: linear-gradient(90deg, #ff7e5f, #feb47b);
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 25px;
    }

    .result {
        margin-top: 20px;
        text-align: center;
        color: #ffffff;
        font-size: 1rem;
        line-height: 1.6;
    }

    select option {
        background: #1a1a1a;
        color: white;
    }

    /* CSS cho Tabs */
    .tab-btn.active {
        background: linear-gradient(90deg, #00ffff, #007bff) !important;
        color: #fff !important;
        box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
    }

    .tab-btn:hover {
        background: linear-gradient(90deg, #00ffff, #007bff);
        color: #fff;
        box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
    }

    /* CSS cho Footer */
    .site-footer {
        /* background: #1a1a1a; */
        padding-top: 85px;
        position: relative;
    }

    .footer__cta {
        background: rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .footer__cta .title {
        font-size: 1.2rem;
        color: #00ffff;
        text-transform: uppercase;
        margin-bottom: 15px;
        display: block;
    }

    .footer__cta h4 {
        font-size: 1.3rem;
        color: #b0c4de;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .footer__cta .cta-number {
        font-size: 1.5rem;
        color: #ffffff;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footer__cta-social,
    .footer__cta-link {
        list-style: none;
        display: flex;
        gap: 15px;
        justify-content: flex-end;
    }

    .footer__cta-social li a,
    .footer__cta-link li a {
        color: #b0c4de;
        font-size: 1rem;
        transition: color 0.3s;
    }

    .footer__cta-social li a:hover,
    .footer__cta-link li a:hover {
        color: #00ffff;
    }

    .app-download {
        /* padding: 20px;
        background: rgba(255, 255, 255, 0.05); */
        border-radius: 10px;
        transition: all 0.3s ease;
        text-align: center;
    }

    .app-buttons {
        display: flex;
        justify-content: space-around;
        /* Giãn đều các nút */
        align-items: center;
        gap: 20px;
        /* Tăng khoảng cách giữa các nút */
        /* padding: 10px 0; */
        /* Thêm padding để bố cục thoáng hơn */
    }

    .app-btn {
        transition: transform 0.3s ease;
    }

    .app-btn:hover {
        transform: scale(1.05);
    }

    .crm-community {
        padding: 40px 0;
        /* background: linear-gradient(135deg, #1a1a1a, #2a2a3a);
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.2); */
    }

    .crm-community__social {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
    }

    .crm-community__social li a img {
        width: 40px;
        height: auto;
        transition: transform 0.3s ease;
    }

    .crm-community__social li a:hover img {
        transform: scale(1.1);
    }
</style>

<body class="home-dark">
    <div id="xb-loadding" class="xb-loader style-2">
        <div class="xb-dual-ring"></div>
    </div>

    <div class="xb-cursor tx-js-cursor style-2">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>

    <div class="progress-wrap style-2">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <div class="body_wrap">
        <!-- header start -->
        <header class="site-header header-style-two">
            <div class="header__main-wrap stricky">
                <div class="container">
                    <div class="header__main ul_li_between">
                        <div class="header__logo">
                            <a href="home-2"><img src="{{ asset('technology/img/logo/logo-2.png') }}"
                                    style="width: auto; height: 70px;" alt=""></a>
                        </div>
                        <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                            <nav class="main-menu collapse navbar-collapse">
                                <ul>
                                    <li><a class="scrollspy-btn" href="home-2">Trang chủ</a></li>
                                    <li><a class="scrollspy-btn" href="#feature">Dự án</a></li>
                                    <li><a class="scrollspy-btn" href="#process">Cách hoạt động</a></li>
                                    <li><a class="scrollspy-btn" href="blog">Tin tức</a></li>
                                    <li><a href="contact">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="d-lg-none">
                            <a class="header__bar hamburger_menu" href="javascript:void(0);">
                                <div class="header__bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- slide bar start -->
        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a class="tx-close" href="javascript:void(0);"></a>
            </div>
            <div class="sidebar-info">
                <div class="sidebar-logo mb-30">
                    <a href="index-2">
                        <img src="{{ asset('technology/img/logo/logo.svg') }}" alt="logo">
                    </a>
                </div>
                <div class="sidebar-content mb-40">
                    <p>Revolutionize Your Future: Harness the Power of Technology for Unparalleled Growth and Success!
                    </p>
                </div>
                <ul class="sidebar-menu list-unstyled">
                    <li><a href="#!">About</a></li>
                    <li><a href="#!">Services</a></li>
                    <li><a href="#!">Projects</a></li>
                    <li><a href="#!">Blog</a></li>
                    <li><a href="#!">Contact</a></li>
                </ul>
                <div class="ul_li mt-60">
                    <div class="ct-content-wrap d-flex">
                        <div class="ct-title col-auto">Call us:</div>
                        <div class="ct-content-wrap col">
                            <div class="ct-item-wrap row">
                                <div class="ct-item col-auto">
                                    <span class="item-content"><a href="tel:0907859668" class="tel">0907 859
                                            668</a></span>
                                </div>
                                <div class="ct-item col-auto">
                                    <span class="item-content"><a
                                            href="mailto:dongtrieuarc@gmail.com">dongtrieuarc@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-socials-wrap mt-30">
                    <a class="social-item" href="https://facebook.com/" target="_blank">Facebook</a>
                    <a class="social-item" href="https://www.behance.net/" target="_blank">Behance</a>
                    <a class="social-item" href="#" target="_blank">Telegram</a>
                    <a class="social-item" href="https://dribbble.com/" target="_blank">Dribbble</a>
                </div>
            </div>
            <nav class="side-mobile-menu">
                <div class="header-mobile-search">
                    <form role="search" method="get" action="#">
                        <input type="text" placeholder="Search Keywords">
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
                <ul id="mobile-menu-active">
                    <li><a class="scrollspy-btn" href="home-2">Trang chủ</a></li>
                    <li><a class="scrollspy-btn" href="#feature">Dự án</a></li>
                    <li><a class="scrollspy-btn" href="#process">Cách hoạt động</a></li>
                    <li><a href="blog">Tin tức</a></li>
                    <li><a href="contact">Liên hệ</a></li>
                </ul>
            </nav>
        </aside>
        <div class="body-overlay"></div>
        <!-- slide bar end -->

        <main>
            <!-- hero start -->
            <section class="hero hero-style-two pos-rel pb-55">
                <div class="hero-bg wow fadeInUp" data-wow-delay="500ms" data-wow-duration=".5s"
                    data-background="assets/img/bg/hero_bg.png"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero__content style-3 text-center">
                                <h1 class="title wow fadeInUp" data-wow-delay="0ms" data-wow-duration=".5s">Giải pháp
                                    Công nghệ cho mọi
                                    <span class="xb-title--typewriter">
                                        <span class="xb-item--text is-active">Khởi nghiệp Công nghệ</span>
                                        <span class="xb-item--text">Doanh nghiệp Công nghệ</span>
                                        <span class="xb-item--text">Đơn vị Công nghệ</span>
                                    </span>
                                </h1>
                                <div class="shape mb-30 wow fadeInUp" data-wow-delay="100ms" data-wow-duration=".5s">
                                    <img src="{{ asset('technology/img/shape/h_line_shape.png') }}" alt="">
                                </div>
                                <p class="mb-30 wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".5s">
                                    Chiếu sáng thương hiệu, khuấy động mọi ánh nhìn!</p>
                                <div class="btns wow fadeInUp" data-wow-delay="300ms" data-wow-duration=".5s">
                                    <a class="thm-btn thm-btn--gradient style-2" href="#!">Xem chi tiết sản
                                        phẩm</a>
                                </div>
                                <div class="hero-image mt-90 wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration=".5s">
                                    <video style="border-radius: 20px; width: 100%; height: auto;" autoplay loop muted
                                        playsinline>
                                        <source src="{{ asset('technology/video/video.mp4') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crm-hero__shape">
                    <div class="shape shape--1" data-parallax='{"y" : 80}'>
                        <img class="wow fadeInLeft" src="{{ asset('technology/img/shape/h_shape6.png') }}"
                            alt="">
                    </div>
                    <div class="shape shape--2">
                        <img src="{{ asset('technology/img/shape/h_shape7.png') }}" alt="">
                    </div>
                    <div class="shape shape--3" data-parallax='{"y" : 70}'>
                        <img class="wow fadeInRight" src="{{ asset('technology/img/shape/h_shape8.png') }}"
                            alt="">
                    </div>
                    <div class="shape shape--4">
                        <img src="{{ asset('technology/img/shape/h_shape9.png') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- hero end -->

            <!-- feature start -->
            <section id="feature" class="crm-feature pos-rel pt-70 pb-140">
                <div class="container">
                    <div class="crm-feature__title text-center mb-60">
                        Tính năng nổi bật của máy chiếu GT GLOBAL
                    </div>
                    <div class="row justify-content-center mt-none-20">
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{ asset('technology/img/icon/ft_01.svg') }}" alt="">
                                </div>
                                <h3>Điều khiển qua ứng dụng</h3>
                                <p>Dễ dàng thiết lập và quản lý nội dung quảng cáo mọi lúc, mọi nơi với ứng dụng thân
                                    thiện.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{ asset('technology/img/icon/ft_02.svg') }}" alt="">
                                </div>
                                <h3>Nhận lệnh thông minh</h3>
                                <p>Điều khiển ở app mobile để vận hành máy chiếu nhanh chóng, chính xác.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{ asset('technology/img/icon/ft_03.svg') }}" alt="">
                                </div>
                                <h3>Bảo mật thông tin</h3>
                                <p>Mã hóa dữ liệu cấp cao, đảm bảo an toàn tuyệt đối cho nội dung quảng cáo của bạn.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{ asset('technology/img/icon/ft_04.svg') }}" alt="">
                                </div>
                                <h3>Tối ưu chi phí</h3>
                                <p>Công nghệ tiết kiệm năng lượng, giảm tiêu thụ điện mà vẫn giữ độ sáng vượt trội.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{ asset('technology/img/icon/ft_05.svg') }}" alt="">
                                </div>
                                <h3>Hình ảnh sắc nét</h3>
                                <p>Độ phân giải cao, màu sắc sống động, thu hút mọi ánh nhìn trong mọi điều kiện ánh
                                    sáng.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{ asset('technology/img/icon/ft_06.svg') }}" alt="">
                                </div>
                                <h3>Kết nối đa dạng</h3>
                                <p>Hỗ trợ Wi-Fi, Bluetooth, HDMI, USB, dễ dàng tích hợp với mọi thiết bị.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{ asset('technology/img/icon/ft_07.svg') }}" alt="">
                                </div>
                                <h3>Quản lý nội dung thông minh</h3>
                                <p>Lên lịch trình quảng cáo tự động, theo dõi hiệu suất và tối ưu chiến dịch dễ dàng.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crm-feature__shape">
                    <div class="shape shape--1" data-parallax='{"y" : 70}'>
                        <img src="{{ asset('technology/img/shape/ft_shape1.png') }}" alt="">
                    </div>
                    <div class="shape shape--2" data-parallax='{"y" : 80}'>
                        <img src="{{ asset('technology/img/shape/ft_shape2.png') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- feature end -->

            <!-- process start -->
            <section id="process" class="process pos-rel pb-120">
                <div class="process__shape">
                    <div class="shape shape--1" data-parallax='{"x" : 70}'>
                        <img src="{{ asset('technology/img/shape/pr_shape1.png') }}" alt="">
                    </div>
                    <div class="shape shape--2">
                        <img src="{{ asset('technology/img/shape/pr_shape2.png') }}" alt="">
                    </div>
                    <div class="shape shape--3" data-parallax='{"y" : 80}'>
                        <img src="{{ asset('technology/img/shape/pr_shape3.png') }}" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="crm-title text-center mb-60">
                        <h2 class="crm-title__heading">Các ứng dụng thiết yếu để bảo vệ <br>dữ liệu của bạn</h2>
                    </div>
                    <div class="process__wrap ul_li_between">
                        <div class="process__title mt-30">
                            <h3 class="title">Hộp thư và tin nhắn được mã hóa toàn diện</h3>
                            <p>Dữ liệu của bạn được bảo vệ an toàn với công nghệ mã hóa từ đầu đến cuối. Tận hưởng sự
                                riêng tư và bảo mật tuyệt đối trong mọi giao tiếp.</p>
                        </div>
                        <div class="process__ss mt-30">
                            <img style="border-radius: 20px" src="{{ asset('technology/img/process/notifi.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="row g-38 mt-10">
                        <div class="col-lg-5 mt-30">
                            <div class="process__app-item">
                                <div class="text-center">
                                    <img src="{{ asset('technology/img/process/phone.png') }}" alt="">
                                </div>
                                <div class="process__title mt-40">
                                    <h3 class="title">Ứng dụng di động</h3>
                                    <p>Truy cập và quản lý dữ liệu mọi lúc, mọi nơi với ứng dụng di động tiện lợi, bảo
                                        mật và dễ sử dụng.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-30">
                            <div class="process__app-item style-2">
                                <div class="process__title mb-30">
                                    <h3 class="title">Tải lên, chia sẻ và xem trước mọi loại tệp</h3>
                                    <p>Dễ dàng tải lên, chia sẻ và xem trước các tệp tài liệu, hình ảnh hay video một
                                        cách nhanh chóng và an toàn.</p>
                                </div>
                                <div class="text-center">
                                    <img style="border-radius: 20px; margin-bottom: 20px"
                                        src="{{ asset('technology/img/process/manager.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Projector Section -->
                    <div class="row pt-150 pt-xs-90">
                        <div class="col-12">
                            <div class="process__area">
                                <div class="process__top ul_li_between mt-none-30">
                                    <div class="crm-title mt-30">
                                        <h2 class="crm-title__heading mb-15">Máy chiếu sắc nét, thông minh và đa năng
                                        </h2>
                                        <p>Khám phá trải nghiệm trình chiếu đỉnh cao với hình ảnh Full HD và hệ điều
                                            hành Android tích hợp.</p>
                                        <div class="mt-40">
                                            <a class="thm-btn thm-btn--gradient style-2" href="javascript:void(0)"
                                                onclick="showPopup()">Xem thông số máy chiếu</a>
                                        </div>
                                    </div>
                                    <div class="image mt-30">
                                        <img style="width: 30rem; border-radius:20px"
                                            src="{{ asset('technology/img/process/project.png') }}"
                                            alt="Máy chiếu Full HD">
                                    </div>
                                </div>
                                <div class="row g-26 mt-10">
                                    <div class="col-lg-6 mt-30">
                                        <div class="process__app-item style-3">
                                            <div class="process__title process__title--lg mb-30">
                                                <h3 class="title">Chiếu video quảng cáo sống động</h3>
                                                <p>Trình chiếu các video quảng cáo với độ phân giải Full HD, hình ảnh
                                                    sắc nét và màu sắc chân thực, thu hút mọi ánh nhìn.</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('technology/img/process/projector.jpg') }}"
                                                    alt="Video quảng cáo trên máy chiếu">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-30">
                                        <div class="process__app-item style-3">
                                            <div class="process__title process__title--lg mb-30">
                                                <h3 class="title">Tích hợp Android thông minh</h3>
                                                <p>Truy cập ứng dụng, phát trực tuyến nội dung và điều khiển dễ dàng nhờ
                                                    hệ điều hành Android tích hợp sẵn.</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('technology/img/process/android.png') }}"
                                                    alt="Máy chiếu tích hợp Android">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Film Section -->
                    <div class="row pt-150 pt-xs-90">
                        <div class="col-12">
                            <div class="process__area"
                                style="background: rgba(255, 255, 255, 0.05); border-radius: 15px; padding: 40px;">
                                <div class="process__top ul_li_between mt-none-10">
                                    <div class="crm-title mt-15">
                                        <h2 class="crm-title__heading mb-15"
                                            style="font-size: 2.5rem; font-weight: bold; color: #00ffff; text-transform: uppercase;">
                                            Tấm Phim Trình Chiếu Công Nghệ Nano
                                        </h2>
                                        <p style="font-size: 1.1rem; color: #b0c4de;">
                                            Khám phá đỉnh cao công nghệ trình chiếu với tấm phim Nano PET, độ truyền
                                            sáng tối ưu, hiệu ứng 3D sống động và ứng dụng linh hoạt trong mọi môi
                                            trường.
                                        </p>
                                        <div class="mt-40">
                                            <a class="thm-btn thm-btn--gradient style-2" href="javascript:void(0)"
                                                onclick="showFilmPopup()">Xem thông số tấm phim</a>
                                        </div>
                                    </div>
                                    <div class="image mt-30">
                                        <img style="width: 30rem; border-radius: 20px"
                                            src="{{ asset('technology/img/process/film.png') }}"
                                            alt="Tấm phim trình chiếu Nano">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Projector Popup -->
                    <div class="popup-overlay" id="featurePopup">
                        <div class="popup-content">
                            <span class="popup-close" onclick="hidePopup()">×</span>
                            <h3>Thông số kỹ thuật máy chiếu</h3>
                            <img style="margin-left:30px" src="{{ asset('technology/img/process/proj.png') }}"
                                alt="Máy chiếu TS - AS010" class="popup-image">
                            <ul>
                                <li>MODEL: TS - AS010 (SA466X+)</li>
                                <li>Công nghệ: 3LCD</li>
                                <li>Cường độ sáng: 4700 Ansi lumen (tương thích màn 50 – 150 inch)</li>
                                <li>Độ phân giải: XGA (1024 x 768 pixel) – Hỗ trợ Full HD (có thể điều chỉnh tỉ lệ 16:9)
                                </li>
                                <li>Độ phóng đại: 1.66x (60 - 150''@1.63 - 4.46m: 1.34~2.22:1)</li>
                                <li>Tuổi thọ bóng đèn: 10.000 giờ (Normal) / 20.000 giờ (ECO)</li>
                                <li>Góc độ: ~27 độ nếu đặt sát trần</li>
                            </ul>
                        </div>
                    </div>
                    <!-- New Film Popup -->
                    <div class="popup-overlay" id="filmPopup">
                        <div class="popup-content"
                            style="max-width: 360px; width: 90%; padding: 20px; background: linear-gradient(135deg, #1a1a1a, #2a2a3a); border: 2px solid #00ffff; box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);">
                            <span class="popup-close" onclick="hideFilmPopup()"
                                style="font-size: 20px; color: #00ffff; transition: color 0.3s;">×</span>
                            <h3
                                style="font-size: 18px; color: #00ffff; text-transform: uppercase; text-align: center; margin-bottom: 15px;">
                                Tấm Phim Nano Công Nghệ</h3>
                            <div class="tech-specs"
                                style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; font-size: 13px; color: #b0c4de; margin-bottom: 15px;">
                                <div><strong>Truyền sáng:</strong> 92-98%</div>
                                <div><strong>Góc nhìn:</strong> 150°</div>
                                <div><strong>Công nghệ:</strong> PET Nano</div>
                                <div><strong>Bảo hành:</strong> 1 năm</div>
                                <div><strong>Kích thước:</strong> 1524x30000mm</div>
                            </div>
                            <div class="film-tabs">
                                <div class="tab-buttons"
                                    style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <button class="tab-btn active" onclick="showTab(1)"
                                        style="flex: 1; padding: 8px; background: #2a2a3a; color: #00ffff; border: none; border-radius: 5px; margin: 0 5px; font-size: 12px; cursor: pointer; transition: all 0.3s;">FT01</button>
                                    <button class="tab-btn" onclick="showTab(2)"
                                        style="flex: 1; padding: 8px; background: #2a2a3a; color: #00ffff; border: none; border-radius: 5px; margin: 0 5px; font-size: 12px; cursor: pointer; transition: all 0.3s;">FT02</button>
                                    <button class="tab-btn" onclick="showTab(3)"
                                        style="flex: 1; padding: 8px; background: #2a2a3a; color: #00ffff; border: none; border-radius: 5px; margin: 0 5px; font-size: 12px; cursor: pointer; transition: all 0.3s;">FT03</button>
                                    <button class="tab-btn" onclick="showTab(4)"
                                        style="flex: 1; padding: 8px; background: #2a2a3a; color: #00ffff; border: none; border-radius: 5px; margin: 0 5px; font-size: 12px; cursor: pointer; transition: all 0.3s;">FT04</button>
                                </div>
                                <div class="tab-content" id="tab1" style="font-size: 13px; color: #b0c4de;">
                                    <h4 style="color: #ff3333; font-size: 14px; margin: 5px 0;">TS – FT01 – Trong suốt
                                    </h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li>95% xuyên sáng, hiệu ứng 3D</li>
                                        <li>Chiếu trước/sau, trong/ngoài trời</li>
                                        <li>Hình ảnh nổi, nhìn xuyên rõ</li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="tab2"
                                    style="display: none; font-size: 13px; color: #b0c4de;">
                                    <h4 style="color: #ff3333; font-size: 14px; margin: 5px 0;">TS – FT02 – Trắng mờ
                                    </h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li>Giữ sáng tối ưu, cản sáng hoàn toàn</li>
                                        <li>Chiếu trước/sau, trong/ngoài trời</li>
                                        <li>Hình ảnh sáng rõ</li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="tab3"
                                    style="display: none; font-size: 13px; color: #b0c4de;">
                                    <h4 style="color: #ff3333; font-size: 14px; margin: 5px 0;">TS – FT03 – Xám</h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li>Hiển thị tốt mọi ánh sáng</li>
                                        <li>Chiếu sau, trong/ngoài trời</li>
                                        <li>Linh hoạt sáng mạnh/yếu</li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="tab4"
                                    style="display: none; font-size: 13px; color: #b0c4de;">
                                    <h4 style="color: #ff3333; font-size: 14px; margin: 5px 0;">TS – FT04 – Đen</h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li>Tăng tương phản, cản sáng</li>
                                        <li>Chiếu sau, trong/ngoài trời</li>
                                        <li>Tối ưu ánh sáng mạnh</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- JavaScript cho Popup và Tabs -->
                <script>
                    function showPopup() {
                        document.getElementById('featurePopup').style.display = 'flex';
                    }

                    function hidePopup() {
                        document.getElementById('featurePopup').style.display = 'none';
                    }

                    function showFilmPopup() {
                        document.getElementById('filmPopup').style.display = 'flex';
                    }

                    function hideFilmPopup() {
                        document.getElementById('filmPopup').style.display = 'none';
                    }

                    function showTab(tabNumber) {
                        document.querySelectorAll('.tab-content').forEach(tab => tab.style.display = 'none');
                        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                        document.getElementById('tab' + tabNumber).style.display = 'block';
                        document.querySelector(`.tab-btn[onclick="showTab(${tabNumber})"]`).classList.add('active');
                    }
                </script>
            </section>
            <!-- process end -->

            <!-- testimonial start -->
            <section class="crm-testimonial pos-rel pb-80">
                <div class="container">
                    <div class="crm-title text-center mb-60">
                        <h2 class="crm-title__heading">Ước tính giá tiền màn hình</h2>
                    </div>
                    <div class="contact-form mt-60 mx-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="diagonalInput" class="block text-sm font-medium text-gray-700 mb-2">Nhập
                                    kích thước đường chéo (inch):</label>
                                <input type="number" id="diagonalInput" placeholder="Nhập giá trị (inch)"
                                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="color: white; background-color: transparent;">
                            </div>
                            <div class="col-lg-6">
                                <label for="ratioPrice" class="block text-sm font-medium text-gray-700 mb-2">Chọn tỷ
                                    lệ:</label>
                                <select id="ratioPrice"
                                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="color: white; background-color: transparent;">
                                    <option value="16:9" style="color: black;">16:9</option>
                                    <option value="4:3" style="color: black;">4:3</option>
                                </select>
                            </div>
                            <div class="col-12 contact-form__btn text-center mt-3">
                                <button type="button" class="thm-btn thm-btn--gradient"
                                    onclick="calculatePrice()">Tính giá tiền</button>
                            </div>
                        </div>
                        <div class="result mt-6" id="priceResult"></div>
                    </div>
                    <div class="crm-title text-center mb-60">
                        <h2 class="crm-title__heading">Tính toán tỉ lệ màn hình</h2>
                    </div>
                    <div class="contact-form mt-60 mx-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="inputType" class="block text-sm font-medium text-gray-700 mb-2">Chọn loại
                                    đầu vào:</label>
                                <select id="inputType"
                                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="color: white; background-color: transparent;">
                                    <option value="Width" style="color: black;">Chiều ngang (cm)</option>
                                    <option value="Height" style="color: black;">Chiều cao (cm)</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="inputValue" class="block text-sm font-medium text-gray-700 mb-2">Nhập giá
                                    trị (cm):</label>
                                <input type="number" id="inputValue" placeholder="Nhập giá trị"
                                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="color: white; background-color: transparent;">
                            </div>
                            <div class="col-lg-6">
                                <label for="ratio" class="block text-sm font-medium text-gray-700 mb-2">Chọn tỷ
                                    lệ:</label>
                                <select id="ratio"
                                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="color: white; background-color: transparent;">
                                    <option value="16:9" style="color: black;">16:9</option>
                                    <option value="4:3" style="color: black;">4:3</option>
                                </select>
                            </div>
                            <div class="col-12 contact-form__btn text-center mt-3">
                                <button type="button" class="thm-btn thm-btn--gradient"
                                    onclick="calculateSize()">Tính toán</button>
                            </div>
                        </div>
                        <div class="result mt-6" id="result"></div>
                    </div>
                </div>
            </section>
            <!-- testimonial end -->

            <!-- footer start -->
            <footer class="site-footer footer-style-two pos-rel pt-85"
                data-background="assets/img/shape/fot_shape2.png">
                <div class="container">
                    <div class="row">
                        <div class="crm-community text-center">
                            <ul class="crm-community__social ul_li_center mb-35">
                                <li><a href="#!"><img src="{{ asset('technology/img/icon/discord.png') }}"
                                            alt=""></a></li>
                                <li><a href="#!"><img src="{{ asset('technology/img/icon/whatsapp.png') }}"
                                            alt=""></a></li>
                                <li><a href="#!"><img src="{{ asset('technology/img/icon/telegram.png') }}"
                                            alt=""></a></li>
                            </ul>
                            <div class="crm-title text-center mb-40">
                                <h2 class="crm-title__heading">Liên hệ với chúng tôi</h2>
                            </div>
                            <a class="thm-btn thm-btn--gradient style-2" href="contact">Liên hệ ngay!</a>
                        </div>
                    </div>
                    <div class="row mt-none-30 pb-90">
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="footer__cta">
                                <span class="title">VỀ CHÚNG TÔI</span>
                                <h4>GT GLOBAL cung cấp giải pháp công nghệ tiên tiến cho mọi doanh nghiệp, từ khởi
                                    nghiệp đến quy mô lớn.</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="footer__cta">
                                <span class="title">LIÊN HỆ NHANH</span>
                                <h4>Nếu bạn có thắc mắc, vui lòng sử dụng đường dây hỗ trợ 24/7 của chúng tôi</h4>
                                <div class="contact-btn text-center mt-20">
                                    <a class="thm-btn thm-btn--gradient style-2" href="contact">Liên hệ ngay!</a>
                                </div>
                                {{-- <span class="cta-number"><span><img
                    src="{{ asset('technology/img/icon/email_icon.svg') }}"
                    alt=""></span><a
                href="mailto:dongtrieuarc@gmail.com">dongtrieuarc@gmail.com</a></span> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="footer__cta">
                                <span class="title">TẢI ỨNG DỤNG</span>
                                <h4>Tải ứng dụng GT GLOBAL trên iOS và Google Play để quản lý dễ dàng!</h4>
                                <div class="app-download mt-20">
                                    <div class="app-buttons">
                                        <a href="https://apps.apple.com/vn/app/ts-screen/id6745683551?l=vi"
                                            target="_blank" class="app-btn">
                                            <img src="{{ asset('technology/img/icon/app-store.png') }}"
                                                alt="App Store" style="width: 50px; height: auto;">
                                        </a>
                                        <a href="https://play.google.com/store/apps/details?id=user.gtglobal.ts_screen&pcampaignid=web_share"
                                            target="_blank" class="app-btn">
                                            <img src="{{ asset('technology/img/icon/chplay.png') }}"
                                                alt="Google Play" style="width: 50px; height: auto;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .row.mt-none-30 {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: space-between;
                            align-items: stretch;
                            /* Đảm bảo các cột có chiều cao bằng nhau */
                        }

                        .col-lg-4.col-md-6.mt-30 {
                            display: flex;
                            flex-direction: column;
                            justify-content: flex-start;
                            /* Căn nội dung từ trên xuống */
                            flex: 1;
                            /* Các cột chiếm không gian đều nhau */
                            min-width: 300px;
                            /* Đảm bảo cột không quá hẹp trên màn hình nhỏ */
                        }

                        .footer__cta {
                            background: rgba(255, 255, 255, 0.05);
                            padding: 30px;
                            border-radius: 10px;
                            box-shadow: 0 0 15px rgba(0, 255, 255, 0.1);
                            height: 100%;
                            /* Đảm bảo chiều cao cột bằng nhau */
                            display: flex;
                            flex-direction: column;
                            justify-content: space-between;
                            /* Căn nội dung đều trong cột */
                            text-align: center;
                            /* Căn giữa nội dung */
                        }

                        .footer__cta .title {
                            font-size: 1.2rem;
                            color: #00ffff;
                            text-transform: uppercase;
                            margin-bottom: 15px;
                            display: block;
                        }

                        .footer__cta h4 {
                            font-size: 1.3rem;
                            color: #b0c4de;
                            margin-bottom: 20px;
                            line-height: 1.5;
                            flex-grow: 1;
                            /* Đảm bảo h4 chiếm không gian đồng đều */
                        }

                        .contact-btn {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            margin-top: 20px;
                        }

                        .thm-btn--gradient {
                            background: linear-gradient(90deg, #00ffff, #007bff);
                            color: #fff;
                            padding: 10px 25px;
                            border-radius: 25px;
                            text-decoration: none;
                            font-weight: bold;
                            transition: transform 0.2s, box-shadow 0.3s;
                        }

                        .thm-btn--gradient:hover {
                            transform: scale(1.05);
                            box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
                        }
                    </style>
                    <div class="footer__copyright">
                        <div class="container">
                            <div class="ul_li_between mt-none-10">
                                <div class="footer__copyright-text mt-10">
                                    © 2025 GT GLOBAL - Công nghệ tiên phong. Mọi quyền được bảo lưu.
                                </div>
                                <ul class="footer__social ul_li mt-10">
                                    <li><a href="#!"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crm-footer__shape">
                    <div class="shape shape--1" data-parallax='{"y" : 70}'>
                        <img src="{{ asset('technology/img/shape/fot_shape1.png') }}" alt="">
                    </div>
                    <div class="shape shape--2" data-parallax='{"y" : 80}'>
                        <img src="{{ asset('technology/img/shape/fot_shape3.png') }}" alt="">
                    </div>
                </div>
            </footer>
            <!-- footer end -->
    </div>

    <!-- jquery include -->
    <script src="{{ asset('technology/js/index.js') }}"></script>
    <script src="{{ asset('technology/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('technology/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('technology/js/swiper.min.js') }}"></script>
    <script src="{{ asset('technology/js/wow.min.js') }}"></script>
    <script src="{{ asset('technology/js/appear.js') }}"></script>
    <script src="{{ asset('technology/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('technology/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('technology/js/cursor.js') }}"></script>
    <script src="{{ asset('technology/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('technology/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('technology/js/easing.min.js') }}"></script>
    <script src="{{ asset('technology/js/scrollspy.js') }}"></script>
    <script src="{{ asset('technology/js/main.js') }}"></script>
</body>

</html>
