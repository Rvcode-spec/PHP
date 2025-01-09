<?php

$Student=["Student Name"=>"Shankar", "Student ID"=>"SH2005","Email ID"=>"Shankar2005@gmail.com"];
$StudentJson=json_encode($Student); // Convert the array to JSON string
echo $StudentJson;


$Student1= '{"Student Name":"Shankar","Student ID":"SH2005","Email ID":"Shankar2005@gmail.com"}';
$Student1=json_decode($Student1, true); // Convert the JSON string to array
echo "<br>";
print_r($Student1);

?>