<?php
// $arrInt = [1, 2, 3];
// $number = 14;
// $result = "Không tồn tại";
// $flagCheckExist = false;

// foreach ($arrInt as $elm) {
//     if ($elm == $number) {
//         $flagCheckExist = true;
//         break;
//     }
// }

// if ($flagCheckExist) $result = "Tồn tại";
// echo $result;

// C2
$arrInt = [1, 2, 3];
$number = 14;
$result = in_array($number, $arrInt) ? "Tồn tại" : "Không tồn tại";
echo $result;
?>

