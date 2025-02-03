<?php 
    function checkDivisor($arrInt, $number) {
        foreach ($arrInt as $num) {
            if ($number % $num === 0) {
                echo "Ton tai\n";
                return;
            }
        }

        echo "Khong ton tai\n";
    }

    checkDivisor([14, 12, 3, 5, 6], 3);
    checkDivisor([14, 12, 3, 5, 6], 4);
    checkDivisor([14, 12, 3, 5, 6], 9);
?>