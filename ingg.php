<html>
    <head>
        </head>
        <body>
        <div style="text-align:center"><h2><b><u>Your Meetings</b></u></h2>
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

 echo "<b>Title : </b>" . $row["title"]. "<br>";
 echo "<b>Purpose :</b>" . $row["purpose"]. "<br>";
 echo "<b>Date : </b>". $row["date"]. "<br>";
 echo "<b>Time : </b>". $row["time"]. "<br>";
 echo "<b>Attendee Name : </b>". $row["aname"]. "<br>";
 echo "<b>Attendee Time : </b>". $row["atime"]. "<br><br><br><br><br>";
 }
 
 // header('location:home.php');
 
} else {
 echo "no saved playlist";
}


?>
</div>
<form style="text-align:center" action="alter.php" method="post">
<input type="submit" value="update"></form>
<form style="text-align:center" action="delete.php" method="post">
<input type="submit" value="delete"></form>
<form style="text-align:center" action="meetingplan.php" method="post">
<input type="submit" value="Home"></form>
</body>
</html>