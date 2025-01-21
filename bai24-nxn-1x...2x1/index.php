<?php 
    function factorial($n) {
        if ($n <= 1) {
            echo "Please enter your number > 1";
            return;
        }

        $result = 1;
        $sequence = "";

        for ($i = $n; $i >= 1; $i--) {
            $result *= $i;
            $sequence .= $i . ($i > 1 ? " x " : "");
        }

        echo "{$sequence} = {$result}\n";
    }

    factorial(2); // 2 x 1 = 2
    factorial(3); // 3 x 2 x 1 = 6
?>