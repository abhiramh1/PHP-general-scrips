
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
       

</head>
<body>


<table>
<tr> 
<th>Required Date</th>
</tr>


<form action="$_SELF_PHP" method="post">
              <div class="form-group">
                <label >date</label>
                <input type="text" class="form-control" name="title" >
              </div>





<?php
$hostname="localhost";
$username="root";
$password="inapp"; 
$db = "mydb";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";







$sql="SELECT date FROM mymeets ";
//echo $query;
$result = $conn->query($sql);
echo $result;
   $row = $result->fetch_assoc();
    //echo $row;
	echo $row["date"];
//foreach($dbh->query('SELECT FROM mymeets CONVERT_TZ("2008-05-15 12:00:00","+00:00","+10:00") as required_datetime') as $row) {
//echo "<tr>";
//echo "<td>" . $row['required_datetime'] . "</td>";
//echo "</tr>";
//}



?>
</tbody></table>
</div>
</div>
</div>
<!-{$_POST['name']}-->
</body>
</html>
