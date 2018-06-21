
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

      // $bookid = $_SESSION['bookid'];
      // $sql = "UPDATE books set studentid = '0' ,status='Book Now' where bookid='$bookid'";
      //
      // if(!$myresult=$conn->query($sql))
      // {
      //  die('These credential already exists. ');
      // }
      //
      // unset($_SESSION['bookid']);
      // header('Location: account.php');
      if($_POST['borrow']=="return")
      {
          //$bookid =
           $bookid = $_POST['getid'];
           $sql = "UPDATE books set studentid = '0' ,status='Book Now' where bookid='$bookid'";

           if(!$myresult=$conn->query($sql))
          {
           die('These credential already exists. ');
          }

          unset($_SESSION['bookid']);
          header('Location: account.php');
      }


 ?>
