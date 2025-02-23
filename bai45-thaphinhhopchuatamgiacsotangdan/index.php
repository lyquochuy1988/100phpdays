<?php 
    function printPyramid($height) {
        for ($i = 1; $i <= $height; $i++) {
            $number = str_repeat($i, 2 * $i - 1);
            $padding = str_repeat("#", $height - $i);
            echo $padding . $number . $padding . "\n";
        }

    }

    printPyramid(4);
    printPyramid(5);
?>