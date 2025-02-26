<?php 
    function printPyramid($height) {
        for ($i = 1; $i <= $height; $i++) {
            $spaces = str_repeat(" ", ($i - 1) * 2);
            echo $spaces . $i . "\n";
        }
    }

    printPyramid(2);
    printPyramid(3);
?>