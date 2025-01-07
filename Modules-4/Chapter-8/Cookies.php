<?php

setcookie("Animals", "Tigher", time() + 3600, "/");

if(isset($_COOKIE['Animals'])){
    echo "Cookie is"." ".$_COOKIE['Animals'];
}else{
    echo "Cookie is not set";
}

?>