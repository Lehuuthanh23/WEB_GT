<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Khám phá các video nổi bật về sản phẩm công nghệ tiên tiến của GT GLOBAL.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Video Nổi Bật - GT GLOBAL</title>

    <link rel="shortcut icon" href="{{ asset('technology/img/favicon.png') }}" type="image/x-icon" />

    <!-- CSS include -->
    <link rel="stylesheet" href="{{ asset('technology/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('technology/css/main.css') }}">

    <style>
        .video-section {
            padding: 80px 0;
            /* background: linear-gradient(180deg, #1a1a2e 0%, #0f0f1c 100%); */
        }

        .video-container {
            margin-bottom: 60px;
        }

        .video-container .row {
            align-items: center;
        }

        .video-card {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 15px;
            padding: 20px;
            transition: box-shadow 0.3s;
        }

        .video-card:hover {
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
        }

        .video-card video {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            object-fit: cover;
        }

        .video-info h3 {
            color: #fff;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .video-info p {
            color: #b0c4de;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .video-info .meta-info {
            color: #00ffff;
            font-size: 0.9rem;
            display: flex;
            gap: 20px;
        }

        .video-info .meta-info span {
            display: flex;
            align-items: center;
        }

        .video-info .meta-info span i {
            margin-right: 5px;
        }

        .section-title {
            color: #fff;
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 60px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 992px) {
            .video-card video {
                height: 300px;
            }

            .video-info h3 {
                font-size: 1.8rem;
            }

            .video-info p {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .video-container .row {
                flex-direction: column;
            }

            .video-card video {
                height: 250px;
            }

            .video-info {
                text-align: center;
                margin-top: 20px;
            }

            .section-title {
                font-size: 2.2rem;
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

    <!-- Header -->
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
                                <li><a class="scrollspy-btn" href="home-2#feature">Dự án</a></li>
                                <li><a class="scrollspy-btn" href="home-2#process">Cách hoạt động</a></li>
                                <li><a class="scrollspy-btn" href="blog">Tin tức</a></li>
                                <li><a href="contact">Liên hệ</a></li>
                                <li><a href="video-demo">Video Demo</a></li>

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

    <!-- Slide bar -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a class="tx-close" href="javascript:void(0);"></a>
        </div>
        <div class="sidebar-info">
            <div class="sidebar-logo mb-30">
                <a href="{{ url('home-2') }}">
                    <img src="{{ asset('technology/img/logo/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="sidebar-content mb-40">
                <p>Revolutionize Your Future: Harness the Power of Technology for Unparalleled Growth and Success!</p>
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
                <div class="sidebar-socials-wrap mt-30">
                    <a class="social-item" href="https://facebook.com/" target="_blank">Facebook</a>
                    <a class="social-item" href="https://www.behance.net/" target="_blank">Behance</a>
                    <a class="social-item" href="#" target="_blank">Telegram</a>
                    <a class="social-item" href="https://dribbble.com/" target="_blank">Dribbble</a>
                </div>
            </div>
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li><a class="scrollspy-btn" href="home-2">Trang chủ</a></li>
                    <li><a class="scrollspy-btn" href="home-2#feature">Dự án</a></li>
                    <li><a class="scrollspy-btn" href="home-2#process">Cách hoạt động</a></li>
                    <li><a class="scrollspy-btn" href="blog">Tin tức</a></li>
                    <li><a href="contact">Liên hệ</a></li>
                    <li><a href="video-demo">Video Demo</a></li>
                </ul>
            </nav>
    </aside>
    <div class="body-overlay"></div>

    <main>
        <!-- Breadcrumb -->
        <section class="breadcrumb pos-rel bg_img">
            <div class="container">
                <h2 class="breadcrumb__title">Video Nổi Bật</h2>
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

        <!-- Video Section -->
        <section class="video-section">
            <div class="container">
                <h2 class="section-title">Video Nổi Bật Về Sản Phẩm Công Nghệ</h2>
                <!-- Video 1 -->
                <div class="video-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="video-card">
                                <video autoplay muted loop playsinline
                                    poster="{{ asset('technology\img\process\projector.jpg') }}">
                                    <source src="{{ asset('technology/video/Kling1.mp4') }}" type="video/mp4">
                                    Trình duyệt của bạn không hỗ trợ video.
                                </video>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="video-info">
                                <h3>Giới Thiệu Sản Phẩm Công Nghệ Mới</h3>
                                <p>Khám phá dòng sản phẩm công nghệ tiên tiến của GT GLOBAL, được thiết kế để tối ưu hóa
                                    hiệu suất và mang lại trải nghiệm người dùng vượt trội. Sản phẩm tích hợp các công
                                    nghệ tiên tiến nhất, phù hợp cho cả doanh nghiệp khởi nghiệp và quy mô lớn.</p>
                                <div class="meta-info">
                                    <span><i class="far fa-calendar-alt"></i> 15/06/2025</span>
                                    {{-- <span><i class="far fa-eye"></i> 1.2K lượt xem</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="video-container">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-6 col-md-12">
                            <div class="video-card">
                                <video autoplay muted loop playsinline
                                    poster="{{ asset('technology\img\process\projector.jpg') }}">
                                    <source src="{{ asset('technology/video/Kling2.mp4') }}" type="video/mp4">
                                    Trình duyệt của bạn không hỗ trợ video.
                                </video>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="video-info">
                                <h3>Công nghệ trình chiếu hiện đại</h3>
                                <p>Khám phá dòng sản phẩm đột phá từ GT GLOBAL, được thiết kế tối ưu hóa hiệu suất, mang
                                    đến trải nghiệm người dùng đẳng cấp. Tích hợp công nghệ tiên tiến, giải pháp này đáp
                                    ứng linh hoạt nhu cầu của doanh nghiệp từ khởi nghiệp đến quy mô lớn, định hình
                                    tương lai công nghệ trình chiếu.</p>
                                <div class="meta-info">
                                    <span><i class="far fa-calendar-alt"></i> 10/06/2025</span>
                                    {{-- <span><i class="far fa-eye"></i> 850 lượt xem</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="video-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="video-card">
                                <video autoplay muted loop playsinline
                                    poster="{{ asset('technology\img\process\projector.jpg') }}">
                                    <source src="{{ asset('technology/video/video1.mp4') }}" type="video/mp4">
                                    Trình duyệt của bạn không hỗ trợ video.
                                </video>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="video-info">
                                <h3>Công Nghệ AI Trong Sản Phẩm</h3>
                                <p>Tìm hiểu cách GT GLOBAL tích hợp trí tuệ nhân tạo vào sản phẩm, mang lại hiệu suất
                                    vượt trội và khả năng tự động hóa thông minh, giúp doanh nghiệp tối ưu hóa quy trình
                                    và nâng cao giá trị.</p>
                                <div class="meta-info">
                                    <span><i class="far fa-calendar-alt"></i> 05/06/2025</span>
                                    {{-- <span><i class="far fa-eye"></i> 2.5K lượt xem</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
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
                        <h4>Tải ứng dụng TS Screen trên iOS và Google Play để quản lý dễ dàng!</h4>
                        <div class="app-download mt-20">
                            <div class="app-buttons">
                                <a href="https://apps.apple.com/vn/app/ts-screen/id6745683551?l=vi" target="_blank"
                                    class="app-btn">
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

    <!-- JS includes -->
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
