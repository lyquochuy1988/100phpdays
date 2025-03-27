<?php 
    function trungbinhcong($arr) {
        $minValue = min($arr);
        $maxValue = max($arr);

        $total = array_sum($arr);

        $avgValue = ($total - $minValue - $maxValue) / (count($arr) - 2);
        echo number_format($avgValue, 1) . "\n";
    }

    trungbinhcong([4, 3, 1, 2]); // 2.5
    trungbinhcong([9, 3, 4, 2]); // 2.5
    trungbinhcong([3, 1, 7]); // 3.0
?>