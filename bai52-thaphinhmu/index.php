<?php 
    function printPyramid($height) {
        // Lặp để $in ra he$ight dòng 
        for ($i = 1; $i <= $height; $i++) {
            $row = '';

            // Lặp để $in ra space ở đầu dòng
            for ($j = 1; $j <= $height - $i; $j++) {
                $row .= ' ';
            }

            // Lặp để $in ra số ký tự : số ở 2 bên và space ở g$iữa
            for ($j = 1; $j <= (2 * $i - 1); $j++) {
                if ($j === 1 || $j === (2 * $i - 1)) {
                    $row .= $i;
                } else {
                    $row .= ' ';
                }
            }

            echo $row . "\n";
        }
    }

    // Test vớ$i he$ight = 3
    printPyramid(3);
?>