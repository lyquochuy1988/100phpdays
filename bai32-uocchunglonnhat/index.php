<?php 
    function timUCLN($x, $y) {
        while ($y !== 0) {
            $temp = $y;
            $y = $x % $y;
            $x = $temp;
        }

        return $x;
    }

    echo timUCLN(27, 18) . "\n";
    echo timUCLN(15, 30) . "\n";
    echo timUCLN(25, 10) . "\n";
?>