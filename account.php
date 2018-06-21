<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/ty.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="js/ty.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
function fun()
{
	var r = confirm("Do you want to return the book");
	if (r == true) {
		window.location.href='return.php';
	} else {
		window.location.href='account.php';
	}

}
</script>
<style>
img.any
{
  width:40%;
  height:40%;
}
</style>

  </head>
  <body>
<div class="container">
<img src="images/final.jpg" id="bg" alt="">
 <div class="col-md-8 col-md-offset-0.9" id="control-group">
 <div>
<div style="width=100%;float=left;font-family:serif;font-style:italic; font-size:50px;">

<h1> Welcome <?php session_start(); echo $_SESSION['username']?>,</h1>
</div>
<div style=" width=40%;float:right;margin-top:-40px;margin-right:-29%">
  <div class="dropdown"  style=padding-top:2%;>
     <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown"><?php  echo $_SESSION['username'] ?>
     <span class="caret"></span></button>

     <ul class="dropdown-menu" >
       <li><a href="profile.php">Profile</a></li><br>
       <li><a href="data.php">Search Book</a></li><br>
       <li><a href="setting.php">Settings</a></li><br>
       <li><a href="logout.php">Sign Out</a></li>
     </ul>
   </div>
</div>
</div >
<div style="padding-top:10%;width:130%;" >
    <table class="table table-bordered" style=" margin-top:-1%; width:200%;">

      <?php
      //session_start();

      $servername = "localhost";
      $username = "root";
      $password = "";


      $conn = new mysqli($servername, $username, $password,"bookbank");

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $studentid = $_SESSION['studentid'];
       $mysql    = "SELECT bookname,returndate,bookid,author,image,status FROM books WHERE studentid ='$studentid'";

      if(!$myresult=$conn->query($mysql))
      {
       die('There was an error running the query ');
      }
		$x =0;
$_SESSION['x'] = $x;
      if($myresult->num_rows==0)
      {
        echo "<br>"."<h3>"."<i>"."Your Account does not have any book. !!"."</i>"."</h3>";
}
      else {

        echo "<thead>";
        echo "<th>"."<strong>"."BOOK ID"."</strong>"."</th>";
        echo "<th>"."BOOK NAME"."</th>";
        echo "<th>"."AUTHOR"."</th>";
        echo "<th>"."IMAGE"."</th>";
        echo "<th>"."STATUS"."</th>";
        echo "<th>"."RETURN DATE"."</th>";
        echo "<th>"."FINE"."</th>";
        echo "</thead>";
        while ($myrow=$myresult->fetch_assoc()) {
          echo "<tr>";
		        $x++;

          echo "<td>".$myrow['bookid']."</td>";
          echo "<td>".$myrow['bookname']."</td>";
          echo "<td>".$myrow['author']."</td>";
          echo "<td>"."<img class='any' src = ".$myrow['image'].".jpg />"."</td>";
          ?>
                <td>
                  <form method="post" action="return.php">
                    <input name="getid" type="hidden" value="<?php echo htmlspecialchars($myrow['bookid']); ?>"/>
                    <button type="submit" onclick="fun();"class="btn btn-default" style="margin-left:2%;" name="borrow" value="return" >Return</button>
                  </form>
                  </td>
          <?php
          echo "<td>".$myrow['returndate']."</td>";
          date_default_timezone_set("Asia/Kolkata");
          $date=date("Y-m-d");
          if($myrow['returndate']>$date)
            echo "<td>"."No Fine"."</td>";
          else {
              echo "<td>"."Over Due Fee"."</td>";
            }

          echo "</tr>";
        }
  $_SESSION['x'] = $x;

	  } ?>


    </table>
  </div>
      <button type="button" class="btn btn-primary" style=" width=40%;float:right;margin-top:40px;margin-right:-18%;" ><a href="data.php"><b style="color:white;">Borrow</b></a></button>
<button type="button" class="btn btn-primary" style=" width=40%;margin-right:-29%;float:right;margin-top:40px;" ><a href="all.php"><b style="color:white;">Return</b></a></button>
        </div>
</div>
  </body>
</html>
