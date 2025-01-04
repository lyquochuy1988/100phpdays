<?php 
    $totalLine = 8;
    $timeDoing = 4;
    $income = 0;

    if ($totalLine < 10) {
        $income = (20 * $timeDoing) - 1;
    } else if ($totalLine >= 10 && $totalLine <= 20) {
        $income = (20 * $timeDoing) - 2;
    } else {
        $income = (20 * $timeDoing) - 5;
    }

    echo "Salary: {$income}";
?>