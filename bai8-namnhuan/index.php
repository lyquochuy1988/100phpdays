<?php 
    $year = 400;

    if ($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0)) {
        echo "Năm nhuận";
    } else {
        echo "Không là năm nhuận";
    }
?>