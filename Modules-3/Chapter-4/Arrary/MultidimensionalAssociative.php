<?php

echo "<h1>Multidimensional Associative Array</h1><br>";

$students=[

    ["Id"=>2001, "Name"=>"Sukanyaa","LastName"=>"Singh", "City"=>"Delhi", "Phone-No"=>"9857683456"],
    ["Id"=>2002, "Name"=>"Rahul","LastName"=>"Kumar","City"=>"Mumbai", "Phone-No"=>"987654321"],
    ["Id"=>2003, "Name"=>"Amit","LastName"=>"Kumar","City"=>"Kolkata", "Phone-No"=>"9876543210"],
    ["Id"=>2004, "Name"=>"Rahul","LastName"=>"Singh","City"=>"Chennai", "Phone-No"=>"987654321"],
];

    foreach($students as $student){
        foreach($student as $key=>$item){
            echo "$key = $item";
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
    }

?>