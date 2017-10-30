<?php

?>



<html>
    <head>
        <title>MyMeets</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
    </head>
    <body >
   
    
        <div style="float:left;width:100%;">
        <img src="https://openclipart.org/download/276483/1490609861.svg" style="float:left;height:170px;width:170px ;background-color:#3399FF;width:100%">
                   </div>
            <div style="background-color:lightgrey;width:100%;height:100%">
            
           <br><br><br><br><br><br><br>


            <div class="container">
            <h2>MyMeets</h2><br>
            <form action="insert.php" method="post">
              <div class="form-group">
                <label >Title of Meeting</label>
                <input type="text" class="form-control" name="title" >
              </div>
              <div class="form-group">
                <label >Purpose of Meeting</label>
                <input type="text" class="form-control" name="purpose" >
              </div>
              <div class="form-group">
                <label > Date</label>
                <input type="text" class="form-control" name="date" >
              </div>
              <div class="form-group">
                <label > Time</label>
                <input type="text" class="form-control" name="time" >
              </div>
              <div class="form-group">
                <label > Attendee Name</label>
                <input type="text" class="form-control" name="aname" >
              </div>
              <div class="form-group">
                <label > Attendee Time</label>
                <input type="text" class="form-control" name="atime" >
              </div>
              <br><br><br>
              
              <input type="submit" value="next"></button>
            </form>
         </div>    
         
         

<div>
<form style="text-align:center" action="managemeet.php" method="post">
<input type="submit" value="ManageMeet">
</form>
               


