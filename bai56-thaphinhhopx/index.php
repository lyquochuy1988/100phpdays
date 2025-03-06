<?php 
    function printPyramid($height) {
        if ($height % 2 === 0) {
            echo "Height phải là số lẻ!";
            return;
        }

        for ($i = 0; $i < $height; $i++) {
            $row = "";
            for ($j = 0; $j < $height; $j++) {
                if ($i === 0 || $i === $height - 1) {
                    $row .= "#";
                } else if ($j === 0 || $j === $height -1 || $i === $j || $j === $height - 1 - $i) {
                    $row .= "#";
                } else {
                    $row .= " ";
                }
            }

            echo $row . "\n";
        }
    }

   printPyramid(5);
?>