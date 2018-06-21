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
$x = $_SESSION['x'];
$studentid = $_SESSION['studentid'];
$sql = "update books set studentid='0' where studentid='$studentid'";
if(!$result=$conn->query($sql))
{
 die('These credential already exists. ');
}
if($x>0){
echo "<script>
alert('All books have been returned');
window.location.href='account.php';
</script>" ;
}
else {
  echo "<script>
  alert('Your accout does not have any book. Go back to Account page');
  window.location.href='account.php';
  </script>" ;

}

 ?>
