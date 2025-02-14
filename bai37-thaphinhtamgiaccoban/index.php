<?php 
    function printPyramid($height) {
        for ($i = 1; $i <= $height; $i++) {
            // console.log('+'.repeat(i));
            echo str_repeat("+", $i) . "\n";
        }
    }

    printPyramid(3);
    printPyramid(4);
?>