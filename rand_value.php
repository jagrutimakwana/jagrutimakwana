<?php

$values = array(10, 15, 20, 25, 30,);

//Get random value from the array
$randomvalue =$values[array_rand($values)];

echo "Random value: " . $randomvalue;

?>