<?php 
    function printNumberPyramid($height) {
        //  2; 2 <= 5; 3
        for ($i = 1; $i <= $height; $i++) {
            $spaces = str_repeat("#", $height - $i); // khoang trang ben trai
            $numbers1 = "";
            $numbers2 = "";

            // Tao day so tang dan tu 1 den i  ( 12345 )
            for ($j = 1; $j <= $i; $j++) {
                $numbers1 .= $j;
            }


            // Tao day so giam dan tu i - 1 den 1 ( 4321 )
            for ($j = $i - 1; $j >= 1; $j--) {
                $numbers2 .= $j;
            }

            echo $spaces . $numbers1 . $numbers2 . $spaces . "\n";
        }
    }

    printNumberPyramid(5);
?>