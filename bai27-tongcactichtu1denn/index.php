<?php 
function factorialNumber($n) {
    $result = 0;
    $currentResult = 1;
    $terms = [];

    for ($i = 1; $i <= $n; $i++) {
        $currentResult *= $i; // 6

        $term = 1;
        for ($j = 2; $j <= $i; $j++) {
            $term .= "x{$j}";
        }

        $terms[] = $term;
        $result += $currentResult; // 9
    }

    $str =  implode(" + ", $terms);
    echo $str . " = " . $result . "\n";
}

factorialNumber(4);