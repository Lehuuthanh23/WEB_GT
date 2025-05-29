<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GT GLOBAL</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('technology/img/favicon.png') }}" type="images/x-icon" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Space Grotesk', sans-serif;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            min-height: 100vh;
        }

        .container-custom {
            display: flex;
            min-height: 100vh;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            flex-wrap: wrap;
            position: relative;
        }

        .panel {
            width: 45%;
            height: 80vh;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.5s ease;
            overflow: hidden;
            position: relative;
            background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.4);
            /* Lớp phủ tối ban đầu */
            background-blend-mode: darken;
        }

        #technology {
            background-image: url('https://imgs.search.brave.com/mHjrv_2mHxLUzaf7P79HSf1XCPM3LhQtZnxDLx5DkGY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJjYXZlLmNv/bS93cC93cDcwNjU1/NjYuanBn');
        }

        #furniture {
            background-image: url('https://imgs.search.brave.com/HsHMXb44FX_aK_o48hn-1G1-LZ0FGr1hEkZq8tFgxpM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXIuZm9yZnVu/LmNvbS9mZXRjaC85/My85MzdmN2I1OGMy/NjQ5OTJkOGIxNmI5/OGM0YzBiYTRmNi5q/cGVn');
        }

        /* Hiệu ứng hover cho desktop */
        @media (min-width: 769px) {
            .panel:hover {
                transform: scale(1.05);
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
                background-color: rgba(0, 0, 0, 0);
            }

            .panel:hover .content-overlay {
                transform: translateY(-10px);
            }
        }

        /* Hiệu ứng khi panel trong viewport trên mobile */
        .panel.active {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
            background-color: rgba(0, 0, 0, 0);
        }

        .panel.active .content-overlay {
            transform: translateY(-10px);
        }

        .panel-content {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            color: #e0e0e0;
            padding: 20px;
        }

        .content-overlay {
            padding: 20px;
            transition: transform 0.3s ease;
        }

        h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-bottom: 10px;
            text-shadow: 0 0 10px currentColor, 0 0 20px currentColor;
        }

        #technology h1 {
            color: #00ffff;
            /* Màu cyan cho Công Nghệ */
        }

        #furniture h1 {
            color: #FFD700;
            /* Màu vàng cho Nội Thất */
        }

        p {
            font-size: 1.2rem;
            color: #b0b0b0;
            margin-bottom: 15px;
        }

        .btn {
            background: linear-gradient(45deg, #00ffff, #ff00ff);
            color: #fff;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 255, 255, 0.4);
        }

        .neon {
            position: absolute;
            font-size: 6rem;
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #ff00ff;
            opacity: 0.1;
            z-index: -1;
        }

        #technology .neon {
            top: -40px;
            left: -40px;
        }

        #furniture .neon {
            bottom: -40px;
            right: -40px;
        }

        /* Logo Styles */
        .logo-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 10;
        }

        .logo-gt {
            font-family: 'Orbitron', sans-serif;
            font-size: 3.5rem;
            font-weight: 900;
            color: #FF00FF;
            /* Màu magenta neon nổi bật */
            text-transform: uppercase;
            letter-spacing: 4px;
            text-shadow: 0 0 10px #FF00FF, 0 0 20px #FF00FF, 0 0 30px #00FFFF;
            transition: transform 0.3s ease;
        }

        .logo-container:hover .logo-gt {
            transform: scale(1.1);
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .container-custom {
                flex-direction: column;
                min-height: auto;
                padding: 20px;
            }

            .panel {
                width: 100%;
                height: 60vh;
                margin: 20px 0;
            }

            h1 {
                font-size: 1.8rem;
            }

            p {
                font-size: 1rem;
                margin-bottom: 10px;
            }

            .btn {
                padding: 10px 25px;
                font-size: 1rem;
            }

            .neon {
                font-size: 4rem;
            }

            #technology .neon {
                top: -20px;
                left: -20px;
            }

            #furniture .neon {
                bottom: -20px;
                right: -20px;
            }

            .logo-container {
                position: relative;
                top: auto;
                left: auto;
                transform: none;
                margin: 20px 0;
            }

            .logo-gt {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-custom">
        <div class="panel left-panel" id="technology">

            <div class="panel-content">
                <div class="content-overlay">
                    <h1>Công Nghệ</h1>
                    <p>Khám phá công nghệ tiên tiến</p>
                </div>
                <a href="technology/home-2" class="btn">Chi tiết</a>
            </div>
        </div>

        <!-- Logo GT GLOBAL -->
        <div class="logo-container">
            <div class="logo-gt">GT GLOBAL</div>
        </div>

        <div class="panel right-panel" id="furniture">

            <div class="panel-content">
                <div class="content-overlay">
                    <h1>Nội Thất</h1>
                    <p>Khám phá thiết kế nội thất sáng tạo</p>
                </div>
                <a href="index" class="btn">Chi tiết</a>
            </div>
        </div>
    </div>

    <!-- JavaScript for scroll-based effect on mobile -->
    <script>
        // Chỉ chạy trên mobile (màn hình nhỏ hơn 768px)
        if (window.innerWidth <= 768) {
            const panels = document.querySelectorAll('.panel');

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                        } else {
                            entry.target.classList.remove('active');
                        }
                    });
                }, {
                    threshold: 0.5,
                    rootMargin: '0px'
                }
            );

            panels.forEach((panel) => {
                observer.observe(panel);
            });
        }
    </script>
</body>

</html>
