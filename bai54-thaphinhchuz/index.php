<?php 
function printTower($height) {
    $output = "";

    // In hang dau tien
    $output .= str_repeat("#", $height) . "\n";

    // In cac hang o giua
    for ($i = $height - 1; $i > 1; $i--) {
        $output .= str_repeat(" ", ($i - 1)) . "#\n";
    }

    // In hang cuoi cung
    $output .= str_repeat("#", $height) . "\n";

    echo $output;
}

printTower(6);
?>