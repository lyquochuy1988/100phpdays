<?php 
    function printPyramid($height) {
        for ($i = 0; $i < $height; $i++) {
            // dòng giữa
            $middle = floor($height / 2);

            // Chữ "o" mỗi dòng
            $numO = $height - 2 * abs($middle - $i);

            // spaces bên trái : 2 - 1 - 0 - 1 - 2
            // height = spaces + numO + spaces => 2 * spaces + numO

            $spaces = ($height - $numO) / 2;

            echo str_repeat(" ", $spaces) . str_repeat("o", $numO) . "\n";
        }
    }

    printPyramid(5);
?>