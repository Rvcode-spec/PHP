<!-- Get List of files from folder -->

<?php

echo "<h1>Get List of files from folder</h1>";
echo "<br>";
$path = "Files";// Define the folder path
$items=scandir($path); // Get all items in the directory
$items=array_diff($items,array(".","..")); // Remove the "." and ".." entries from the array
foreach($items as $item){
    echo "<a href=./Files/$item>$item</a>";
    echo "<br>";
}
// print_r($items);
?>