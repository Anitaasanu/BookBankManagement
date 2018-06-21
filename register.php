<!Doctype html>
<html lang="en">

<head>
<title>
Your Own Page
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  a:hover{color:red;text-decoration:none;}
  </style>
</head>

<body>
  <div class="container">
<img src="images/pro.jpg" id="bg" alt="">
 <div class="col-md-8 col-md-offset-0.9" id="control-group">
 <div style="padding-top:7%;">
  <h2>Please Sign Up</h2>
  <div><h5>Already a memeber? <a href="login.php" style="color:#000000;">Login</a></h5>
  </div>
  </div>
  </div>
  <hr>

 <div class="col-md-8 col-md-offset-0.9" id="control-group">
  <form method="post" action="dbconnect.php">

    <input type="hidden" value="register" name="type" />
	<div style="padding-top:7%;">
  <table >
          <tr class="form-group">
            <td><label   for="studentid"></label></td>
            <td colspan="5">  <input type = "text" id="inputlg" class="form-control input-lg" name="studentid" placeholder="20XX-KUXX-XXXX"  required/><br/></td>
          </tr>
           <tr class="form-group">
             <td><label  for="name"></label></td>
             <td colspan="5">  <input type = "text"  id="inputlg" class="form-control input-lg" name="name" placeholder="Name"  required/><br/></td>
           </tr>
           <tr class="form-group">
             <td><label  for="course"></label></td>
             <td colspan="5">  <input type = "text"  id="inputlg" class="form-control input-lg" name="course" placeholder="Course"  required/><br/></td>
           </tr>
           <tr class="form-group">
             <td><label  for="password"></label></td>
             <td colspan="5">  <input type = "password"  id="inputlg" class="form-control input-lg" name="password" placeholder="Password"  required/><br/></td>
           </tr>

         </table>
		 </div>
         <div  class="btn-group btn-group-lg" >
        <button class="btn btn-primary btn-block" style="background-color:#232F3E;"type="submit" >Register</button>
      </div>

</form>
</div>
</div>
</body>
</html>
