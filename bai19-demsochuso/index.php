<?php 
    function totalDigits($number) {
        $digitsNumber = strlen((string)$number);
        echo $digitsNumber;
    }

    totalDigits(12345);
?>