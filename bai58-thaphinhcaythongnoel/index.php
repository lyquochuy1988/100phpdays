<?php
$height = 9;
$shape = '';
$record = '';

// Vẽ phần thân cây thông
for ($i = 1; $i <= $height; $i++) {
    $character = ($i % 2 == 0) ? "#" : "o";
    $around = str_repeat(' ', $height - $i);
    $center = str_repeat($i . $character, $i);
    $center = substr($center, 0, -1); // Xóa ký tự cuối
    $shape .= $around . $center . $around . "\n";
}

// Vẽ phần thân cây
for ($i = 1; $i <= $height / 2; $i++) {
    $space1 = str_repeat(' ', ($height + 1) / 2);
    $space2 = str_repeat(' ', $height - 4);
    $record = $space1 . '|'. $space2 . '|' . "\n";
    $shape .= $record;
}

// Vẽ đế cây
$shape .= str_repeat('-', 2 * $height - 1);

echo $shape;
?>