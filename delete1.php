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

$sql="DELETE FROM meetingplan WHERE title='{$_POST['name']}'";
//echo $sql;
$result = $conn->query($sql);
if ($result) {
header('location:ingg.php');
}
?>