<?php 
    function maxPower($str) {
        $result = 0;
        $powerCharacter = $str[0]; // luu ky tu
        $powerTime = 1; // so lan xuat hien ky tu lien tiep

        for ($i = 0; $i < strlen($str) - 1; $i++) {
            if ($powerCharacter === $str[$i+1]) {
                $powerTime++;
            } else {
                $powerCharacter = $str[$i+1];
                $result = max($powerTime, $result);
                $powerTime = 1;
            }
        }

        return max($powerTime, $result);
    }

    // Test case
    echo maxPower("abcccddddeeeeedcba") . "\n"; // Output: 5
    echo maxPower("cddddeeffffdcbba") . "\n";    // Output: 4
?>