
<?php
function iseven($number)
{
    $isEven = array('Even','Odd');
    return $isEven[$number % 2];
}

$number = 4;
$result = isEven($number);

echo "The number $number is $result.";
?>