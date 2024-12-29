<?php
    // $scoreOne = 6;
    // $scoreTwo = 9;
    // $scoreThree = 5;

    // $avg = number_format(($scoreOne + $scoreTwo + $scoreThree) / 3, 1);
    // $maxNumber = max($scoreOne, $scoreTwo, $scoreThree);

    // echo "Avg:" . $avg . "<br>";
    // echo "Max:" . $maxNumber . "<br>";
?>

<?php
    // Tối ưu hơn
    $scores = [6, 9, 5];

    // Tính trung bình và giá trị lớn nhất
    $avg = number_format(array_sum($scores) / count($scores), 1);
    $maxNumber = max($scores);

    // In kết quả
    echo "Avg: $avg<br>";
    echo "Max: $maxNumber<br>";
?>
