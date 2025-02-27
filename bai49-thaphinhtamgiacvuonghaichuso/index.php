<?php 
    function printNumberPyramid($height) {
        $num = 1;
        for ($i = 1; $i <= $height; $i++) {
            $row = "";
            for ($j = 0; $j < $i; $j++) {
                $row .= str_pad($num, 2, "0", STR_PAD_LEFT) . " ";
                $num++;
            }

            echo trim($row). "\n";
        }
    }

    printNumberPyramid(3);
?>