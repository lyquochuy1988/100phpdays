<?php 
    function printPyramid($height) {
        for ($i = 0; $i < $height; $i++) {
            $equals = str_repeat("=", $i);
            $pluses = str_repeat("+", $height - $i);

            echo $equals . $pluses . "\n";
        }
    }

    printPyramid(3);
    printPyramid(5);
?>