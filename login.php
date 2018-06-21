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
</head>

<body >
  <div class="container">
  <img src="images/anu.jpeg" id="bg" alt="">
 <div class="col-md-8 col-md-offset-0.9" id="control-group">
 <div style="padding-top:7%;">
  <h2>Please Login</h2>
  <h5> <a href="register.php">Back to home page</a></h5>
  

  <form method="post" action="dbconnect.php">
    <input type="hidden" value="login" name="type" />
  <table>
          <tr class="form-group">
            <td><label   for="studentid"></label></td>
            <td colspan="10">  <input type = "text" id="inputlg" class="form-control input-lg" name="studentid" placeholder="Student Id"  required/><br/></td>
          </tr>

           <tr class="form-group">
             <td>  <label for="pass"></label></td>
             <td colspan="10"><input type = "password"  id="inputlg" class="form-control input-lg" name="password" placeholder="Password"  required/><br/></td>
           </tr>
         </table>
         <h4>Forgot Your Password??</h4>
         
         <div  class="btn-group btn-group-lg" >
        <button class="btn btn-primary btn-block" type="submit" >LogIn</button>
      </div>
</form>
</div>
</body>
</html>
