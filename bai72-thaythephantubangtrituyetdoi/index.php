<?php 
    function giatrituyetdoi($arr) {
        $updateArr = array_map("abs", $arr);

        $updateArr = implode(", ", $updateArr);
        echo "[" . $updateArr . "]";
    }

    giatrituyetdoi([2, -224, -16, 2]);
?>