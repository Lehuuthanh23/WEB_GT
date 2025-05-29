<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Dự toán chi phí</title>
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
    <main>
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
        </header>
        <!-- end header -->
        <!-- start inner page banner-->
        <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                    <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                        Dự toán chi phí
                    </h2>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start cost estimation section -->
        <section class="cost-estimation section-padding-bottom-xl section-padding-top-xl overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Form Dự toán chi phí -->
                    <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                        data-aos-offset="0">
                        <h4 class="fw-700 line-height-2 dark-text mb-20 text-center">DỰ TOÁN CHI PHÍ THI CÔNG</h4>
                        <form id="costEstimationForm" class="cost-estimation-form p-3"
                            style="background-color: #f8f9fa; border-radius: 10px;">
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Địa điểm</label>
                                <select class="form-select" name="location">
                                    <option selected>Chọn Tỉnh / Thành</option>
                                    <option value="1">Hồ Chí Minh</option>
                                    <option value="2">Hà Nội</option>
                                    <option value="3">Đà Nẵng</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Loại hình đầu tư</label>
                                <select class="form-select" name="investmentType">
                                    <option selected>Chọn loại hình đầu tư</option>
                                    <option value="1">Nhà ở</option>
                                    <option value="2">Văn phòng</option>
                                    <option value="3">Thương mại</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Hiện trạng</label>
                                <select class="form-select" name="condition">
                                    <option selected>Chọn hiện trạng</option>
                                    <option value="1">Đất trống</option>
                                    <option value="2">Nhà cũ cần cải tạo</option>
                                    <option value="3">Đang xây dựng</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Mức độ đầu tư</label>
                                <select class="form-select" name="investmentLevel">
                                    <option selected>Chọn Mức độ đầu tư</option>
                                    <option value="1">Cơ bản</option>
                                    <option value="2">Trung bình</option>
                                    <option value="3">Cao cấp</option>
                                </select>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Tổng diện tích</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="area">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">m²</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Tên chủ đầu tư</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="investorName">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Email</label>
                                <input type="email" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Số điện thoại</label>
                                <input type="tel" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="phone">
                            </div>
                            <button type="submit" class="btn brand-btn text-uppercase w-100"
                                style="background-color: #f5a623; border-color: #f5a623;">
                                <span class="position-relative z-1">NHẬN KẾT QUẢ DỰ TOÁN</span>
                            </button>
                            <div id="confirmationMessage" class="mt-3 text-center text-success"
                                style="display: none;">
                                Cảm ơn bạn! Kết quả dự toán sẽ được gửi qua email trong thời gian sớm nhất.
                            </div>
                        </form>
                    </div>
                    <!-- Form Thời gian hòa vốn -->
                    <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                        data-aos-offset="0">
                        <h4 class="fw-700 line-height-2 dark-text mb-20 text-center">THỜI GIAN HÒA VỐN</h4>
                        <form id="breakEvenForm" class="cost-estimation-form p-3"
                            style="background-color: #f8f9fa; border-radius: 10px;">
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Đầu tư xây dựng + nội thất</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="constructionAndInteriorCost">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Trang thiết bị công cụ dụng cụ</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="equipmentCost">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Chi phí vận hành phục vụ khách</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="operationCost">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Chi phí thuê mặt bằng trên
                                    tháng</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="rentalCostPerMonth">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Thời gian thuê mặt bằng (năm)</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="rentalDuration">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Tổng số nhân viên dự kiến (nhân viên
                                    phục vụ, bếp, bar, khác...)</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="totalStaff">
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Chi phí marketing hàng tháng</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="marketingCost">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Chi phí cơ định khác (điện, nước,
                                    internet...)</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="otherFixedCost">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Dự trù phát sinh khác trong
                                    tháng</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="miscellaneousCost">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-500 text-uppercase">Giá bán trung bình trên một
                                    khách</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="averagePricePerCustomer">
                                <span class="position-absolute end-0 top-50 translate-middle-y pe-3">VND</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Chi phí nguyệt vật liệu đầu vào trung
                                    bình trên một khách (30%-50% trên giá...)</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="materialCostPerCustomer">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-500 text-uppercase">Doanh thu trung bình một ngày</label>
                                <input type="text" class="form-control" placeholder="Nhập thông tin (*)"
                                    name="averageDailyRevenue">
                            </div>
                            <button type="submit" class="btn brand-btn text-uppercase w-100"
                                style="background-color: #f5a623; border-color: #f5a623;">
                                <span class="position-relative z-1">NHẬN KẾT QUẢ DỰ TOÁN</span>
                            </button>
                            <div id="confirmationMessage2" class="mt-3 text-center text-success"
                                style="display: none;">
                                Cảm ơn bạn! Kết quả dự toán sẽ được gửi qua email trong thời gian sớm nhất.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end cost estimation section -->
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
    <!-- Custom JS for Form Submission -->
    <script>
        $(document).ready(function() {
            $('#costEstimationForm').on('submit', function(e) {
                e.preventDefault();
                $('#confirmationMessage').show().delay(3000).fadeOut();
                // Thêm logic gửi dữ liệu nếu cần, ví dụ: $.post('/submit-form', $(this).serialize());
            });

            $('#breakEvenForm').on('submit', function(e) {
                e.preventDefault();
                $('#confirmationMessage2').show().delay(3000).fadeOut();
                // Thêm logic gửi dữ liệu nếu cần, ví dụ: $.post('/submit-break-even', $(this).serialize());
            });
        });
    </script>
</body>

</html>
