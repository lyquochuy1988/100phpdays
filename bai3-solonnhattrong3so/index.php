<?php 
    // C1
    // $maxNumber = max(1, 5, 19);
    // echo $maxNumber;

    // C2
    function findMax($arr) {
        if (empty($arr)) return null;

        $max = $arr[0];
        foreach ($arr as $value) {
            if ($max < $value) {
                $max = $value;
            }
        }

        return $max;
    }

    $numbers = [1, 5, 19];
    echo findMax($numbers);
?>