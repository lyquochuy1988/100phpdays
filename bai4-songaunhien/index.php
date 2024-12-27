<?php 
    function randomInRange($start, $end) {
        if ($start > $end) {
            echo "So bat dau phai nho hon so ket thuc!";
            return;
        }

        if ($start === $end) {
            echo "So ngau nhien: $start";
            return;
        }

        $randomNumber = rand($start, $end);
        echo "So ngau nhien: $randomNumber";
    }

    randomInRange(14, 19);
?>