<?php 
    function printTower($height) {
        for ($i = 0; $i < $height; $i++) {
            $row = '';
            for ($j = ($i+ 1); $j <= $height; $j++) {
                $row .= $j;
            }

            echo $row . "\n";
        }
    }

    printTower(3);
?>