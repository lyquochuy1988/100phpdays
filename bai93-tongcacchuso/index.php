<?php 
    function sumDigits($num) {
        while ($num >= 10) {
            $sum = 0;

            while ($num > 0) {
                $sum += $num % 10;
                $num = floor($num / 10);
            }

            $num = $sum;
        }

        echo $num . "\n";
    }

    // Test cases
    echo sumDigits(99992); // Output: 2
    echo sumDigits(39);    // Output: 3
    echo sumDigits(92);    // Output: 2

?>