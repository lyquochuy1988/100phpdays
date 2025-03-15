<?php 
    function soLonNhatTrongMang($arr) {
        $maxNumber = $arr[0];

        foreach ($arr as $number) {
            if ($number > $maxNumber) {
                $maxNumber = $number;
            }
        }

       echo $maxNumber . "\n";
    }

    soLonNhatTrongMang([2]); // 2
    soLonNhatTrongMang([4, 6 , 2]); // 6
    soLonNhatTrongMang([-1, 0 , 1]); // 1
    soLonNhatTrongMang([0, 0 , 0]); // 0
    soLonNhatTrongMang([19, 0 , 19]); // 19
?>