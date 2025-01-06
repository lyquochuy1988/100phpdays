<?php 
    $totalSale = 1800;
    $hoahong = 0;

    if ($totalSale <= 100) {
        $hoahong = ($totalSale * 5) / 100;
    } else if ($totalSale <= 300) {
        $hoahong = ($totalSale * 10) / 100;
    } else if ($totalSale > 300) {
        $hoahong = ($totalSale * 20) / 100;
    }

    echo "Hoa hong: {$hoahong}";
?>