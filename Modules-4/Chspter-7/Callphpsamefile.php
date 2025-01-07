<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <button name="btn" value="btn-1">
            Call function
        </button>
    </form>
    
</body>
</html>

<?php

if(isset ($_POST['btn'])){
    btn_click();
}
function btn_click(){
    echo "Button clicked";
}




?>