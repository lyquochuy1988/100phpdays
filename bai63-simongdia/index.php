<?php 
    function simthantai($phone) {
        $result = "No";

        $phone = str_replace(".", "", $phone);
        $lastTwoDigits = (int)substr($phone, -2);
        

        if ($lastTwoDigits === 38 || $lastTwoDigits === 78) {
            $result = "Yes";
        }

        echo $result . "\n";
        return $result;
    }

    simthantai("0324456.778");
    simthantai("0324456.738");
    simthantai("0324456.728");
?>