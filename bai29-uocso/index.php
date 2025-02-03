<?php 
 function findDivisor($number) {
    if ($number <= 0) {
        echo "Hay nhap 1 so nguyen duong";
        return;
    }

    $divisors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $divisors[] = $i;
        }
    }

    echo "Uoc so cua {$number} la: " . implode(" ", $divisors) . "\n";
}

findDivisor(1);
findDivisor(10);
findDivisor(24);