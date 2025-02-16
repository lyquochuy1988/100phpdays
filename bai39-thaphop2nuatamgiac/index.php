<?php 
    function printPyramid($height) {
        for ($i = 1; $i <= $height; $i++) {
            $equals = str_repeat("=", $height - $i);
            $pluses = str_repeat("+", $i);

            echo $equals . $pluses . "\n";
        }
    }

    // printPyramid(5);
    printPyramid(7);
?>