<!-- <?php
 echo "<h1 style='color:black'>Welcome to my website</h1><br>";

    $users=["Ravi","Sukanyaa","Anu","Divyansha"];
    echo count($users);
    for($uesr = 0; $user < count($users); $user++){
        echo "<h2 style='color:blue'>" . $users[$user] . "</h2>";
    }
?> -->

<?php
echo "<h1 style='color:black'>Welcome to my website</h1><br>";
$users = ["Ravi", "Sukanyaa", "Anu", "Divyansha"];
for ($user = 0; $user < count($users); $user++) {
    echo "<h2 style='color:blue'>" . $users[$user] . "</h2>";
}
?>




