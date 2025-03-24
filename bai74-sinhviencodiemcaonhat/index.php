<?php
    $arrScore = [2, 9, 8, 4, 10];
    $arrStudent = ["Hân", "Dũng", "Linh", "Cường", "Lan"];

    $indexFind = 0;
    $length = count($arrScore);

    for ($i = 1; $i < $length; $i++) {
        if ($arrScore[$i] > $arrScore[$indexFind]) {
            $indexFind = $i;
        }
    }

    echo "HV có điểm cao nhất - " . $arrStudent[$indexFind] . ": " . $arrScore[$indexFind] . "\n";
?>
