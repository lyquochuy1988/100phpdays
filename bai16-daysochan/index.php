<?php
function printEventNumbers($start, $end) {
    if ($start >= $end) {
        echo "Khong co\n";
        return;
    }

    $result = [];

    for ($i = $start + 1; $i < $end; $i++) {
        if ($i % 2 === 0) {
            $result[] = $i;
        }
    }

    if (count($result) > 0) {
        echo implode(" ", $result) . "\n";
    } else {
        echo "Khong co\n";
    }
}

printEventNumbers(1, 10);
?>