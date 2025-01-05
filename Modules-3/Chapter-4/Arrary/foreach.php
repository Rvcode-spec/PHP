<?php

    echo "<h1>first type print the value of foreash</h1>";

    $users=["Ravi","Shankar", "Rahul", "Raj", "Sukanyaa"];

    foreach ($users as $i){
        if($i=="Raj"){
            break; // stop the loop
        }
        echo "<h4>".$i."</h4>";

    }

    echo "<h1>Second type print the value of foreash</h1>";

    foreach($users as $x):
        if($x=="Sukanyaa"){
            continue;
        }
        echo "<h4>".$x."</h4>";
        
    endforeach;    
?>


