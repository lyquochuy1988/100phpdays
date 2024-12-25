<?php 
    $n = 1;
    $nn = $n * 11;
    $nnn = $n * 111;
    if ($n < 10) {
        $result = 0;

        $result = $n + $nn + $nnn;            
        echo "1 + " . "11 + " . "111 " . "= " . $result;
    }
?>