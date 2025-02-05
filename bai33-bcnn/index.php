<?php 
    function ucln($a, $b) {
        while ($b !== 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return $a;
    }

    function bcnn($x, $y) {
        return ($x * $y) / ucln($x, $y);
    }

    $x = 25; $y = 10;
    echo "BCNN cua $x va $y la: " . bcnn($x, $y) . "\n";
?>