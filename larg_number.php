<?php
$num1 = 75;
$num2 = 60;
$num3 = 85;

$largest = ($num1 >= $num2 && $num1 >= $num3) ? $num1 : (($num2 >= $num1 && $num2 >= $num3) ? $num2 : $num3);

echo "The largest number is: " . $largest;
?>
