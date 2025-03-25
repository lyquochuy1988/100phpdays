<?php 
    function loaibophantuam($arrInt) {
        $result = [];
        
        foreach ($arrInt as $value) {
           if ($value >= 0) {
                $result[] = $value;
           }
        }

        $result = implode(", ", $result);
        echo "[" . $result . "]";
    }

    loaibophantuam([2, -2, -3, 4]);
?>