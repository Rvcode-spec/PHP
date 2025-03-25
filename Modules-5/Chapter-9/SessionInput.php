<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username">
    <br>
    <br>
    <button name="btn" value="set">Set Session</button>
    <br>
    <br>
    <button name="btn" value="get">Get Session</button>
    <br>
    <br>
    <button name="btn" value="Delete">Delete Session</button>
</form>
</body>
</html>

<?php

session_start();

if(isset($_POST["btn"])){
    if($_POST["btn"]=="set"){
       $let=$_POST['username'];
       $_SESSION["username"]=$let;

    }elseif($_POST["btn"]=="get"){
        echo $_SESSION['username'];

    }elseif($_POST["btn"]=="Delete"){
        unset($_SESSION['username']);
    }else{
        echo "Invalid Button";
    }
}




?>