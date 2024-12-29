<?php 
     $one = 5;
     $two = 3;

     $addition = $one + $two;
     $subtraction = $one - $two;
     $multiplication = $one * $two;
     $division = $one / $two;
     $modulus = $one % $two;

     echo "$one + $two = $addition <br>";
     echo "$one - $two = $subtraction <br>";
     echo "$one x $two = $multiplication <br>";
     echo "$one : $two = " . number_format($division, 2) . "<br>";
     echo "$one % $two = $modulus <br>";
?>
