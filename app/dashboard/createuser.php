<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "utumishi");
if(!isset($_SESSION['sess_user'])){
  header("Location:login.php");
}
else
{
?>
<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/logo.png">
  <link rel="icon" type="image/png" href="../images/logo.png">
  <title>
   utumishi | Dashboard
  </title>


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link href="../css/nucleo-icons.css" rel="stylesheet" />
<link href="../css/nucleo-svg.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="../css/material-kit.min.css?v=3.0.4" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="g-sidenav-show bg-dark">
<div class="min-height-300 bg-dark position-absolute w-100" style="background-image: url('../images/wallpaper.jpg'); background-repeat: no-repeat; background-size: cover; background-blend-mode: lighten;">
<div class="sidenav-header" ></div>

  
<aside class="sidenav bg-secondary navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">


<div class="sidenav-header" >
 <i class="fas fa-times p-3 cursor-pointer text-secondary position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
<a class="navbar-brand m-0" href="" target="_blank">
<img src="../images/logo.png" class="navbar-brand-images h-100" alt="main_logo">
<span class="ms-1 h5 text-white"> utumishi </span>
</a>
</div>

<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link active" href="home">
 <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-start justify-content-center">
  <i class="material-symbols-outlined ms-1" style="font-size: 24px;">home</i>
</div>
  <span class="ms-1 h5 text-white">Dashboard</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="cases">
 <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-start justify-content-center">
  <i class="material-symbols-outlined ms-1" style="font-size: 24px;">person_alert</i>
</div>
  <span class="ms-1 h5 text-white">Cases</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="feedback">
 <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-start justify-content-center">
  <i class="material-symbols-outlined ms-1" style="font-size: 24px;">mail</i>
</div>
  <span class="ms-1 h5 text-white">Feedback</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="createuser">
 <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-start justify-content-center">
  <i class="material-symbols-outlined ms-1" style="font-size: 24px;">person_add</i>
</div>
  <span class="ms-1 h5 text-white">Users</span>
</a>
</li>


<hr class="horizontal dark mt-0">


</ul>
</div>

</aside>
  
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard/</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Manage Users/</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">

            </div>
          </div>

        </div>
      </div>
    </nav>
    <!-- End Navbar -->
 




      <div class="container-fluid py-4">

      
        <br>
        <br>
      </div>

      <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="../images/logo.png" alt="" loading="lazy">
            </div>
            <div class="row py-5">
              <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0"><?=$_SESSION['sess_user'];?></h3>
                  <div class="d-block">
                 
                  <h4 class="mb-0"> <i class="material-symbols-outlined ms-1 text-success" style="font-size: 24px;">signal_cellular_alt</i> Online</h4> 
                </div>

                <div class="d-block">
                 
                 <a href="logout" class="mb-0 h4"> <i class="material-symbols-outlined ms-1" style="font-size: 24px;">switch_account</i> Sign Out</a> 
               </div>

                </div>              
              </div>




              
            </div>


            <div class="row">     
                <div class="col-lg-4 col-md-8 col-12 mx-auto">             
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register Administators</h4>

                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" action="" method="post" class="text-start">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="pass">
                                </div>

                                <div class="text-center">
                                    <button type="submit" value="Login" name="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Register</button>
                                </div>
                               
                            </form>
<?php
date_default_timezone_set('Africa/Nairobi');

if(isset($_POST['submit'])){
  if(!empty($_POST['email']) && !empty($_POST['pass'])){
    $user = $_POST['email'];
    $pass = $_POST['pass'];
     $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
    $db = mysqli_select_db($conn, 'utumishi') or die("DB Error");

    $query = mysqli_query($conn, "SELECT * FROM admins WHERE email='".$email."'");
    $numrows = mysqli_num_rows($query);
    if($numrows  == 0) {
        $salted = "45sdsdaddjabdabda".$pass."adadavjdvuaudy";
        $hashed = hash('murmur3f',$salted);
      $sql = "INSERT INTO admins (email,pass) VALUES('$user','$hashed')";
      $result = mysqli_query($conn, $sql);
      if($result){
        ?>
      <script>
      alert('Your account has been successfully created. Proceed to Login');
    </script>
    <?php
    echo '<script>window.location="createuser.php"</script>';
      }
      else{
        echo "Failed to create account";
      }
    }
    else{
      echo "That username already exists. Please choose another";
    }
  }
  else{
    ?>
    <script>
      alert('Fields cannot be left blank');
    </script>
    <?php
  }
}
?> 
   </div>
                    </div>
                </div>
            </div>


           
              </div>




              <div class="row py-5">
              <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  
                </div>


                <br>
                <br>
              
              </div>




              
            </div>



            <div class="row">     
                <div class="col-lg-4 col-md-8 col-12 mx-auto">             
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register Staff Users</h4>

                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" action="" method="post" class="text-start">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="emails">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="passwords">
                                </div>

                                <div class="text-center">
                                    <button type="submit" value="Login" name="submitted" class="btn bg-gradient-dark w-100 my-4 mb-2">Register</button>
                                </div>
                                
                            </form>
<?php
date_default_timezone_set('Africa/Nairobi');

if(isset($_POST['submitted'])){
  if(!empty($_POST['emails']) && !empty($_POST['passwords'])){
    $emails = $_POST['emails'];
    $passwords = $_POST['passwords'];
      $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
    $db = mysqli_select_db($conn, 'utumishi') or die("DB Error");

    $query = mysqli_query($conn, "SELECT * FROM staff WHERE emails='".$emails."'");
    $numrows = mysqli_num_rows($query);
    if($numrows  == 0) {
        $salted = "45sdsdaddjabdabda".$pass."adadavjdvuaudy";
        $hashed = hash('murmur3f',$salted);
      $sql = "INSERT INTO staff(emails,passwords) VALUES('$emails','$hashed')";
      $result = mysqli_query($conn, $sql);
      if($result){
        ?>
      <script>
      alert('Your account has been successfully created. Proceed to Login');
    </script>
    <?php
    echo '<script>window.location="createuser.php"</script>';
      }
      else{
        echo "Failed to create account";
      }
    }
    else{
      echo "That username already exists. Please choose another";
    }
  }
  else{
    ?>
    <script>
      alert('Fields cannot be left blank');
    </script>
    <?php
  }
}
?> 
   </div>
                    </div>
                </div>
            </div>



          </div>
        </div>
      </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
             
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
  
  </main>






  <div class="col-12">
          <div class="text-center">
            <p class="text-white my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Utumishi
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  !--   Core JS Files   -->
<script src="../js/core/popper.min.js" type="text/javascript"></script>
<script src="../js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/plugins/perfect-scrollbar.min.js"></script>

<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="../js/plugins/countup.min.js"></script>


<script src="../js/plugins/choices.min.js"></script>

<script src="../js/plugins/prism.min.js"></script>
<script src="../js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="../js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.../js/ -->
<script src="../js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="../js/plugins/choices.min.js"></script>





<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<script src="../js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>
<?php
}
?>