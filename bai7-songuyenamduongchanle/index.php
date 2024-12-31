<?php 
    $number = 4;
    $strOne = "âm";
    $strTwo = "chẵn";

    if ($number > 0) $strOne = "dương";
    if ($number % 2 !== 0) $strTwo = "lẻ";

    echo "Số nguyên {$strOne} {$strTwo}";

?>