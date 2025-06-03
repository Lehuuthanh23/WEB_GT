<!doctype html>
<html lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Liên hệ</title>

    <link rel="shortcut icon" href="{{ asset('technology/img/favicon.png') }}" type="images/x-icon" />

    <!-- css include -->
    <link rel="stylesheet" href="{{ asset('technology/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/main.css') }}">

    <style>
        /* CSS cho Contact Info và Form */
        .contact-info__item {
            border: none;
        }

        .contact-info__item .icon {
            border: none;
        }

        .row input,
        .row textarea {
            background-color: rgba(255, 255, 255, 0.05);
            /* Nền tối nhẹ, hơi trong suốt */
            border: 1px solid #b0c4de;
            /* Viền xám nhạt */
            color: #ffffff;
            /* Màu chữ trắng */
            padding: 12px 15px;
            /* Padding cho dễ nhìn */
            border-radius: 5px;
            /* Bo góc nhẹ */
            width: 100%;
            /* font-family: 'Arial', sans-serif; */
            font-size: 14px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .row input:focus,
        .row textarea:focus {
            outline: none;
            border-color: #00ffff;
            /* Viền cyan nhẹ khi focus */
            box-shadow: 0 0 8px rgba(0, 255, 255, 0.5);
            /* Hiệu ứng neon khi focus */
        }

        /* Placeholder màu xám nhạt */
        .row input::placeholder,
        .row textarea::placeholder {
            color: #b0c4de;
            /* Màu placeholder sáng, dễ đọc */
            opacity: 1;
            /* Đảm bảo placeholder rõ trên mọi trình duyệt */
        }

        /* CSS cho nút Submit */
        .thm-btn--gradient {
            background: linear-gradient(90deg, #00ffff, #007bff);
            color: #fff;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.3s;
        }

        .thm-btn--gradient:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
        }

        /* Responsive cho form */
        @media (max-width: 768px) {

            .row input,
            .row textarea {
                font-size: 13px;
                /* Giảm font trên mobile */
                padding: 10px 12px;
            }
        }
    </style>
</head>

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
                                    style="width: auto; height: 40px;" alt=""></a>
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
            <!-- breadcrumb start -->
            <section class="breadcrumb pos-rel bg_img">
                <div class="container">
                    <h2 class="breadcrumb__title">Liên hệ</h2>
                </div>
                <div class="breadcrumb__shape">
                    <div class="shape shape--1">
                        <img src="{{ asset('technology/img/shape/brc_shape1.png') }}" alt="">
                    </div>
                    <div class="shape shape--2">
                        <img src="{{ asset('technology/img/shape/brc_shape2.png') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- contact start -->
            <section class="contact pos-rel pt-125" style="padding-top:0px">
                <div class="container">
                    <div class="contact-info">
                        <div class="row justify-content-md-center mt-none-30">
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="contact-info__item">
                                    <div class="icon">
                                        <img src="{{ asset('technology/img/icon/location.svg') }}" alt="">
                                    </div>
                                    <h3 style="color: white;">Địa chỉ</h3>
                                    <p>159 Đường CN11, Sơn Kỳ, <br> Tân Phú, Hồ Chí Minh, Việt Nam</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="contact-info__item">
                                    <div class="icon">
                                        <img src="{{ asset('technology/img/icon/call2.svg') }}" alt="">
                                    </div>
                                    <h3 style="color: white;">Liên hệ</h3>
                                    <p>0907 859 668</p>
                                    <p>-</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="contact-info__item">
                                    <div class="icon">
                                        <img src="{{ asset('technology/img/icon/email.svg') }}" alt="">
                                    </div>
                                    <h3 style="color: white;">Email</h3>
                                    <p>dongtrieuarc@gmail.com</p>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form mt-100">
                        <h2 class="title" style="color: white;">Liên hệ</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="name" placeholder="Tên">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" id="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="content" cols="30" rows="10" placeholder="Nội dung"></textarea>
                            </div>
                            <div class="contact-form__btn text-center">
                                <style>
                                    .thm-btn {
                                        position: relative;
                                        display: inline-flex;
                                        align-items: center;
                                        justify-content: center;
                                        padding: 10px 20px;
                                    }

                                    .spinner {
                                        margin-left: 8px;
                                    }

                                    .spinner svg {
                                        display: inline-block;
                                    }

                                </style>

                                <button id="button_send" type="button" class="thm-btn thm-btn--gradient">
                                    <span class="button-text">Gửi</span>
                                    <span class="spinner" style="display: none;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 4V2M12 22V20M20 12H22M2 12H4M18.364 5.636L19.778 4.222M4.222 19.778L5.636 18.364M18.364 18.364L19.778 19.778M4.222 4.222L5.636 5.636" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <animateTransform attributeName="transform" type="rotate" from="0 12 12" to="360 12 12" dur="1s" repeatCount="indefinite" />
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="contact__shape">
                    <div class="shape shape--1" data-parallax='{"y" : 50}'>
                        <img src="{{ asset('technology/img/shape/fs_01.png') }}" alt="">
                    </div>
                    <div class="shape shape--2" data-parallax='{"x" : 60}'>
                        <img src="{{ asset('technology/img/shape/fs_03.png') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- contact end -->
        </main>

        <footer class="site-footer footer-style-two pos-rel pt-85" data-background="assets/img/shape/fot_shape2.png">
            <div class="container">
                {{-- <div class="row">
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
                </div> --}}
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
                                        <img src="{{ asset('technology/img/icon/app-store.png') }}" alt="App Store"
                                            style="width: 50px; height: auto;">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=user.gtglobal.ts_screen&pcampaignid=web_share"
                                        target="_blank" class="app-btn">
                                        <img src="{{ asset('technology/img/icon/chplay.png') }}" alt="Google Play"
                                            style="width: 50px; height: auto;">
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
