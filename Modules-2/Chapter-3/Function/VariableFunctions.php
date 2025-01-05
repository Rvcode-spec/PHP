<?php

    function User(){
        echo "User Function is Called";
    }

    $var= "User";
    // $var();

    function main($var){  // CallBack Function
        $var();
        echo "<br>";
        echo "Called the Main Function";
    }
    main($var);
?>