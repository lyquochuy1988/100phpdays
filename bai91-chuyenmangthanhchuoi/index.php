<?php 
    function chuoitangdan($arr) {
        sort($arr);        

        $result = "";
        for ($i = 0; $i < count($arr); $i++) {
            $result .= $arr[$i] . "-";
        }

        $result = substr($result, 0, -1);

        echo $result;
    }

    chuoitangdan([1, 2, 3, 2]); // 1-2-2-3  (string)
?>