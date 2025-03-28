<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/portfolio by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:56 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Portfolio</title>
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
    <main>
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-35">
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
                                Our Expert Interior Design <br>Projects
                            </h2>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start projects -->
        <div class="filter-menu">
            <button class="filter-btn active" data-filter="all">Tất cả</button>
            @foreach ($formattedResults as $item)
                <button class="filter-btn" data-filter="{{ $item['name'] }}">{{ $item['name'] }}</button>
            @endforeach
        </div>

        <section class="projects-one section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-container">
                            <div class="portfolio-grid">
                                @foreach ($formattedResults as $index => $item)
                                    @foreach ($item['articles'] as $articleIndex => $article)
                                        @if ($article['enabled'] == 1)
                                            @php
                                                $totalIndex = $index * count($item['articles']) + $articleIndex;
                                                $isLeftColumn = $totalIndex % 2 == 0;
                                                $itemIndex = floor($totalIndex / 2);
                                                $isVertical = $itemIndex % 4 == 0 || $itemIndex % 4 == 3;
                                            @endphp
                                            <div
                                                class="portfolio-item {{ $isVertical ? 'vertical' : 'horizontal' }} show">
                                                <a href="portfolioDetails" class="portfolio-link">
                                                    <h2
                                                        class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke {{ $isVertical ? '' : 'project-text-stroke-utility' }}">
                                                        {{ $item['name'] }}
                                                    </h2>
                                                </a>
                                                <div class="portfolio-content">
                                                    <div
                                                        class="portfolio-image {{ $isVertical ? 'vertical-img' : 'horizontal-img' }}">
                                                        <img src="{{ $article['image'] }}" alt="project image">
                                                        <a href="portfolioDetails-{{ $article['id'] }}"
                                                            class="portfolio-btn">
                                                            <span style="color: white">View Project</span>
                                                            <i class="fa-solid fa-arrow-right-long"></i>
                                                        </a>
                                                    </div>
                                                    <h6 class="portfolio-subtitle">
                                                        Dự án - {{ $article['title'] }}
                                                    </h6>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                        {{-- <div class="portfolio-cta-btn text-center">
                            <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                <span class="position-relative z-1">View Project</span>
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end projects -->
        <!-- start work together -->
        <section class="work-together ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="d-flex align-items-center justify-content-center flex-column work-together-content-wrapper">
                            <p class="p text-white fw-500 line-height-3 mb-10">
                                Let’s Work Together
                            </p>
                            <h2 class="h2 fw-700 line-height-3 text-white text-center">Let's Create Your Dream Space
                                Together!</h2>
                            <a href="contact" class="btn brand-btn text-uppercase mt-50 border-0"><span
                                    class="z-1 position-relative">let's build</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const buttons = document.querySelectorAll(".filter-btn");
                const projects = document.querySelectorAll(".portfolio-item");

                function applyFilter(filter) {
                    projects.forEach((project, index) => {
                        const projectCategory = project.querySelector('.h2').textContent.trim().toLowerCase();
                        const filterValue = filter.trim().toLowerCase();

                        if (filterValue === "all" || projectCategory === filterValue) {
                            project.classList.add("show");
                            // Thêm stagger effect bằng cách delay từng item
                            setTimeout(() => {
                                project.style.opacity = "1";
                                project.style.transform = "translateY(0)";
                            }, index * 100); // Mỗi item cách nhau 100ms
                        } else {
                            project.classList.remove("show");
                            project.style.opacity = "0";
                            project.style.transform = "translateY(50px)";
                        }
                    });
                }

                // Thiết lập bộ lọc "All" mặc định khi trang tải
                const defaultButton = document.querySelector('.filter-btn.active');
                if (defaultButton) {
                    applyFilter(defaultButton.getAttribute("data-filter"));
                }

                // Xử lý sự kiện nhấp chuột
                buttons.forEach(button => {
                    button.addEventListener("click", function() {
                        const filter = this.getAttribute("data-filter");

                        buttons.forEach(btn => btn.classList.remove("active"));
                        this.classList.add("active");

                        // Áp dụng bộ lọc với hiệu ứng
                        applyFilter(filter);
                    });
                });
            });
        </script>

        <style>
            .row.align-items-start {
                display: flex;
                align-items: flex-start;
            }

            .col-12.col-lg-6 {
                width: 100%;
            }

            @media (min-width: 992px) {
                .col-12.col-lg-6 {
                    width: 50%;
                }
            }

            .pe-5 {
                padding-right: 3rem;
            }

            /* -----------------------
   TÁI SỬ DỤNG CÁC CLASS
------------------------ */
            .projects-one-item {
                margin-top: 100px;
                /* mt-100 */
                opacity: 0;
                /* Ẩn ban đầu để làm hiệu ứng fade-in */
                transform: translateY(20px);
                transition: all 0.5s ease;
            }

            .projects-one-item.show {
                opacity: 1;
                transform: translateY(0);
            }

            .project-item-left-padding {
                padding-left: 20px;
            }

            .mt-100 {
                margin-top: 100px;
            }

            .ml-100 {
                margin-left: 100px;
            }

            .project-item-margin {
                margin-left: 100px;
            }

            .h2.text-uppercase.fw-700.line-height-3.projects-text-stroke {
                font-size: 2rem;
                text-transform: uppercase;
                font-weight: 700;
                line-height: 1.3;
                display: inline-block;
                color: transparent;
                /* Hiệu ứng stroke, giữ nguyên nếu bạn có css stroke riêng */
                /* Thêm stroke thực tế nếu cần:
        -webkit-text-stroke: 1px #000;
    */
            }

            .project-text-stroke-utility {
                /* Giữ lại nếu có hiệu ứng stroke bổ sung */
            }

            .projects-one-contents {
                position: relative;
            }

            .project-img-ontainer {
                position: relative;
            }

            .project-img-ontainer.text-end {
                text-align: right;
            }

            .home-one-portfolio-fourth-img,
            .home-one-portfolio-third-img,
            .home-one-portfolio-second-img,
            .home-one-portfolio-sixth-img {
                width: 100%;
                height: auto;
            }

            .h6.dark-text.line-height-3.fw-700.mt-15 {
                font-size: 1rem;
                color: #333;
                line-height: 1.3;
                font-weight: 700;
                margin-top: 15px;
            }

            /* -----------------------------
   BỐ CỤC HIỆN ĐẠI CHO PORTFOLIO
------------------------------ */
            .portfolio-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 40px 20px;
            }

            .portfolio-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 90px;
            }

            /*
   Ở màn hình nhỏ (mobile - tablet),
   chuyển về 1 cột cho dễ nhìn.
*/
            @media (max-width: 768px) {
                .portfolio-grid {
                    grid-template-columns: 1fr;
                    gap: 40px;
                }

                /* Giảm margin-left ở mobile */
                .ml-100,
                .project-item-margin {
                    margin-left: 0 !important;
                }

                .project-item-left-padding {
                    padding-left: 10px;
                }

                .mt-100 {
                    margin-top: 50px;
                }
            }

            .portfolio-item {
                display: none;
                /* Ban đầu ẩn, chờ JS hiển thị bằng class .show */
                opacity: 1;
                transform: translateY(50px);
                /* Hiệu ứng ban đầu */
                transition: opacity 0.5s ease, transform 0.5s ease;
            }

            .portfolio-item.show {
                display: block;
                /* Khi JS gán .show thì item hiển thị */
                /* opacity và transform thay đổi qua transition */
            }

            .portfolio-title {
                font-size: 2rem;
                text-transform: uppercase;
                font-weight: 700;
                line-height: 1.3;
                display: inline-block;
                margin-bottom: 0.5em;
            }

            .shifted {
                padding-left: 20px;
            }

            .portfolio-content {
                position: relative;
            }

            /* Vùng chứa ảnh */
            .portfolio-image {
                position: relative;
                overflow: hidden;
                border-radius: 8px;
                /* Bo góc nhẹ */
            }

            .portfolio-image img {
                width: 100%;
                height: auto;
                display: block;
                transition: transform 0.3s ease;
                /* Zoom khi hover */
            }

            /* Zoom nhẹ khi hover */
            .portfolio-image:hover img {
                transform: scale(1.05);
            }

            /* Hình dọc / ngang (nếu có) */
            .vertical-img img,
            .horizontal-img img {
                height: auto;
            }

            /* Tiêu đề nhỏ */
            .portfolio-subtitle {
                font-size: 1rem;
                color: #333;
                line-height: 1.3;
                font-weight: 700;
                margin-top: 15px;
            }

            /* Nút View Project */
            .portfolio-btn {
                position: absolute;
                bottom: 20px;
                right: 20px;
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 10px 20px;
                background: linear-gradient(135deg, #d28901, #FFA500);
                color: #fff;
                text-transform: uppercase;
                font-size: 0.9rem;
                font-weight: 600;
                text-decoration: none;
                border-radius: 50px;
                box-shadow: 0 4px 15px rgba(255, 165, 0, 0.3);
                transition: all 0.3s ease;
                opacity: 0;
                transform: translateY(10px);
            }

            .portfolio-btn span {
                position: relative;
                z-index: 1;
            }

            .portfolio-btn .fa-arrow-right-long {
                font-size: 1rem;
                transition: transform 0.3s ease;
            }

            /* Hover nút */
            .portfolio-btn:hover {
                background: linear-gradient(135deg, #d28901, #FFA500);
                box-shadow: 0 6px 20px rgba(255, 165, 0, 0.5);
                color: #fff;
            }

            .fa-arrow-right-long {
                color: #fff;

            }

            .portfolio-btn:hover .fa-arrow-right-long {
                transform: translateX(5px);
                color: #fff;

            }

            /* Hiển thị nút khi hover ảnh */
            .portfolio-image:hover .portfolio-btn {
                opacity: 1;
                transform: translateY(0);
            }

            /* -----------------------
   MENU FILTER DỰ ÁN
------------------------ */
            /* -----------------------
   MENU FILTER DỰ ÁN
------------------------ */
            .filter-menu {
                display: flex;
                justify-content: center;
                gap: 15px;
                margin-top: 30px;
            }

            .filter-menu button {
                /* Màu nền cam & chữ trắng */
                background: none;
                /* Cam tươi */
                border: 2px solid #FFA500;
                color: #FFA500;

                /* Kích thước & bo góc */
                padding: 10px 20px;
                font-size: 16px;
                font-weight: 600;
                border-radius: 25px;

                /* Hiệu ứng */
                cursor: pointer;
                transition: all 0.3s ease;
                outline: none;
                /* Bỏ viền mặc định trên di động, nếu có */
            }

            /* Hover và trạng thái đang hoạt động (active) */
            .filter-menu button:hover,
            .filter-menu button.active {
                background: #FF8C00;
                /* Cam đậm hơn */
                border: 2px solid #FF8C00;
                color: #fff;
                box-shadow: 0 4px 12px rgba(255, 140, 0, 0.3);
                transform: translateY(-2px);
            }

            @media (max-width: 576px) {
                .filter-menu {
                    gap: 10px;
                    /* Giảm khoảng cách */
                    margin-top: 20px;
                    /* Giảm khoảng cách trên */
                }

                .filter-menu button {
                    padding: 8px 16px;
                    /* Giảm padding để nhỏ gọn hơn */
                    font-size: 14px;
                    /* Giảm kích cỡ chữ */
                    border-radius: 20px;
                    /* Bo ít hơn cho gọn mắt */
                }

                .h2.text-uppercase.fw-700.line-height-3.projects-text-stroke {
                    display: none;
                    /* Cho nó hiển thị dạng block thay vì inline-block */
                }
            }
        </style>

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


<!-- Mirrored from thememarch.com/demo/html/archite/portfolio by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:57 GMT -->

</html>
