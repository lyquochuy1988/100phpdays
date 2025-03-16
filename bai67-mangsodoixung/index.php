<?php 
    function isSymmetricArray($arr) {
        $length = count($arr);
        for ($i = 0; $i < floor($length / 2); $i++) {
            if ($arr[$i] !== $arr[$length - $i - 1]) {
                return "Không đối xứng";
            }
        }

        return "Đối xứng";
    }

    // Test
    echo isSymmetricArray([0, 1, 2, 12, 0]) . "\n"; // Không đối xứng
    echo isSymmetricArray([0, 1, 2, 1, 0]) . "\n"; // Đối xứng
    echo isSymmetricArray([1, 2, 7]) . "\n"; // Không đối xứng
    echo isSymmetricArray([2]) . "\n"; // Đối xứng
?>