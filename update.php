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
session_start();
$sql = "";
$a="";

if($_POST['design']=="change")
{
	$pass = md5($_POST['now']);
	$studentid = $_SESSION['studentid'];
	$query = "select password from info where studentid='$studentid'";
	if(!$myresult=$conn->query($query))
	{
		die('Could not get current password');
	}
	$row = $myresult->fetch_assoc();
	if($row['password']==md5($_POST['current']))
	{$sql = "update info set password='$pass' where studentid='$studentid'";
	if(!$result=$conn->query($sql))
	{
		die('Could not set password');
	}
	echo "<script>
  alert('Your changes have been made.Please login again');
  window.location.href='logout.php';
  </script>" ;
	}
}
if($_POST['design']=="changephone")
{
  $studentid = $_SESSION['studentid'];
  $query = "select mobileno from additional where studentid='$studentid'";
  if(!$myresult=$conn->query($query))
	{
		die('Could not get current phone no ');
	}
  $row = $myresult->fetch_assoc();
  if($row['mobileno']==$_POST['phone'])
  {
    $phone = $_POST['changemob'];
    $sql = "update additional set mobileno='$phone' where studentid='$studentid'";
    if(!$result=$conn->query($sql))
  	{
  		die('Could not set password');
  	}
    $_SESSION['mobileno'] = $phone;
    echo "<script>
    alert('Your changes have been made. See your changes');
    window.location.href='profile.php';
    </script>" ;
  }
}



else {
  echo "<script>
alert('Your Current data is not right');
window.location.href='setting.php';
</script>" ;
}
?>
