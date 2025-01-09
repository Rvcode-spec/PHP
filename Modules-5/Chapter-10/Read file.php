<?php

// $file="Files/Project-c";
// $project=fopen($file,"r");
// echo fread($project,filesize($file));
// fclose($project);

if(isset($_FILES['file'])){
    $file = $_FILES['file']['tmp_name'];
    $project=fopen($file,"r");
    echo fread($project,filesize($file));
    fclose($project);
    } else {
        echo "No file selected";
        }

?>


<form method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <br>
    <br>
    <button>Read file</button>
</form>