<?php 
    function simthantai($phone) {
        $result = "No";

        $phone = str_replace(".", "", $phone);
        $lastTwoDigits = (int)substr($phone, -2);
        

        if ($lastTwoDigits === 39 || $lastTwoDigits === 79) {
            $result = "Yes";
        }

        echo $result . "\n";
        return $result;
    }

    simthantai("0324456.779");
    simthantai("0324456.739");
    simthantai("0324456.728");
?>