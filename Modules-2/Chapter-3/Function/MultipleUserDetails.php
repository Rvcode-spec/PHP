<?php

echo "<h3>Using The Parametesrs Function in Multiple User Details</h3><br>";

function UserDetails($name, $age, $gender, $email, $phone){
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
}
// calling the function with parameters
UserDetails("Suknayaa Singh", 21, "Female", "suknayaa.singh@gmail.com", 9876543210);
echo "<br>";
UserDetails("Ravi Singh", 23, "Male", "ravi.singh@gmail.com", 9876543211);
?>