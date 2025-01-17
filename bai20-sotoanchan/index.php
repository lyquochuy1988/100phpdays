<?php 
    function isAllEven($yourNumber) {
        // convert number to string
        $numberString = (string)$yourNumber;

        for ($i = 0; $i < strlen($numberString); $i++) {
            if ((int)$numberString[$i] % 2 !== 0) {
                return "No";
            }
        }

        return "Yes";
    }


    echo isAllEven(208);
    echo "\n";
    echo isAllEven(118);
?>