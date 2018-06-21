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
        width:30%;
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
  <table class="table table-bordered" style="margin-top:3%;">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"bookbank");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if(!isset($_POST['search']))
{
	header('account.php');
}

$sql = "SELECT bookname,bookid,author,image,studentid,status FROM books WHERE (bookname LIKE '%".$_POST['search']."%' ) or  (author LIKE '%".$_POST['search']."%' ) or  (bookid LIKE '%".$_POST['search']."%') ";
if(!$myresult=$conn->query($sql))
{
	die('These was an error while runninng ');
}
if($myresult->num_rows==0)
	echo "Results not found";
else {

	echo "<tr>";
	echo "<th>"."BOOK ID"."</th>";
	echo "<th>"."BOOK NAME"."</th>";
	echo "<th>"."AUTHOR"."</th>";
  echo "<th>"."Image"."</th>";
	echo "<th>"."Status"."</th>";
	echo "</tr>";

while ($myrow=$myresult->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$myrow['bookid']."</td>";
		echo "<td>".$myrow['bookname']."</td>";
		echo "<td>".$myrow['author']."</td>";
echo "<td>"."<img class='any' src = ".$myrow['image'].".jpg />"."</td>";
		if($myrow['studentid']!="0"){?>
<td  style="color:blue;"><i> Not Available</i></td>
<?php
}
    else {
			$_SESSION['bookid'] = $myrow['bookid'];?>
      <td>
      <form method="post" action="change.php">
        <input name="getid" type="hidden" value="<?php echo htmlspecialchars($myrow['bookid']); ?>"/>
        <button type="submit" class="btn btn-primary" onclick="fun();" style="margin-left:5%;margin-top:4%;"name="borrow" value="return" >BOOK NOW</button>
      </form>
    </td>

		<?php }
		echo "</tr>";
	}
}
?>
  </div>
  </table>
  </body>
</html>
