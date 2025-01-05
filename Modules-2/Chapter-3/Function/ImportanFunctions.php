<!-- Basic but Important functions withe php  -->

<?php

echo "<h3>Check The Basic function in php</h3><br>";

$str = "Ravi Shankar";
echo strlen($str); // Letter count

$var = 10;
echo var_dump($var) ;// Typeof function in php
echo "<br>";

echo date("l");
echo "<br>";
// echo phpinfo();// check the details in php

$let = "Ravi";
echo is_string($let); // Check  String or not String
// echo var_dump($let)


echo "<br>";

echo "before";
// die;// stopping the execution. It is often used for error handling or debugging.
// exit; // Script stops here

echo "After";

echo "<br>";
$Welcome= "Hello World";
echo substr($Welcome, 2); // letter to cut from the string

?>
