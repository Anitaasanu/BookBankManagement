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


 if($_POST['type']=="register")
 {
   $studentid = $_POST['studentid'];
   $name = $_POST['name'];
   $password = md5($_POST['password']);
   $course = $_POST['course'];
   $sql = "INSERT INTO info (studentid, name,course,password)
   VALUES ('$studentid','$name', '$course', '$password')";
    $_SESSION['studentid'] = $studentid;
    $_SESSION['username'] = $name;
 }

   else
{
    $a=($_POST['studentid']);
    $sql="SELECT password FROM info WHERE studentid='$a'"; //check given password and already stored password
}
if(!$result=$conn->query($sql))
{
 die('These credential already exists. ');
}

else if($_POST['type']=="register")
{
  header('Location: fill.php');

}
//$conn->close(); //close call
if($_POST['type']=="login") //if login page
{
   $row = $result->fetch_assoc();

   if($row['password']== md5($_POST['password']))
   {
   		$_SESSION['password'] = $row['password'];
       $_SESSION['studentid'] = $a;
       $mysql = "SELECT name FROM info WHERE studentid='$a'";
       if(!$myresult=$conn->query($mysql))
       {
        die('Not found username ');
       }
       $myrow = $myresult->fetch_assoc();
       $_SESSION['username'] = $myrow['name'];
       $sql = "SELECT *from additional where studentid='$a'";
       if(!$result=$conn->query($sql))
       {
        die('Could not get additional information');
       }
       $row = $result->fetch_assoc();
       $_SESSION['name'] = $row['name'];
       $_SESSION['fathername'] = $row['fathername'];
       $_SESSION['dob'] = $row['dob'];
       $_SESSION['mobileno'] = $row['mobileno'];
       $_SESSION['branch'] = $row['branch'];
       $_SESSION['semester'] = $row['semester'];
       $_SESSION['city'] = $row['city'];
       $_SESSION['state'] = $row['state'];
       $_SESSION['postaladdress'] = $row['postaladdress'];
       $_SESSION['gender'] = $row['gender'];
       $_SESSION['email'] = $row['email'];
       header('Location: account.php');
       exit(0);
   }
   else
   {
     echo "<script>
  alert('Enter mail or password does not match. Try again');
  window.location.href='login.php';
  </script>" ;
   }
}

?>
