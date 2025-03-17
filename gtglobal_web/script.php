<?php

// // Cấu hình thư mục gốc chứa css, js, img
// $baseFolder = 'technology'; // 🔥 Đổi thành thư mục bạn muốn (vd: 'assets', 'public')

// // Các thư mục cần thay thế
// $folders = ['css', 'js', 'img'];

// // Thư mục chứa các file Blade cần sửa
// $targetDirectory = 'resources/views/technology'; // 🔥 Thay đổi thành thư mục bạn muốn

// // Kiểm tra xem thư mục có tồn tại không
// if (!is_dir($targetDirectory)) {
//     die("❌ Thư mục không tồn tại: $targetDirectory\n");
// }

// // Lấy danh sách tất cả file .blade.php trong thư mục
// $bladeFiles = glob($targetDirectory . '/*.blade.php');

// if (empty($bladeFiles)) {
//     die("❌ Không tìm thấy file Blade nào trong thư mục: $targetDirectory\n");
// }

// foreach ($bladeFiles as $file) {
//     // Đọc nội dung file Blade
//     $htmlContent = file_get_contents($file);

//     // Thay thế đường dẫn thành {{ asset() }}
//     foreach ($folders as $folder) {
//         $pattern = '/(href|src)=["\']\/?' . $folder . '\/([^"\']+)["\']/i';
//         $replacement = '$1="{{ asset(\'' . $baseFolder . '/' . $folder . '/$2\') }}"';
//         $htmlContent = preg_replace($pattern, $replacement, $htmlContent);
//     }

//     // Ghi nội dung mới vào chính file đó
//     file_put_contents($file, $htmlContent);

//     echo "✅ Đã sửa xong file: " . basename($file) . "\n";
// }

// echo "🎉 Tất cả file Blade trong '$targetDirectory' đã được cập nhật!\n";





        // Cấu hình thư mục gốc chứa css, js, img
$baseFolder = 'technology'; // 🔥 Đổi thành thư mục bạn muốn (vd: 'assets', 'public')

// Các thư mục cần thay thế
$folders = ['css', 'js', 'img'];

// Thư mục chứa các file Blade cần sửa
$targetDirectory = 'resources/views/technology'; // 🔥 Thay đổi thành thư mục bạn muốn

// Kiểm tra xem thư mục có tồn tại không
if (!is_dir($targetDirectory)) {
    die("❌ Thư mục không tồn tại: $targetDirectory\n");
}

// Lấy danh sách tất cả file .blade.php trong thư mục
$bladeFiles = glob($targetDirectory . '/*.blade.php');

if (empty($bladeFiles)) {
    die("❌ Không tìm thấy file Blade nào trong thư mục: $targetDirectory\n");
}

foreach ($bladeFiles as $file) {
    // Đọc nội dung file Blade
    $htmlContent = file_get_contents($file);

    // Thay thế đường dẫn thành {{ asset() }}
    foreach ($folders as $folder) {
        // Xử lý cả đường dẫn có 'assets/' và đường dẫn gốc
        $pattern = '/(href|src)=["\']\/?(assets\/)?' . $folder . '\/([^"\']+)["\']/i';
        $replacement = '$1="{{ asset(\'' . $baseFolder . '/' . $folder . '/$3\') }}"';
        $htmlContent = preg_replace($pattern, $replacement, $htmlContent);
    }

    // Ghi nội dung mới vào chính file đó
    file_put_contents($file, $htmlContent);

    echo "✅ Đã sửa xong file: " . basename($file) . "\n";
}

echo "🎉 Tất cả file Blade trong '$targetDirectory' đã được cập nhật!\n";
?>
