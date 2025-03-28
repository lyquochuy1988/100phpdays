<?php 
    function findLongestCourse($str) {
        $courses = explode("/", $str);
        
        $result = "";
        $maxTime = 0;

        for ($i = 1; $i < count($courses); $i += 2) {
            if ((int)($courses[$i]) > $maxTime) {
                $maxTime = (int)($courses[$i]);
            }
        }

        for ($i = 1; $i < count($courses); $i += 2) {
            if ((int)($courses[$i]) === $maxTime) {
                $result .= "{$courses[$i - 1]} : {$maxTime}\n";
            }
        }

        return trim($result);
    }

    // Test
    $str1 = "php/12/frontend/30/javascript/15/python/140";
    echo findLongestCourse($str1) . "\n";

    $str2 = "php/12/java/140/python/140";
    echo findLongestCourse($str2) . "\n";

    $str3 = "php/12/java/14";
    echo findLongestCourse($str3) . "\n";
?>