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
  <link rel="apple-touch-icon" sizes="76x76" href="images/logo.png">
  <link rel="icon" type="image/png" href="images/logo.png">
  <title>
   utumishi | Dashboard
  </title>


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link href="css/nucleo-icons.css" rel="stylesheet" />
<link href="css/nucleo-svg.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="css/material-kit.min.css?v=3.0.4" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="g-sidenav-show bg-dark">
<div class="min-height-300 bg-dark position-absolute w-100" style="background-image: url('images/wallpaper.jpg'); background-repeat: no-repeat; background-size: cover; background-blend-mode: lighten;">
<div class="sidenav-header" ></div>

  
<aside class="sidenav bg-secondary navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">


<div class="sidenav-header" >
 <i class="fas fa-times p-3 cursor-pointer text-secondary position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
<a class="navbar-brand m-0" href="" target="_blank">
<img src="images/logo.png" class="navbar-brand-images h-100" alt="main_logo">
<span class="ms-1 h5 text-white">utumishi</span>
</a>
</div>

<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link" href="home">
 <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-start justify-content-center">
  <i class="material-symbols-outlined ms-1" style="font-size: 24px;">home</i>
</div>
  <span class="ms-1 h5 text-white">Dashboard</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link active" href="newcases">
 <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-start justify-content-center">
  <i class="material-symbols-outlined ms-1" style="font-size: 24px;">box_add</i>
</div>
  <span class="ms-1 h5 text-white">File New Case</span>
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
          <h6 class="font-weight-bolder text-white mb-0">New Case/</h6>
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
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="images/logo.png" alt="" loading="lazy">
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


                <br>
                <br>
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0">File New Case</h3>                       
                </div>
              
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <br>
        
<?php
date_default_timezone_set('Africa/Nairobi');
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "utumishi";

$conn = new mysqli($server, $user, $pass, $dbname);
if(isset($_POST['submit'])){
$namecomplainant = mysqli_real_escape_string($conn, $_POST['namecomplainant']);
$idnumber = mysqli_real_escape_string($conn, $_POST['idnumber']);
$telephonenumber = mysqli_real_escape_string($conn, $_POST['telephonenumber']);
$crimedetails = mysqli_real_escape_string($conn, $_POST['crimedetails']);
$filedby = $_SESSION['sess_user'];
$logon = date("Y-m-d H:i:s");
$timereported = $logon ;

$sql = "INSERT INTO reportedcases (namecomplainant, idnumber , telephonenumber,crimedetails,timereported,filedby) 
VALUES ('$namecomplainant','$idnumber', '$telephonenumber','$crimedetails','$timereported','$filedby')";

if($conn->query($sql) === TRUE){
?>
  <script>
      alert('Your case has been filed successfully.');
    </script>
    <?php
    echo "<span class='btn btn-success text-center'>Your case has been filed successfully.</span>";
}
else{
  echo "Error" . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
      <div class="card box-shadow-xl overflow-hidden mb-5">
<div class="row">
<div class="col-lg-12">
<form class="p-3" id="contact-form" method="post" role="form" action="">
<div class="card-header px-4 py-sm-5 py-3">
<h3>File New Case</h3>
</div>
<div class="card-body pt-1">

<div class="row">
<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="input-group input-group-static mb-4">
<label>Name of Complainant</label>
<input type="text" name="namecomplainant" class="form-control" placeholder="Full Name">
</div>
    </div>
    <div class="col-sm">
    <div class="input-group input-group-static mb-4">
<label>Phone Number</label>
<input type="text" name="telephonenumber" class="form-control" placeholder="Enter Phone Number">
</div>
    </div>
  </div>
</div>
</div>


<div class="row">
<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="input-group input-group-static mb-4">
<label>ID Number</label>
<input type="text" name="idnumber" class="form-control" placeholder="Enter ID Number">
</div>
    </div>
    <div class="col-sm">
    <div class="input-group input-group-static mb-4">
<label>Crime Details</label>
<input type="text" name="crimedetails" class="form-control" placeholder="Specify Crime Details">
</div>
    </div>
  </div>
</div>
</div>


<div class="row">
<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="input-group input-group-static mb-4">
<label>Time Reported</label>
<input type="text" name="timereported" class="form-control" disabled placeholder="Current Time will be recorded">
</div>
    </div>
    <div class="col-sm">
    <div class="input-group input-group-static mb-4">
<label>Filed by:</label>
<input type="text" value="<?=$_SESSION['sess_user'];?>" name="filedby" class="form-control" disabled placeholder="<?=$_SESSION['sess_user'];?>">
</div>
    </div>
  </div>
</div>
</div>


<div class="col-md-6 text-end ms-auto">
<button type="submit" name="submit" class="btn bg-gradient-dark mb-0">File Case</button>
</div>

</div>
</form>
</div>
</div>
</div>
</section>
        
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
  </div>



 
 
           </div>
  </div>
  
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
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>

<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="js/plugins/countup.min.js"></script>


<script src="js/plugins/choices.min.js"></script>

<script src="js/plugins/prism.min.js"></script>
<script src="js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="js/plugins/choices.min.js"></script>





<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<script src="js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>
<?php
}
?>