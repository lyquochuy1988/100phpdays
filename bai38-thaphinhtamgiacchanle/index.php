<?php 
    function printPyramid($height) {
        for ($i = 1; $i <= $height; $i++) {
            $line = $i . ($i % 2 === 0 ? str_repeat("=", $i) : str_repeat("+", $i));
            echo $line . "\n";
        }
    }

    printPyramid(3);
    printPyramid(4);
?>