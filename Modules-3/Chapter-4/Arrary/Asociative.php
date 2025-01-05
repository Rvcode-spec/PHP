<?php


echo "<h1 style='color:Red'>First Method</h1><br>";
$usersDetailes=[
    "name"=>"Ravi",
    "age" => 23,
    "city" => "Delhi",
    "country" => "India",
    "hobbies" => ["reading", "swimming", "cycling"],
    "address" => "Dayal Bagh Fridabad Haryana",
];
    foreach($usersDetailes as $key => $data){
        if (is_array($data)) {
            echo $key . " = " . implode(", ", $data); // Convert array to a comma-separated string
        } else {
            echo $key . " = " . $data;
        }
        echo "<br>";
    }
    echo "<br>";


echo "<h1 style='color:Red'>Second Method</h1>";
echo "<br>";
        foreach($usersDetailes as $key => $data2):
           if(is_array($data2)){
              echo $key." = " . implode(",", $data2);
              echo "<br/>";

           }else{
            echo $key." = ".$data2;
            echo "<br/>";
           };
         
        endforeach;
?>