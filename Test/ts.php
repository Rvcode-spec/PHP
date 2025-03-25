<!-- Write a function to reverse a string without using strrev(). -->

<?php
function reverse($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

echo reverse("GeeksforGeeks"); 
?>
