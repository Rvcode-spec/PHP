<?php

include '../../Modules-1/Chapter-1/Constant.php'; 
// echo "<br>";
include '../../Modules-1/Chapter-1/Constant.php'; // change the file name to see the Warning ;

include_once "../../Day/Basic/Hello.php";

echo "<br>";

require "../../Modules-2/Chapter-3/Function/DefaultParameters.php";
echo "<br>";

// require "../../Modules-2/Chapter-3/Function/DefaultParameters1.php"; // change the file name to see the Warning and Fatal error ;




for ($i = 0; $i < 10; $i++) {// called the ten times
    require "../../Modules-1/Chapter-1/Data-Types.php"; 
}


for ($i = 0; $i < 10; $i++) { // One time called 
    require_once "../../Modules-1/Chapter-1/Data-Types.php";
}
echo "<br>";


?>