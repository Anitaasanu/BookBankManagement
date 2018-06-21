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
if($_POST['add']=="profile")
{
	$name = $_POST['name'];
	$fathername = $_POST['fathername'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$mobileno = $_POST['mobileno'];
	$branch = $_POST['branch'];
	$semester = $_POST['semester'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$postaladdress = $_POST['postaladdress'];
	$studentid = $_SESSION['studentid'];
	$sql = "INSERT INTO additional (name, fathername,gender,email,dob,mobileno,branch,semester,state,city,postaladdress,studentid)
	VALUES ('$name','$fathername', '$gender', '$email','$dob','$mobileno','$branch','$semester','$state','$city','$postaladdress','$studentid')";
	if(!$result=$conn->query($sql))
	{
		die('Could not insert values in profile ');
	}
	$_SESSION['name'] = $name;
	$_SESSION['fathername'] = $fathername;
	$_SESSION['dob'] = $dob;
	$_SESSION['mobileno'] = $mobileno;
	$_SESSION['branch'] = $branch;
	$_SESSION['semester'] = $semester;
	$_SESSION['city'] = $city;
	$_SESSION['state'] = $state;
	$_SESSION['postaladdress'] = $postaladdress;
	$_SESSION['gender'] = $gender;
	$_SESSION['email'] = $email;
	echo "<script>
	  alert('Your record has been recorded');
	  window.location.href='account.php';
	  </script>" ;

}
else {
	echo "not done";
}


?>
