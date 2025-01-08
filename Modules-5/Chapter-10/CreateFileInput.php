<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="fileName" placeholder="Enter your FileName">
    <br>
    <br>
    <textarea name="message" placeholder="Enter your message">

    </textarea>
    <br>
    <br>
    <button>Create File</button>
</form>
</body>
</html>

<?php

if (isset($_POST['fileName'])) {
    $fileName = "Files/" . $_POST['fileName']; // Construct the file path
    $content = $_POST['message']; // Get the content

    // Open the file for writing
    $fp = fopen($fileName, "w") or die("Unable to open file!");

    // Write content to the file
    fwrite($fp, $content);

    // Close the file
    fclose($fp);

    echo "File created successfully";
} else {
    echo "File is not created";
}
?>






