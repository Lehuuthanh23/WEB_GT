document.addEventListener("DOMContentLoaded", function () {
    // Lấy tất cả các liên kết có class scrollspy-btn
    const scrollspyLinks = document.querySelectorAll(".scrollspy-btn");

    scrollspyLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            const href = this.getAttribute("href");

            // Nếu href bắt đầu bằng "#", đây là liên kết cuộn trang
            if (href.startsWith("#")) {
                event.preventDefault(); // Ngăn hành vi mặc định

                // Kiểm tra nếu đang ở trang home-2
                if (window.location.href.includes("home-2")) {
                    // Cuộn đến phần tử tương ứng trên trang home-2
                    const targetId = href.substring(1); // Loại bỏ dấu "#"
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: "smooth" });
                    }
                } else {
                    // Điều hướng đến home-2 với hash
                    window.location.href = "home-2" + href;
                }
            }
            // Nếu href không bắt đầu bằng "#", để trình duyệt xử lý bình thường (như blog, home-2)
        });
    });

    // Xử lý cuộn trang khi tải trang home-2 với hash
    if (window.location.href.includes("home-2") && window.location.hash) {
        const targetId = window.location.hash.substring(1); // Loại bỏ dấu "#"
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: "smooth" });
        }
    }
});

async function sendRequest() {
    console.log("Button clicked!");
    // Lấy dữ liệu từ form
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const content = document.getElementById("content").value;

    // Kiểm tra dữ liệu (tùy chọn)
    if (!name || !email || !phone || !content) {
        alert("Vui lòng điền đầy đủ thông tin!");
        return;
    }

    const url = `${window.location.origin}/api/append-row`;
    const data = {
        name,
        email,
        phone,
        content,
    };

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Cookie: "laravel_session=eyJpdiI6InF1K1V0OUVuWUJaTi85a215bjQwNEE9PSIsInZhbHVlIjoiNWtyZHRqejJGMkQ1eC9aOVdXODhlbjB0UDJjU0V1WWNuRE5UYW9udmovbHJ3Ujl5c0RWcFJtRkFkS2xsc2RmZW1kdkc3a2IrMkNhbVZuVkdURkFkckVmSjdkNllBRFQxcVR2blBxbnZHRTdWQkxGS1U5MHVSZHA3QUpmaDhsemsiLCJtYWMiOiI2NGVlM2NmYWM2NDU0OGJjYzljNGY3ZmYzODBlMWU5ZjM0NDUwYmVjOGY1NjZkYTc1OTlmYmEzZTUyYTk5MTVkIiwidGFnIjoiIn0%3D",
            },
            body: JSON.stringify(data),
        });

        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        const result = await response.json();
        console.log("Response:", result);
        alert("Cảm ơn bạn đã gửi thông tin liên hệ!");
    } catch (error) {
        console.error("Error:", error.message);
        alert("Có lỗi xảy ra: " + error.message);
    }
}

 document.getElementById("button_send").addEventListener("click", sendRequest);
