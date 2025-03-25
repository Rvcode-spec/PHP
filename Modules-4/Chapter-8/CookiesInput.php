😦<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <br>
        <br>
        <button name="btn" value="set">Set Cookie</button>
        <br>
        <br>
        <button name="btn" value="Display">Cookie Display</button>
        <br>
        <br>
        <button name="btn" value="Delete">Cookie Delete</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['btn'])){
    if($_POST['btn'] == "Set Cookie"){
        setcookie("name", $_POST['name'], time() + 3600);
        echo "Cookie set";
    }elseif($_POST['btn']== "Display"){
        if(isset($_COOKIE['name'])){
            echo "Cookie name: ".$_COOKIE['name'];
        }

    }elseif($_POST['btn']=='Delete Cookie'){
        setcookie("name","",time()-3600);
    }

}


?>