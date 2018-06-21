<?php
session_start(); ?>
<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style1.css">
      <script src="js/ty.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>
  <body>
  <div class="container" style="margin-top:2.5%;">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $_SESSION['name']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/logo1.jpg" class="img-circle img-responsive"> </div>


                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><?php echo $_SESSION['name'];?></td>
                      </tr>
                      <tr>
                        <td>Father's Name:</td>
                        <td><?php echo $_SESSION['fathername'];?></td>
                      </tr>
                      <tr>
                        <td>Postal Address:</td>
                        <td><?php echo $_SESSION['postaladdress'];?></td>
                      </tr>

                         <tr>
                             <tr>
                        <td>Gender:</td>
                        <td><?php echo $_SESSION['gender'];?></td>
                      </tr>
                        <tr>
                        <td>city:</td>
                        <td><?php echo $_SESSION['city'];?></td>
                      </tr>
					   <tr>
                        <td>state:</td>
                        <td><?php echo $_SESSION['state'];?></td>
                      </tr>
					                          <tr>
                        <td>Semester:</td>
                        <td><?php echo $_SESSION['semester'];?></td>
                      </tr>
					   <tr>
                        <td>Branch:</td>
                        <td><?php echo $_SESSION['branch'];?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a ><?php echo $_SESSION['email'];?></a></td>
                      </tr>
                        <td>Phone Number:</td>
                        <td><?php echo $_SESSION['mobileno'];?></td>

                      </tr>

                    </tbody>
                  </table>

                  <a href="account.php" class="btn btn-primary">Exit Profile</a>
                  <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                   <a href="setting.php" >
<img src="images/65.png" alt="" width="35" height="35" border="0"  style=" border-radius: 10%;">
</a>
                        <span class="pull-right">
      <a data-original-title="Remove this user" data-toggle="tooltip" type="button" href="account.php" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>

          </div>
        </div>
      </div>
    </div>





  </body>
</html>
