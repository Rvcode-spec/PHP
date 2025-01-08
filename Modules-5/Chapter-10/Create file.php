<?php

$fileName="FilesTest/Project.txt";
$content ="All Project code is here";
$fp = fopen($fileName, "w");
fwrite($fp, $content);
fclose($fp);
echo "File created successfully";
?>



