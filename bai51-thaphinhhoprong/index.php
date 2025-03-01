<?php 
    function printNumberPyramid($height) {
        $result = "";
        for ($i = 1; $i <= $height; $i++) {
            for ($j = 0; $j < $height; $j++) {
                $num = $i + $j;

                if ($i > 1 && $j > 0 && $i !== $height && $j < $height - 1) {
                    $result .= str_repeat(" ", strlen((string)$num));
                } else {
                    $result .= $num;
                }
            }

            $result = $result . "\n";                          
        }

        echo "Ket qua" . "\n";
        echo $result;      
    }

    printNumberPyramid(3);
    printNumberPyramid(4);
    printNumberPyramid(5);
?>