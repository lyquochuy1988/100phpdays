<?php
function averageEvenAtOddIndices($arrInt) {
    $sum = 0;
    $count = 0;
    $result = "";

    for ($i = 0; $i < count($arrInt); $i += 2) {
        if ($arrInt[$i] % 2 == 0) {
            $result .= $arrInt[$i] . " + ";
            $sum += $arrInt[$i];
            $count++;
        }
    }

    if ($count == 0) {
        echo "Avg: 0\n";
    } else {
        $result = substr($result, 0, -3);
        $avg = $sum / $count;
        printf("Avg: (%s) / %d = %.1f\n", $result, $count, $avg);
    }
}

// Test
averageEvenAtOddIndices([2, 4, 6, 2]); // 4.0
averageEvenAtOddIndices([1, 2, 3]); // 0
averageEvenAtOddIndices([2, 4, 6, 2, 8]); // 5.3
?>