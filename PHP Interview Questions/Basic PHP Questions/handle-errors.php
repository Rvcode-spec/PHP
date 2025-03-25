<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

function divide($a,$b){
    if($a==0){
        throw new Exception("Divide by zero");
    }
    return $a / $b;
}
try{
    echo divide(5,5);

}catch(Exception $e){
    echo $e->getMessage();
}

function withdrawMoney($amount){
    if($amount >1000){
        throw new Exception("Insufficient balance");
    }
    return "Withdrawn amount:" .$amount;
}

try{
    echo withdrawMoney(1500);
}catch(Exception $e){        
    echo $e->getMessage();
}
?>


