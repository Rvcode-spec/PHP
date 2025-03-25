<?php

if($_FILES['Upload']){
    $path = $_FILES['Upload']['name'];
    $upload_path = "./Upload/".$path;
    if(move_uploaded_file($_FILES['Upload']['tmp_name'], $upload_path)){
        echo "File is uploaded";
    }else{
        echo "File is not uploaded";
    }

}

?>