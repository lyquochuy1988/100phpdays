<?php 
    function decodeMessage($input) {
        $characterOnly = preg_replace("/[^A-Za-z]/", "", $input);
        $numerOnly = preg_replace("/[^0-9]/", "", $input);
        
        $result = [];

        $startIndex = 0;

        for ($i = 0; $i < strlen($numerOnly); $i++) {
            $endIndex = $startIndex + (int)$numerOnly[$i];

            $words = substr($characterOnly, $startIndex, $endIndex - $startIndex);
            $words = strtoupper(substr($words, 0, 1)) . substr($words, 1);

            $result[] = $words;

            $startIndex = $endIndex;

        }

        echo implode(" ", $result) . "\n";
    }

    // Test case
    $input = "2c+)1o!@(*&!y@&chi&^c!@#o3co$23%^#nd$#$!uo5ng";
    $input2 = "!@x$3i*nc4*(hao";
    echo decodeMessage($input); // Output: "Co Y Chi Co Con Duong"
    echo decodeMessage($input2); // Output: "Xin Chao"
?>