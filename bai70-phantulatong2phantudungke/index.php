<?php
function checkSumAdjacent($arr) {
    for ($i = 1; $i < count($arr) - 1; $i++) {
        if ($arr[$i - 1] + $arr[$i + 1] == $arr[$i]) {
            return "Tồn tại";
        }
    }
    return "Không tồn tại";
}

// Test cases
echo checkSumAdjacent([1, 3]) . "\n"; // Không tồn tại
echo checkSumAdjacent([1, 2, 3]) . "\n"; // Tồn tại
echo checkSumAdjacent([1, 3, 2]) . "\n"; // Không tồn tại
echo checkSumAdjacent([1, 5, 6, 8, 9]) . "\n"; // Không tồn tại
echo checkSumAdjacent([1, 2, 7, 9, 2]) . "\n"; // Tồn tại
?>
