<?php 
    function findWordPosition($sentence, $searchWord) {
        $words = explode(" ", $sentence);
        $searchWordLength = strlen($searchWord);

        $result = 0;
        
        for ($i = 0; $i < count($words); $i++) {
            
            if (substr($words[$i], 0, $searchWordLength) === $searchWord) {
                $result = $i + 1;
                break;
            } else {
                $result = -1;
            }
        }

        return $result;
    }

    // Test        
    echo findWordPosition("lap trinh php tai zendvn la chuong trinh", "tri") . "\n"; // 2
    echo findWordPosition("hoc lap trinh php tai zendvn", "tri") . "\n"; // 3
    echo findWordPosition("hoc lap trinh php tai zendvn", "abc") . "\n"; // -1
?>