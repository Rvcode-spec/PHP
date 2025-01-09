<?php

$Students=["Bhola", "Sukanyaa", "Ravi","Rohit","Sukanyaa", "Ravi"];
$text="hi my name is Ravi";
$Student=["name"=>"Sukanyaa","ID"=>"SU2007","Mobile No"=>"9876578123"];

// 1. is_array - Check if the variable is an array

if(is_array($Student)){
    echo "1.- The variable is an array.";
}else{
    echo "1.- The variable is not an array.";
}

echo "<br>";

// 2. Count - Get the number of elements in the array
echo "2.- ".count($Student);

// 3. unset - Remove a specific element from the array
echo "<br>";
echo "3.-";
unset($Students[3]);
echo "<pre>";
print_r($Students);
echo "</pre>";

//4. array_push - Add a new element to the end of the array
echo "<br>";
echo "4.-";
array_push($Students,"Divayansh");
echo "<pre>";
print_r($Students);
echo "</pre>";

//5. array_merge - Merge two arrays into one
echo "<br>";
echo "5.-";
echo "<pre>";
print_r(array_merge($Student,$Students));
echo "</pre>";

// 6. array-pop - Remove the last element from the array
echo "<br>";
echo "6.-";
array_pop($Students);
echo "<pre>";
print_r($Students);
echo "</pre>";

// 7. array_keys - Get all the keys of the array

echo "<br>";
echo "7.-";
echo "<pre>";
print_r(array_keys($Student));
echo "</pre>";

// 8. Implode - Convert the array into a string

echo "<br>";
echo "8.-";
echo "<pre>";
echo implode(", ", $Students);
echo "</pre>";

// 9. expload - Convert a string into an array

echo "<br>";
echo "9.-";
// echo explode($text," ");
echo "<pre>";
print_r (explode(" ", $text));
echo "</pre>";


// 10. array_unique - Remove duplicate values from the array
echo "<br>";
echo "10.-";
$Students = array_unique($Students);
echo "<pre>";
print_r($Students);
echo "</pre>";
?>

