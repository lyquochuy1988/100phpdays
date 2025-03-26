<?php 
    function chuoichuaso($str) {
        $check = "false";

        for ($i = 0; $i < strlen($str); $i++) {
            if (is_numeric($str[$i])) {
                $check = "true";
                break;
            }
        }

        echo $check . "\n";
    }

    chuoichuaso("abcd"); // false
    chuoichuaso("abcd2"); // true
?>