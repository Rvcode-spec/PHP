<?php
echo "Using the Goto Statement <br>";
$num=20;

for($i=0; $i<=$num; $i++){
    if($i==5){
        goto end;
    }
    echo $i;
}
end: 
echo "<br>";
echo "Loop interrupted at number 5.";
?>