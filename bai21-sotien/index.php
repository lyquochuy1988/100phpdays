<?php 
    function isAccendingNumber($yourNumber) {
        // convert number to string
        $stringNumber = (string)$yourNumber;

        for ($i = 0; $i < strlen($stringNumber) - 1; $i++) {
            if ($stringNumber[$i] >= ($stringNumber[$i + 1])) {
                return false;
            }
        }

        return true;
    }

    $yourNumber = 279;

    if (isAccendingNumber($yourNumber)) {
        echo "Yes";
    } else {
        echo "No";
    }
?>