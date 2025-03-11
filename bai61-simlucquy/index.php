<?php 
    $yourNumber = "0818999999";
    $result = "No";

    $yourNumber = str_replace(".", "", $yourNumber);
    $yourNumber = substr($yourNumber, -6);

    if ((int)$yourNumber % 111111 === 0) {
        $result = "Yes";
    }

    echo $result;
?>