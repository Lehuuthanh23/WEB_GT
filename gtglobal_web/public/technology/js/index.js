document.addEventListener('DOMContentLoaded', function() {
    // Lấy tất cả các liên kết có class scrollspy-btn
    const scrollspyLinks = document.querySelectorAll('.scrollspy-btn');

    scrollspyLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            const href = this.getAttribute('href');

            // Nếu href bắt đầu bằng "#", đây là liên kết cuộn trang
            if (href.startsWith('#')) {
                event.preventDefault(); // Ngăn hành vi mặc định

                // Kiểm tra nếu đang ở trang home-2
                if (window.location.href.includes('home-2')) {
                    // Cuộn đến phần tử tương ứng trên trang home-2
                    const targetId = href.substring(1); // Loại bỏ dấu "#"
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth' });
                    }
                } else {
                    // Điều hướng đến home-2 với hash
                    window.location.href = 'home-2' + href;
                }
            }
            // Nếu href không bắt đầu bằng "#", để trình duyệt xử lý bình thường (như blog, home-2)
        });
    });

    // Xử lý cuộn trang khi tải trang home-2 với hash
    if (window.location.href.includes('home-2') && window.location.hash) {
        const targetId = window.location.hash.substring(1); // Loại bỏ dấu "#"
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    }
});
