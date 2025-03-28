<?php 
    function findMaxTwo($arr) {
        if (count($arr) < 2) {
            echo "Mang co it hon 2 phan tu";
            return;
        }

        $maxOne = $arr[0];
        $maxTwo = $arr[1];

        if ($maxTwo > $maxOne) {
            $temp = $maxTwo;
            $maxTwo = $maxOne;
            $maxOne = $temp;
        }

        for ($i = 2; $i < count($arr); $i++) {
            if ($arr[$i] > $maxOne) {
                $maxTwo = $maxOne;                    
                $maxOne = $arr[$i];
            } else if ($arr[$i] > $maxTwo) {
                $maxTwo = $arr[$i];
            }
        }

        echo "Max 1: {$maxOne} - Max 2: {$maxTwo}\n";
    }

    // Test
    findMaxTwo([1, 2, 3, 4, 4]); // Max 1: 4 - Max 2: 4
    findMaxTwo([1, 2, 6, 4, 9]); // Max 1: 9 - Max 2: 6
    findMaxTwo([2, 3, 4]);       // Max 1: 4 - Max 2: 3
?>