<?php 
    function powerNumber($n) {
        if ($n <= 1) {
            echo "Vui lòng nhập một số tự nhiên lớn hơn 1.";
            return;
        }

        $sum = 0;
        $sequence = "";

        for ($i = 1; $i <= $n; $i++) {
            $sum += pow($i, 2);
            $sequence .= $i . "^" . "2" . ($i < $n ? " + " : "");
        }

        echo "{$sequence} = {$sum}\n";
    }

    powerNumber(2); // 1^2 + 2^2 = 5
    powerNumber(3); // 1^2 + 2^2 + 3^2 = 14
    powerNumber(4); // 1^2 + 2^2 + 3^2 + 4^2 = 30
?>