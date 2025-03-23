<?php
    // function gtln($arrInt) {
    //     $maxVal = max(array_map('abs', $arrInt)); // Lấy giá trị tuyệt đối rồi tìm max
    //     $updatedArr = array_fill(0, count($arrInt), $maxVal); // Tạo mảng mới có toàn giá trị max
    //     print_r($updatedArr);
    // }

    // gtln([2, -224, -16, 2]); // Kết quả: [224, 224, 224, 224]
?>

/**
C2
 <?php
    function gtln($arrInt) {
        $maxVal = max(array_map('abs', $arrInt)); // Lấy giá trị lớn nhất sau khi lấy giá trị tuyệt đối
        $updatedArr = array_map(function() use ($maxVal) {
            return $maxVal;
        }, $arrInt); // Duyệt qua từng phần tử và thay thế bằng maxVal

        print_r($updatedArr);
    }

    gtln([2, -224, -16, 2]);
    ?>


Trong PHP, use ($maxVal) được sử dụng trong một anonymous function (hàm ẩn danh - closure) 
để giúp nó truy cập biến bên ngoài phạm vi của nó.

Nếu không dùng use ($maxVal), PHP sẽ báo lỗi vì biến $maxVal không có sẵn bên trong hàm.


C3:

<?php
function gtln($arrInt) {
    global $maxVal; // Biến toàn cục (ít dùng vì dễ gây lỗi)
    $maxVal = max(array_map('abs', $arrInt));

    $updatedArr = array_map(function() {
        global $maxVal;
        return $maxVal;
    }, $arrInt);

    print_r($updatedArr);
}

gtln([2, -224, -16, 2]);
?>

C4:

<?php
function gtln($arrInt) {
    $maxVal = max(array_map('abs', $arrInt));

    $updatedArr = array_map(fn($x) => $maxVal, $arrInt); // Dùng arrow function

    print_r($updatedArr);
}

gtln([2, -224, -16, 2]);

✔ Dùng arrow function (fn($x) => $maxVal) trong PHP 7.4+ 
giúp đơn giản hóa code mà không cần use().
?>
*/