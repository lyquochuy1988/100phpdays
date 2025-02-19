<?php 
    function printNumberPyramid($height) {
        for ($i = 1; $i <= $height; $i++) {
            $row = '';
            for ($j = 1; $j <= $i; $j++) {
                $row .= $j;
            }

            echo $row . "\n";
        }
    }

    printNumberPyramid(3);
    printNumberPyramid(4);
?>