<?php 
    function isAscendingArray($arr) {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] >= $arr[$i + 1]) {
                return "Không tăng dần";
            }
        }
        return "Tăng dần";
    }

    // Kiểm tra với một số mảng
    echo isAscendingArray([-1, -2]) . "\n";  // Không tăng dần
    echo isAscendingArray([-2, -1]) . "\n";  // Tăng dần
    echo isAscendingArray([3, 1, 2, 44]) . "\n";  // Không tăng dần
    echo isAscendingArray([0, 1, 1, 4]) . "\n";  // Không tăng dần
    echo isAscendingArray([-3, -1, 5, 34]) . "\n";  // Tăng dần
    echo isAscendingArray([-3, -1, 0, 0]) . "\n";  // Không tăng dần
    echo isAscendingArray([0, 0, 0, 0]) . "\n";  // Không tăng dần
?>