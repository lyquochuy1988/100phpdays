<?php 
    function findLongestCourse($inputName, $inputTime) {
        // Chuyển đổi chuỗi inputName thành object
        // "abw=nodejs;def=javascript;nfv=reactjs;"
        // => {"abw": "nodejs", "def": "javascript", ...}
        $inputNameArr = array_filter(explode(";", $inputName));  
        $inputNameObj = [];

        foreach($inputNameArr as $x) {
            list($key , $value) = explode("=", $x);
            $inputNameObj[$key] = $value;
        }


        // // // Chuyển đổi chuỗi inputTime thành object
        $inputTimeArr = array_filter(explode(";", $inputTime));  
        $inputTimeObj = [];

        foreach($inputTimeArr as $x) {
            list($key , $value) = explode("=", $x);
            $inputTimeObj[$key] = $value;
        }  

        // // // Tìm khóa học có thời gian dài nhất
        $maxId = null;
        $maxTime = -1;
        foreach($inputTimeObj as $key => $value) {
            if ($value > $maxTime) {
                $maxTime = $value;
                $maxId = $key;
            }
        }

        // // // Xuất kết quả
        if ($maxId !== null) {
            echo "Course Id: {$maxId} - Course Name: $inputNameObj[$maxId] - Course Time: {$maxTime}\n";
        }
    }

    // Test với dữ liệu mẫu
    findLongestCourse(
        "abw=java;def=android;nfv=php;",
        "abw=9920;nfv=240;def=1990"
    );

    findLongestCourse(
        "abw=java;def=android;nfv=php;",
        "abw=20;nfv=40;def=90"
    );

    findLongestCourse(
        "abw=nodejs;def=javascript;nfv=reactjs;",
        "abw=120;nfv=410;def=590"
    );
?>