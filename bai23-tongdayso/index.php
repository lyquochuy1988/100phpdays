<?php 
    function calculateSum($n) {
        if ($n <= 1) {
            echo "Vui long nhap so lon hon 1";
            return;
        }

        $sum = 0;
        $sequence = "";

        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
            $sequence .= $i . ($i < $n ? " + " : "");
        }

        echo "{$sequence} = {$sum}\n";
    }

    calculateSum(2);
    calculateSum(3);
?>