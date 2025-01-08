<?php 
    function sochiahetcho13($start, $end) {      
        if ($start >= $end) {
            echo "Khong co";
            return;
        } 

        $result = [];   

        for ($i = $start + 1; $i < $end; $i++) {
            if ($i % 13 === 0) {
                $result[] = $i;
            } 
        }

        if (count($result) > 0) {
            echo implode(" ", $result);
        } else {
            echo "Khong co";
        }
    }

    sochiahetcho13(1, 40);
?>