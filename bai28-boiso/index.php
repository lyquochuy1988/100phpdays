<?php 
    function printMultiples($number) {
        if ($number <= 0) {
            echo "Vui long nhap 1 so nguyen duong lon hon 0";
            return;
        }

        $result = [];
        for ($i = 0; $i * $number < 100; $i++) {
            $result[] = ($i * $number);
        }

        echo "Boi nho hon 100 cua {$number} la: " . implode(' ', $result) . "\n";
    }

    printMultiples(25);
    // printMultiples(29);
?>