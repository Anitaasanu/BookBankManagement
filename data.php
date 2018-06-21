<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/ty.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
      img.any
      {
      	width:40%;
      	height:40%;
      }
      table th
      {
        background-color: #0751c6;
        color:white;
      }

      </style>
<script>
function fun()
{
	var r = confirm("Do you want to borrow the book");
	if (r == true) {
		window.location.href='change.php';
	} else {
		window.location.href='data.php';
	}

}
</script>
  </head>
  <body>
<div class="container">

<form name="find" method="post" action="seek.php">
<table style="margin-top: 2%;">
			<tr class="form-group">
             <td><label  for="search"></label></td>
             <td colspan="5">

      <input type = "text"  id="inputlg" class="form-control input-lg" placeholder="Search Here" name="search"/><br/></td>
           </tr>

           </table>
</form>
<div style=" width=40%;margin-right:10%;float:right;margin-top:-5%;">
  <div class="dropdown"  style=padding-top:2%;style=" width=20%;float:right;margin-top:-5%;">
     <button class="btn btn-primary dropdown-toggle" style="background-color:#0751c6;"type="button" data-toggle="dropdown">
       <?php session_start(); echo $_SESSION['username'] ?>
     <span class="caret"></span></button>

     <ul class="dropdown-menu" >
       <li><a href="profile.php">Profile</a></li><br>
       <li><a href="data.php">Search Book</a></li><br>
       <li><a href="setting.php">Settings</a></li><br>
       <li><a href="logout.php">Sign Out</a></li>

     </ul>
   </div>
 </div>
    <table class="table table-bordered" style="margin-top:3%;">


      <?php


      $servername = "localhost";
      $username = "root";
      $password = "";


      $conn = new mysqli($servername, $username, $password,"bookbank");

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $studentid = $_SESSION['studentid'];
       $mysql    = "SELECT bookname,image,bookid,author,studentid,status FROM books";

      if(!$myresult=$conn->query($mysql))
      {
       die('These credential already exists. ');
      }
      if($myresult->num_rows==0)
      echo "library does not have any book";
      else {

        echo "<tr>";
        echo "<th>"."BOOK ID"."</th>";
        echo "<th>"."BOOK NAME"."</th>";
        echo "<th>"."AUTHOR"."</th>";
         echo "<th>"."IMAGE"."</th>";
        echo "<th>"."STATUS"."</th>";
        echo "</tr>";



        while ($myrow=$myresult->fetch_assoc()) {
          echo "<tr>";
          echo "<td>"."<i>".$myrow['bookid']."</i>"."</td>";
          echo "<td>".$myrow['bookname']."</td>";
          ?>
          <td >
          <?php echo $myrow['author'];?>
          </td>
          <td width="20%">
            <?php
            echo "<img class='any' src = ".$myrow['image'].".jpg />";
            ?>
          </td>
          <?php
            if($myrow['studentid']!="0"){
           ?>
            <td  style="color:red;"><i> Not Available</i></td>
            <?php
          }
          else {
			  $x = $_SESSION['x'];
			  if($x<4)
			  {
            $_SESSION['bookid'] = $myrow['bookid'];
            //echo "<td>"."<a href='".'change.php'."'>".$myrow['status']."</a>"."</td>";
            ?>
            <td>
            <form method="post" action="change.php">
              <input name="getid" type="hidden" value="<?php echo htmlspecialchars($myrow['bookid']); ?>"/>
              <button type="submit" class="btn btn-primary" onclick="fun();" style="margin-left:5%;margin-top:4%;"name="borrow" value="return" >BOOK NOW</button>
            </form>
          </td>
            <?php
          }
		  else{
		  $_SESSION['bookid'] = $myrow['bookid'];
            //echo "<td>"."<a href='".'change.php'."'>".$myrow['status']."</a>"."</td>";
            ?>
            <td  style="color:red;"><i>Not Allowed</i></td>
			<?php
		  }
		  }
          echo "</tr>";
        }
      } ?>


    </table>


  </div>

  </body>
</html>
