<!doctype html>
<html lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            font-family: 'Arial', sans-serif;
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
            <section class="breadcrumb pos-rel bg_img" data-background="assets/img/bg/breadcrumb_bg.jpg">
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
            <section class="contact pos-rel pt-125">
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
                        <h2 class="title" style="color: white;">Liên hệ:</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Tên">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Số điện thoại">
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                            </div>
                            <div class="contact-form__btn text-center">
                                <button type="submit" class="thm-btn thm-btn--gradient">Gửi</button>
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
                <div class="row mt-none-30 pb-90">
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="footer__cta pl-45">
                            <span class="title">QUICK CONTACT</span>
                            <h4>Nếu bạn có thắc mắc, vui lòng sử dụng đường dây hỗ trợ 24 giờ của chúng tôi</h4>
                            <span class="cta-number"><span><img src="{{ asset('technology/img/icon/np_icon2.svg') }}"
                                        alt=""></span>0907 859 668</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="footer__cta text-lg-end">
                            <span class="title">FOLLOW US</span>
                            <ul class="footer__cta-social ul_li_right mb-60">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <ul class="footer__cta-link ul_li_right">
                                <li><a href="#!">PayPal</a></li>
                                <li><a href="#!">VISA</a></li>
                                <li><a href="#!">Master Card</a></li>
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
