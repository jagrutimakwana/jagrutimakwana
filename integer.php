<?php

$numbers = array(5,15,25,35,45);
$total_number=0;

for ($i = 0; $i < count($numbers); $i++)
{
    $total_number += $numbers[$i];
}
echo "Total_number : " . $total_number;
?>