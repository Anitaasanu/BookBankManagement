<?php

session_start();


      $servername = "localhost";
      $username = "root";
      $password = "";


      $conn = new mysqli($servername, $username, $password,"bookbank");

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

  if($_POST['borrow']=="return")
  {
      $studentid = $_SESSION['studentid'];
       $bookid = $_POST['getid'];
       date_default_timezone_set("Asia/Kolkata");
             $date=date("Y-m-d");
             $end = date('Y-m-d', strtotime('+6 months'));
       $sql = "UPDATE books set studentid = '$studentid' , status='Return',issuedate='$date',returndate='$end' where bookid='$bookid'";

       if(!$myresult=$conn->query($sql))
      {
       die('These credential already exists. ');
      }

      unset($_SESSION['bookid']);
      echo "<script>
        alert('Your book has been issued');
        window.location.href='account.php';
        </script>" ;

  }

 ?>
