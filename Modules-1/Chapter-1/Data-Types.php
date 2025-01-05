<?php 
echo "<h2>Using the Data Type</h2>";


$name = "Sukanyaa Singh";
echo "My name is $name.";
// $age = 21;
// $city = "Delhi";
// $country = "India";
// $phone = "+91 9876543210";
// $address = "A-1, Sector-1, Noida";
// $website = "https://www.sukanyasingh.com";
// $description = "I am a web developer and a blogger. I love to write about technology and"
// . " coding. I am a passionate learner and a creative thinker.";
?>

<?php 
echo " <br>";
$Number = 21;
echo "My Age is $Number";
// echo var_dump($Number);
?>

<?php 
echo " <br>";
// echo "Float Values Data";
$NumFloat= 7.1;
echo "My 12 Markes $NumFloat";
?>

<?php
echo " <br>";
$Boolean = false;
echo "Married Status - No $Boolean";
?>

<?php 
echo "<br>";
$empty = Null;
echo $empty;
?>

<?php
echo "<br>";
echo "Using the Recourse<br>";
$connection = ftp_connect( "52.172.8.254")or die("local host not found");
echo var_dump($connection);
?>
