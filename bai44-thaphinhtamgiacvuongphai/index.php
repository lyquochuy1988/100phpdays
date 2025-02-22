<?php 
    function printNumberPyramid($height) {
        for ($i = 1; $i <= $height; $i++) {
            $space = str_repeat(" ", $height - $i);
            $number = '';
            for ($j = $i; $j >= 1; $j--) {
                $number .= $j;
            }

            echo $space . $number . "\n";
        }
    }

    printNumberPyramid(3);
?>