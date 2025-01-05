<?php

echo "<h3>User Table</h3>";
echo "<br>";

$users=[

    [1,"Ravi","Delhi", "9871585012", "ravi@gmail.com","Unmarried"],
    [2,"Sukanyaa", "Delhi", "9871585012", "sukanyaa@gmail.com","Unmarried"],
    [3,"Rahul", "Delhi", "9871585012", "rahul@gmail.com","Unmarried"],
];

echo "<table border=1 >";
echo "<tr>
<th>Id</th>
<th>Name</th>
<th>City</th>
<th>Phone</th>
<th>Email</th>
<th>Marital Status</th>

";

for($i=0; $i<count($users);$i++){
    echo "<tr>";
    for($j=0; $j<count($users[$i]);$j++){
        echo "<td>".$users[$i][$j]."</td>";
    }
}
echo "</tr>";
echo "</table>";

// echo "<tr>
// <th>Id</th>
// <th>Name</th>
// <th>City</th>
// <th>Phone</th>
// <th>Email</th>
// <th>Marital Status</th>
// </tr>
// ";

// foreach($users as $user){
//     echo "<tr>";
//     echo "<td>".$user[0]."</td>";
//     echo "<td>".$user[1]."</td>";
//     echo "<td>".$user[2]."</td>";
//     echo "<td>".$user[3]."</td>";
//     echo "<td>".$user[4]."</td>";
//     echo "<td>".$user[5]."</td>";
//     echo "</tr>";
 
// }
// echo "</table>";

?>