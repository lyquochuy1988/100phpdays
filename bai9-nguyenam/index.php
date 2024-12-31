<?php 
    $character = "i";
    $result = "Khong la nguyen am";

    switch ($character) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
        case "A":
        case "E":
        case "I":
        case "O":
        case "U":
            $result = "Nguyen am";
            break;
    }

    echo $result;
?>