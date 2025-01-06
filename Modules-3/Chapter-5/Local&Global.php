<?php

$name = "Ravi";

function getName(){
    $name = "John"; // Local Varibale
    echo "Local Varibale: $name";
    // ---------------------------------------------------------------------------------------

    echo "<h3>Using the global keyword to access the function.</h3><br>";
    global $name; // Using the global keyword to access the global variable in a function
    $name = "Shankar";
    echo "<h5>Global Varibale: $name</h5>"; // change the name of global Variable 

        function changeName(){      // Nested Loop 
            global $name; 
            $name = "Sukanyaa";
            echo "<h2>Global Varibale: $name</h2>";

        }
}
getName();
echo "<br>";
echo $name;
changeName();
?>