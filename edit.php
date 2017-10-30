
<html>
    <head>

    </head>
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


$sql= "SELECT * FROM meetingplan";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // output data of each row
 
 while($row = $result->fetch_assoc()) {

$sql1 = "UPDATE meetingplan SET title='{$_POST['title']}',purpose='{$_POST['purpose']}',date='{$_POST['date']}',time='{$_POST['time']}',aname='{$_POST['aname']}',atime='{$_POST['atime']}' where id='{$_POST['id']}'";
///echo $sql1;
$result1 = $conn->query($sql1);


}}
header('location:ingg.php');
?>


 
</html>

