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
echo "Connected successfully";
$a=$_POST['title'];
$b=$_POST['purpose'];
$c=$_POST['date'];
$d=$_POST['time'];
$e=$_POST['aname'];
$f=$_POST['atime'];





//$sql = "UPDATE meetingplan SET title='{$_POST['title']}',purpose='{$_POST['purpose']}',date='{$_POST['date']}',time='{$_POST['time']}' where id=2";
$sql="INSERT INTO meetingplan (title,purpose,date,time,aname,atime) VALUES ('$a','$b','$c','$d','$e','$f')"; 



//echo $sql;

$result = $conn->query($sql);
//echo $result->num_rows;


       header('location:meetingplan.php');
//echo "record added successfully";
?>
