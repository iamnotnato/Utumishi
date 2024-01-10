<!--
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
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" href="images/logo.png">

<title> utumishi | Login </title>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link href="css/nucleo-icons.css" rel="stylesheet" />
<link href="css/nucleo-svg.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="css/material-kit.min.css?v=3.0.4" rel="stylesheet" />

</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <center><img src="images/logo.png" height="300px" width="300px"></center>
              <div class="card card-plain">
                <h4 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">utumishi</h4>
                <br>
                <h5 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">Empowering law enforcement with reliable technology.</h5>
                <br>
                <div class="card-header pb-0 text-center">
                <h4 class="font-weight-bolder">Sign In</h4>
                <p class="mb-0">Enter your email and password to sign in.</p>
                </div>

                <div class="card-body">

<?php
  if(isset($_POST["submit"])) {
      if(!empty($_POST['email']) && !empty($_POST['password'])) {
          $email = $_POST['email'];
          $password = $_POST['password'];
          $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
          $db = mysqli_select_db($conn, 'utumishi') or die("DB Error");
          $query = mysqli_query($conn, "SELECT * FROM staff WHERE email='".$email."' and password='".$password."'");
          $numrows = mysqli_num_rows($query);
          if($numrows != 0) {
              while($row = mysqli_fetch_assoc($query)) {
                  $dbusername = $row['email'];
                  $dbpassword = $row['password'];
              }
              if($email == $dbusername && $password == $dbpassword) {
                  session_start();
                  $_SESSION['sess_user'] = $email;
                  header("Location: home");
              }
          } else {
              echo "<span class='btn btn-danger text-center'>Incorrect Login Details</span>";
          }
      } else {
          echo "<span class='btn btn-danger text-center'>All fields required</span>";
      }
  }
?>

              <form role="form" action="" method="post">
                <div class="input-group input-group-outline my-3">
                  <input type="email" name="email" class="form-control form-control-lg  input-group-outline" placeholder="Email" aria-label="Email">
                </div>

                <div class="input-group input-group-outline my-3">
                  <input type="password" name="password" class="form-control form-control-lg  input-group-outline" placeholder="Password" aria-label="Password">
                </div>

                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-lg btn-dark btn-lg w-100 mt-4 mb-0">Sign in</button>
                </div>
              </form>

              </div>

              </div>
            </div>

<div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
  <div class="position-relative bg-gradient-info h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
    style="background-image: url('images/wallpaper.jpg');
    background-size: cover;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Utumishi
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/rellax.min.js"></script>
<script src="js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

</body>

</html>
