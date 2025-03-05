<?php
function printPyramid($height) {
    if ($height % 2 === 0) {
        echo "Height phải là số lẻ" . PHP_EOL;
        return;
    }

    // Xác định dòng giữa
    $mid = floor($height / 2);
    
    // Lặp qua từng dòng
    for ($i = 0; $i < $height; $i++) {
        $row = array_fill(0, $height, " "); // Khởi tạo mảng khoảng trắng

        // Viền trên & dưới
        if ($i === 0 || $i === $height - 1) {
            $row = array_fill(0, $height, "#"); // Gán toàn bộ là "#"
        } 
        // Đường chéo hai bên
        else {
            $row[$mid - abs($mid - $i)] = "#"; // Bên trái
            $row[$mid + abs($mid - $i)] = "#"; // Bên phải
        }

        // Đảm bảo in đúng trên XAMPP (tránh lỗi hiển thị trên Windows CMD)
        echo implode("", $row) . PHP_EOL;
    }
}

// Chạy thử với chiều cao 5
printPyramid(5);
?>
