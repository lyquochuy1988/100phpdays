<?php 
    function findCommonDivisors($x , $y) {
        $result = [];

        for ($i = 1; $i <= $x; $i++) {
            if ($x % $i === 0 && $i % $y === 0) {
                $result[] = $i;
            }
        }

        return $result;
    }

    echo implode(" ", findCommonDivisors(18, 2)) . "\n";
    echo implode(" ", findCommonDivisors(30, 3)) . "\n";
?>