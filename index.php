<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
<link rel="icon" type="image/png" href="img/logo.png">

<title> Utumishi | LOGIN </title>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link href="css/nucleo-icons.css" rel="stylesheet" />
<link href="css/nucleo-svg.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="css/material-kit.css?v=3.0.4" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">
  
 <div class="page-header align-items-start min-vh-100" style="background-image: url('img/facebook_cover_photo_2.png');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">

        <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
          <div class="p-3 info-horizontal">
          <center><img src="img/logo.png" height="100px" width="100px"></center>
          </div>
        <div class="description ps-3">
        <h4 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">Utumishi</h4>
        <h5 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">Here To Serve</h5>
          </div>
        </div>
          
            <div class="card-body">
              <form role="form" class="text-start" action="" method="post">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>

                <div class="text-center">
                  <button type="submit" name="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign in</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<?php
  if(isset($_POST["submit"])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
      $db = mysqli_select_db($conn, 'utumishi') or die("DB Error");
      $query = mysqli_query($conn, "SELECT * FROM staff WHERE email='".$email."' and password='".$password."'");
      $numrows = mysqli_num_rows($query);
        if($numrows !=0){
          while($row = mysqli_fetch_assoc($query)){
          $dbusername = $row['email'];
          $dbpassword = $row['password'];
          }
        if($email == $dbusername && $password == $dbpassword){
          session_start();
          $_SESSION['sess_user']=$email;
          header("Location: home.php");
          }
          }
        else{
        echo "Incorrect Login Details";
          }
        }
        else
        {
        echo "All fields required";
        }
  }
?>

<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/countup.min.js"></script>
<script src="js/plugins/choices.min.js"></script>
<script src="js/plugins/prism.min.js"></script>
<script src="js/plugins/highlight.min.js"></script>

<script src="js/plugins/rellax.min.js"></script>
<script src="js/plugins/tilt.min.js"></script>
<script src="js/plugins/choices.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

</body>

</html>
