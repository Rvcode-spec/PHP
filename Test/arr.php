<!-- How would you remove duplicate values from an array in PHP? -->

<?php
function remove($arr){
    // return array_values(array_unique($arr));
    return array_values(array_unique($arr));
}

$number = [1,3,4,5,3,4,2,2,1];

$result=(remove($number));
foreach ($result as $value) {
    echo $value . "\n"; // Use "\n" for CLI or "\n" inside <pre> tags for browsers
}

?>

<!-- array_unique($arr): Removes duplicate values from the array $arr.
array_values(): Re-indexes the array to ensure the keys are in numerical order starting from 0. -->


<!-- Implement a function to check if a string is a palindrome -->

<?php
function isPalindrome($str) {
    return strtolower($str) === strtolower(strrev($str));
}

echo isPalindrome("madam") ? "Palindrome" : "Not a Palindrome";
?>
