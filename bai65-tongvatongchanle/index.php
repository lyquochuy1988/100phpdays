<?php 
    function tinhTongChanLe($arrInt) {
        $sumEven = 0;
        $sumOdd = 0;
        $sumAll = 0;

        foreach ($arrInt as $number) {
            if ($number % 2 === 0) {
                $sumEven += $number;
            } else {
                $sumOdd += $number;
            }
        }

        $sumAll = $sumEven + $sumOdd;

       echo "sumEven = " . $sumEven . "\n";
       echo "sumOdd = " . $sumOdd . "\n";
       echo "sumAll = " . $sumAll . "\n";
    }

    tinhTongChanLe([4, 2, 3, 6]);
    tinhTongChanLe([3, 8, 3]);
?>