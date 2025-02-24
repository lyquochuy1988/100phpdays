<?php
function printNumberPyramid($height) {
    for ($i = 1; $i <= $height; $i++) {
        $spaces = str_repeat(' ', $height - $i); // Tạo khoảng trắng để căn chỉnh
        
        $leftNumbers = '';
        for ($j = $i; $j > 0; $j--) {
            $leftNumbers .= $j;
        }
        
        $rightNumbers = '';
        for ($j = 2; $j <= $i; $j++) {
            $rightNumbers .= $j;
        }
        
        echo $spaces . $leftNumbers . $rightNumbers . "\n";
    }
}

printNumberPyramid((int)5);
?>