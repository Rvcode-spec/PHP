<?php

if($_FILES['Uploadfiles']){
    $path = $_FILES['Uploadfiles']['name'];
    $upload_path ="./UploadFiles/".$path;
    // echo $path;

    if(move_uploaded_file($_FILES['Uploadfiles']['tmp_name'],$upload_path)){
        echo "File uploaded successfully";
    }else{
        echo "Failed to upload file";
    }
}else{
    echo "not found!";
}

?>