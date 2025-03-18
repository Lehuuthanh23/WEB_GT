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
        <section class="projects-one section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-start">
                            <div class="col-12 col-lg-6 ">
                                <div class="projects-one-item">
                                    <a href="portfolioDetails">
                                        <h2
                                            class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block stroke-mobile-position">
                                            structural design
                                        </h2>
                                    </a>
                                    <div>
                                        <div class="project-img-ontainer">
                                            <img class="home-one-portfolio-first-img"
                                                src="{{ asset('archite/img/projectsOne.jpg') }}" alt="project image">
                                            <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                <span class="position-relative z-1">View Project</span>
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </a>
                                        </div>
                                        <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Luxury Space
                                            Design</h6>

                                    </div>
                                </div>
                                <div class="projects-one-item mt-100">
                                    <a href="portfolioDetails">
                                        <h2
                                            class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block">
                                            structural design</h2>
                                    </a>
                                    <div class="projects-one-contents">
                                        <div class="project-img-ontainer">
                                            <img class="home-one-portfolio-fourth-img"
                                                src="{{ asset('archite/img/projectsFour.jpg') }}"
                                                alt="project image">
                                            <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                <span class="position-relative z-1">View Project</span>
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </a>
                                        </div>
                                        <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Luxury Space
                                            Design
                                        </h6>
                                    </div>
                                </div>
                                <div class="projects-one-item mt-100">
                                    <a href="portfolioDetails">
                                        <h2
                                            class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block">
                                            landscape</h2>
                                    </a>
                                    <div class="projects-one-contents">
                                        <div class="project-img-ontainer">
                                            <img class="home-one-portfolio-fifth-img"
                                                src="{{ asset('archite/img/homeThreeProjectOne.jpg') }}"
                                                alt="project image">
                                            <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                <span class="position-relative z-1">View Project</span>
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </a>
                                        </div>
                                        <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Modern
                                            Architecture Design
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <div class="mt-5 mt-lg-0">
                                    <div class="ml-100 projects-one-item project-item-margin">
                                        <a href="portfolioDetails">
                                            <h2
                                                class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block">
                                                Architecture</h2>
                                        </a>
                                        <div class="projects-one-contents">
                                            <div class="project-img-ontainer">
                                                <img class="home-one-portfolio-second-img"
                                                    src="{{ asset('archite/img/projectsTwo.jpg') }}"
                                                    alt="project image">
                                                <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Project</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Office
                                                Interior Design
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="project-item-left-padding mt-100 projects-one-item">
                                        <a href="portfolioDetails">
                                            <h2
                                                class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block project-text-stroke-utility">
                                                landscape</h2>
                                        </a>
                                        <div class="projects-contents">
                                            <div class="project-img-ontainer text-end">
                                                <img class="home-one-portfolio-third-img"
                                                    src="{{ asset('archite/img/projectsThree.jpg') }}"
                                                    alt="project image">
                                                <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Project</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Modern
                                                Architecture
                                                Design
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="ml-100 projects-one-item mt-100 project-item-margin">
                                        <a href="portfolioDetails">
                                            <h2
                                                class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block">
                                                Architecture</h2>
                                        </a>
                                        <div class="projects-one-contents">
                                            <div class="project-img-ontainer">
                                                <img class="home-one-portfolio-sixth-img"
                                                    src="{{ asset('archite/img/projectsSix.jpg') }}"
                                                    alt="project image">
                                                <a href="portfolioDetails" class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Project</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Office
                                                Interior Design
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-cta-btn text-center">
                            <a data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500"
                                data-aos-offset="100" href="portfolio" class="btn brand-btn text-uppercase">
                                <span class="z-1 position-relative">View
                                    Projects</span>
                            </a>
                        </div>
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
