<?php

$x=20;
$x=(string)$x;
echo var_dump($x);
?>

<?php

$x=20;
$x=(boolean)$x;
echo var_dump($x);
?>

<?php

$x="Ravi";
$x=(int)$x;
echo var_dump($x);

$y=20;
$y=(array)$y;
echo var_dump($y);

$z=30;
$z=(object)$z;
echo var_dump($z);
?>
