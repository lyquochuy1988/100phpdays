<?php
function isSimNguQuy($phone) {
    // Loại bỏ dấu chấm (nếu có)
    $phone = str_replace(".", "", $phone);

    // Duyệt qua từng phần của số điện thoại để kiểm tra tứ quý
    for ($i = 0; $i < strlen($phone) - 4; $i++) {
        if ($phone[$i] == $phone[$i + 1] &&
            $phone[$i] == $phone[$i + 2] &&
            $phone[$i] == $phone[$i + 3] && 
            $phone[$i] == $phone[$i + 4]) {
            return "Yes";
        }
    }
    return "No";
}

// Test
$testCases = ["0765733333", "0764788888", "0383.308.983", "08.33333.494"];
foreach ($testCases as $phone) {
    echo "Phone: $phone => " . isSimNguQuy($phone) . "\n";
}
?>
