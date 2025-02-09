<?php 
    function evenDivisors($number) {
        if ($number < 1 || $number % 2 !== 0) {
            echo "Vui long nhap so nguyen duong chan lon hon 1";
            return;
        }

        $result = [];
        for ($i = 2; $i <= $number; $i += 2) {
            if ($number % $i === 0) {
                $result[] = $i;
            }
        }

        echo "Uoc so chan cua {$number} la: " . implode(" ", $result) . "\n";
    }

    evenDivisors(2);
    evenDivisors(24);
    evenDivisors(30);
?>