<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <input type="text" name="username" placeholder="Enter your Username">
        <br><br>
        <button type="submit" name="btn" value="Set Cookie">Set Session</button>
        <br><br>
        <button type="submit" name="btn" value="Get Cookie">Get Session</button>
        <br><br>
        <button type="submit" name="btn" value="Delete Cookie">Delete Session</button>
    </form>
</body>
</html>

<?php

session_start();

if(isset($_POST['btn'])){
    if($_POST['btn'] == "Set Cookie"){
        if (!empty($_POST["username"])) { // Empty username ना हो
            $_SESSION["username"] = $_POST["username"];
            echo "✅ Session is set.";
        } else {
            echo "⚠ Please enter a username!";
        }

    } elseif($_POST['btn'] == "Get Cookie") {
        if(isset($_SESSION['username'])) {
            echo "👤 Stored Username: " . $_SESSION['username'];
        } else {
            echo "⚠ No session found!";
        }

    } elseif($_POST['btn'] == "Delete Cookie") {
        unset($_SESSION["username"]);
        echo "🗑 Session is deleted.";
    } else {
        echo "❌ Invalid action!";
    }
}

if(isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] . "! You are logged in.";
} else {
    echo "Unauthorized! Please login first.";
}
?>