<?php 
    $numberOne = 3;
    $numberTwo = 0;
    $math = "/";
    $result = 0;
    $error = "";
    $canCaculate = true;

    switch ($math) {
        case "+":
            $result = $numberOne + $numberTwo;
            break;

        case "-":
            $result = $numberOne - $numberTwo;
            break;

        case "x":
            $result = $numberOne * $numberTwo;
            break;

        case "/":
        case ":":
            if ($numberTwo === 0) {
                $error = "Khong the chia cho 0";
                $canCaculate = false;
            } else {
                $result = $numberOne / $numberTwo;
            }
            
            break;
    
        default:
            $error = "Khong thuc hien duoc, phep tinh khong hop le";
            $canCaculate = false;
            break;
    }

    if ($canCaculate === true) {
        echo "{$numberOne} {$math} {$numberTwo} = $result";
    } else {
       echo $error;
    }      
?>