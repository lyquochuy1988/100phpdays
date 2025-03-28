<?php 
    function getHighestScores($input) {
        $result = "";

        $inputArr = explode("#", $input);
        
        foreach($inputArr as $value) {
            $info = preg_split("/[\,,\/]/", $value);
            $name = $info[0];
            $scores = array_slice($info, 1);
           
            $newScoresNumer = array_map('intval', $scores);
            $maxScores = max($newScoresNumer);

            $result .= "{$info[0]} : {$maxScores}\n";
        };

        return $result;
    }

    // Test với input
    $input = "Hue/2,3,4#Linh/5,3#Duy/5,36";
    echo getHighestScores($input);
?>