<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"bookbank");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<img src="images/vinu.png" id="bg" alt="">



  <form class="form-horizontal"  method="post" action="update.php" >

  <h3 style="font-family:sarif;font-weight:bold; ">Change Password:</h3>

 <div class="form-group" style="margin-left:10%;">
    <div class="form-group" style="margin-top:1%;">

      <label class="control-label col-sm-2" for="current">Current Password:</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" name="current" id="current">
      </div>
   </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="now">New Password:</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" id="now" name="now" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="confirm">Confirm Password:</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" id="confirm" name="confirm">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="design"  value="change">Change</button>
      </div>
    </div>
	</div>
  </form>
  <br><br>
  <form class="form-horizontal" method="post" action="update.php">
		<input type="hidden" value="design" name="changephone" />
	<h3 style="font-family:sarif;font-weight:bold;">Change Mobile No:</h3>
	<div class="form-group" style="margin-left:10%;">
    <div class="form-group" style="margin-top:2%;">
      <label class="control-label col-sm-2" for="phone">Phone no:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="phone" id="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="newphone">New Contact No:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="newphone" name="changemob" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="design" value="changephone">Change</button>
      </div>
    </div>
	</div>
  </form>

</div>

</body>
</html>
