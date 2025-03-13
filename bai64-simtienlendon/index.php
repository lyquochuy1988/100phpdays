<?php 
    function simtienlendon($phone) {
        $result = "No";

        $phone = str_replace(".", "", $phone);
        $phone = substr($phone, -3);
        
        if ((int)$phone[0] === (int)$phone[1] - 1  && (int)$phone[0] === (int)$phone[2] - 2) {
            $result = "Yes";
        }

        echo $result . "\n";
        return $result;
    }

    simtienlendon("0589244567"); // Yes 
    simtienlendon("0589244983"); // No
    simtienlendon("0589.244.678"); // Yes
?>