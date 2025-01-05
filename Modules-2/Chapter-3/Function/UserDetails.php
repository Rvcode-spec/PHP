<?Php 


function dummy(){
    echo "<h2>User Details</h2> <br>";
}

function UserDetails(){ // Basic function to display user details
    dummy();
    $name = "John";
    $age = 25;
    $city = "New York";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "City :$city <br>";
}

UserDetails()
?>