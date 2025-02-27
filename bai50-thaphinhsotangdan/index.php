<?php 
    function printTower($height) {
        for ($i = 1; $i <= $height; $i++) {
            $row = "";
            for ($j = 0; $j < 3; $j++) {
                $row .= ($i + $j * 2) . " ";
            }

            echo $row . "\n";
        }
    }


    printTower(3);
?>