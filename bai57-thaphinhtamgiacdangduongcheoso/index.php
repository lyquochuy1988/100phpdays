<?php 
    $height = 5;
    $shape = ""; 
    $shapeTop = "";
    $shapeBottom = "";
    $record = "";

    $center = floor($height / 2);
    $line = "1" . str_repeat(" ", $height - 2) . $height . "\n";

    for ($i = 2; $i <= $height / 2; $i++) {
        $record = str_repeat(" ", $i - 1) . $i . str_repeat(" ", $height - 2 * $i) . ($height - $i + 1);
        $shapeTop .= $record ."\n";
    }

    $centerCharacter = str_repeat(" ", $center) . ($center + 1) . "\n";

    for ($i = 2 + $center; $i < $height; $i++) {
        $record = str_repeat(" ", $height - $i) . ($height - $i + 1) . str_repeat(" ", 2 * $i - $height - 2) . $i;
        $shapeBottom .= $record . "\n";
    }

    $shape = $line . $shapeTop . $centerCharacter . $shapeBottom . $line;
    echo $shape;
?>