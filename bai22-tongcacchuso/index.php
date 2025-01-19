<?php 
    function sumDigits($yourNumber) {
        // convert number to string
        $numberStr = (string)$yourNumber;
        $sum = 0;
        $sumExpression = "";

        for ($i = 0; $i < strlen($numberStr); $i++) {
            $sum += (int)($numberStr[$i]);
            $sumExpression .= $numberStr[$i] . ($i < (strlen($numberStr) - 1) ? " + " : "");
        }

        echo "{$sumExpression} = {$sum}\n";
    }

    sumDigits(1);
    sumDigits(12);
    sumDigits(123);
?>