<?php 
    function uoclelonnhat($number) {
        $maxOddDivisior = 1;

        for ($i = 1; $i < $number; $i++) {
            if ($number % $i === 0) {
                $maxOddDivisior = $i;
            }
        }

        echo "Uoc le lon nhat cua {$number} la: " . $maxOddDivisior . "\n";
    }

    uoclelonnhat(3);
    uoclelonnhat(27);
    uoclelonnhat(30);
?>