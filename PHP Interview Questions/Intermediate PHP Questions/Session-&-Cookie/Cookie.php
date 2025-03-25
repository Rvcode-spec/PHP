<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Handling</title>
</head>
<body>

    <form method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <br><br>
        <button type="submit" name="btn" value="Set Cookie">Set Cookie</button>
        <br><br>
        <button type="submit" name="btn" value="Get Cookie">Get Cookie</button>
        <br><br>
        <button type="submit" name="btn" value="Delete Cookie">Delete Cookie</button>
    </form>

    <?php
    if (isset($_POST['btn'])) {
        if ($_POST['btn'] == "Set Cookie") {
            setcookie("name", $_POST['name']); // No expiration time is set
            echo "Cookie is set.";
        } elseif ($_POST['btn'] == "Get Cookie") {
            if (isset($_COOKIE['name'])) {
                echo "Cookie name: " . $_COOKIE['name'];
            } else {
                echo "No cookie found!";
            }
        } elseif ($_POST['btn'] == "Delete Cookie") {
            setcookie("name", "", time() - 3600); // Expired cookie
            echo "Cookie is deleted.";
        }
    }
    ?>

</body>
</html>
