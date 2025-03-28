<?php 
    function decodeString($str, $key) {
        $result = "";
        $startIndex = 0;
        $endIndex = 0;

        for ($i = 0; $i < strlen($key); $i++) {
            $keyNumber = (int)$key[$i];

            $endIndex += $keyNumber;                

            $words = substr($str, $startIndex, $endIndex - $startIndex);
            
            $result .= strtoupper(substr($words, 0, 1)) . substr($words, 1) . " ";
            $startIndex = $endIndex;                
        }

        return trim($result) . "\n";
    }

    // Test case
    $str = "hoclaptrinh";
    $key = "335";

    echo decodeString($str, $key); // Output: "Hoc Lap Trinh"
?>