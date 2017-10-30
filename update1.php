
<html>
    <head></head>
    <body>
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
?>

<form style="text-align:center" action="edit.php" method="post">
              <div class="form-group">
                <label >Title of Meeting</label>
                <input type="text" class="form-control" name="title" value="<?php echo $row["title"];?>" >
              </div>
              <div class="form-group">
                <label >Purpose of Meeting</label>
                <input type="text" class="form-control" name="purpose"  value="<?php echo $row["purpose"];?>">
              </div>
              <div class="form-group">
                <label > Date</label>
                <input type="text" class="form-control" name="date"  value="<?php echo $row["date"];?>" >
              </div>
              <div class="form-group">
                <label > Time</label>
                <input type="text" class="form-control" name="time"  value="<?php echo $row["time"];?>">
              </div>
              
<input type="submit" value="submit">
</body>
              <br><br><br>

              





 <?php
 
 

 }
}


?>


</body>
</html>
