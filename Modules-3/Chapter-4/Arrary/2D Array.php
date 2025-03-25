<?php

echo "<h2 style='color:red'>Multidimensional Arrays</h2><br>";

     
$users=[

    [1,"Ravi","Delhi", "9871585012", "ravi@gmail.com","Unmarried"],
    [2,"Sukanyaa", "Delhi", "9871585012", "sukanyaa@gmail.com","Unmarried"],
    [3,"Rahul", "Delhi", "9871585012", "rahul@gmail.com","Unmarried"],
];   for($i=0; $i<count($users); $i++){
            echo "<pre>";
            print_r($users);
            echo "<pre>";
                // for($j=0; $j<count($users[$i]); $j++){
                //     echo $users[$i][$j];
                //     echo "<br>";
                // }
        }
?>