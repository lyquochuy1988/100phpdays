<?php 
    function sumOfPowers($n) {
        $total = 0;
        for ($i = 1; $i <= $n; $i++) {
            $total += pow($n, 2*$i);
        }

        return $total;
    }

    // const n = 2;
    $n = 3;
    $result = sumOfPowers($n);

    echo "Tong cua day so: $result";
?>