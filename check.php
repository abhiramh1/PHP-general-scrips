<?php

$servername = "localhost";
$username = "root";
$password = "inapp";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";





$sql = "SELECT * FROM login WHERE name='{$_POST['name']}' AND password='{$_POST['pwd']}'";
//echo $sql;
$result = $conn->query($sql);
//echo $result->num_rows;
if ($result->num_rows > 0) {
           
        header('location:meetingplan.php');
    
} else {
        echo "invalid username/password";
}
?>
