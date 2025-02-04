<?php 
    function boiso($arrInt, $number) {
        foreach ($arrInt as $num) {
            if($num % $number === 0 && $num % ($number + 1) === 0) {
                echo "Ton tai\n";
                return;
            }
        }

        echo "Khong ton tai\n";        
    }

    boiso([14, 12, 3, 21, 6], 3);
    boiso([14, 12, 3, 21, 6], 4);
    boiso([14, 12, 3, 21, 6], 5);
?>