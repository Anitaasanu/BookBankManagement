<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="container">
<img src="images/60.jpg" id="bg" alt="">
 <div class="col-md-8 col-md-offset-0.9" id="control-group">
 <div style="padding-top:7%;">

  <h2 style="font-family:serif;font-style:italic; font-size:200%;">Now Fill This Information:</h2><br>

  <form class="form-horizontal" action="sum.php" method="post">
    <input type="hidden" value="profile" name="add" />

  <div class="form-inline">
    <div class="form-group" style="margin-right:5%;">
      <label class="sr-only" for="name">name:</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>

    <div class="form-group" style="margin-right:5%;">
      <label class="sr-only" for="father name">fathername</label>
      <input type="text" class="form-control" name="fathername" placeholder="Enter Father Name">
    </div>
	<div class="form-group">
      <label class="sr-only" for="postal address">postaladdress</label>
      <input type="text" class="form-control" name="postaladdress" placeholder="Enter postal address">
    </div>


	</div>
	<br><br>
  <div class="form-inline">

    <div class="form-group">
      <label class="sr-only" for="city">city:</label>
      <input type="text" class="form-control" name="city" placeholder="Enter Your city">
    </div>
    <div class="form-group" style="margin-left:5%;">

      <label class="sr-only" for="branch">state:</label>
      <input type="text" class="form-control" name="state" placeholder="Enter your State">
    </div>
	</div>
	<br><br>
	<div class="form-inline" style="margin-left:-2.1%;">

<div class="form-group">

          <div class="col-sm-0"></div>
        <div class="col-sm-2">
        <select class="form-control"  name="gender" required>
          <option>Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>

        </select>
        </div>
      </div>

	<div class="form-group">

          <div class="col-sm-1"></div>
        <div class="col-sm-2">

        <select class="form-control"  name="semester" required>
          <option >Semester</option>
          <option value="Odd">Odd</option>
          <option value="Even">Even</option>

        </select>
        </div>
      </div>
	  <div class="form-group">

          <div class="col-sm-1"></div>
        <div class="col-sm-2">

        <select class="form-control"  name="branch" required>
          <option >Branch</option>
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
		  <option value="Electrical">Electrical</option>
          <option value="civil">Civil</option>

        </select>
        </div>
      </div>
	</div>
	<br><br>
	<div class="form-inline">

	<div class="form-group">
      <label class="sr-only" for="DOB">DOB</label>
      <input type="date" class="form-control" name="dob" placeholder="DD/MM/YEAR">
    </div>
	<div class="form-group" style="margin-left:5%;">
      <label class="sr-only" for="mobileno">mobileno.</label>
      <input type="text" class="form-control" name="mobileno" placeholder="Enter Your Mobile Number">
    </div>
	</div>
	<br><br>

  <!--  <button type="submit" class="btn btn-default">Submit</button>-->
  <div class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your email id">
  </div>



</div>

<br><br>
  <button type="submit" name="add" value="profile" class="btn btn-default" style="background:#0101A9;color:white;">Submit</button>

</form>
</div>

</body>
</html>
