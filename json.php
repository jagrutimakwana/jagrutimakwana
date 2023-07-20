<?php
$jsonString = '{"name":"Jagruti","age":"27","city":"ahmedabad"}';

$data = json_decode($jsonString);
if ($data === null && json_last_error() !== JSON_ERROR_NONE)
{
    echo "Error decoding JSON: " . json_last_error_msg();
}
else{
    echo "Name: " . $data->name ."<br>";
    echo "Age: " . $data->age ."<br>";
    echo "City: " . $data->city ."<br>";
}
?>