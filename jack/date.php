<html>
<head>
</head>
<body>

<h2>Calculating a datetime, converting 2008-05-15 12:00:00 to a time zone which is ten hours ahead using MySQL:</h2>
<table>
<tr> 
<th>Required Date</th>
</tr>

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

$sql=







//$dbh = new PDO("mysql:host=$hostname; dbname=$db", $username, $password);
//foreach($dbh->query('SELECT CONVERT_TZ("2008-05-15 12:00:00","+00:00","+10:00") as required_datetime') as $row) {
//echo "<tr>";
//echo "<td>" . $row['required_datetime'] . "</td>";
//echo "</tr>";

?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>
