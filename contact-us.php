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
  <link rel="apple-touch-icon" sizes="76x76" href="app/images/apple-icon.png">
  <link rel="icon" type="image/png" href="app/images/logo.png">
  <title>
    utumishi | Contact Us
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="app/css/nucleo-icons.css" rel="stylesheet" />
  <link href="app/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="app/css/material-kit.min.css?v=3.0.4" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="contact-us">

<!-- Navbar Dark -->
<nav
  class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand text-white" href="" rel="tooltip" title="Empowering law enforcement with reliable technology." data-placement="bottom" target="_blank">
      Utumishi
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">

    <ul class="navbar-nav ms-auto">

<li class="nav-item px-3">
    <a href="index.php" class="nav-link text-white opacity-8">
      Home
    </a>
  </li>

<li class="nav-item px-3">
    <a href="contact-us.php" class="nav-link text-white opacity-8">
      Contact Us
    </a>
  </li>

  <li class="nav-item px-3">
    <a href="app/index.php" class="nav-link text-white opacity-8">
      Login
    </a>
  </li>
</ul>

    </div>
  </div>
</nav>
<!-- End Navbar -->

  <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('app/images/wallpaper4.jpg'); background-size: cover;" loading="lazy"></div>
          </div>
          <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">

          <center><img src="app/images/logo.png" height="300px" width="300px"></center>
          <br>
                <h4 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">utumishi | Contact Form</h4>
                <br>
                <h5 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">Empowering law enforcement with reliable technology.</h5>
                <br>

            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">

            
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg p-3">
                  <h3 class="text-white text-primary mb-0">Contact us</h3>
                </div>
              </div>
              <div class="card-body">
                <p class="pb-3">
                  For further questions, please email hello@utumishi.com
                  or contact us using our contact form.
                </p>
                <form id="contact-form" method="post" autocomplete="off">
                  <div class="card-body p-0 my-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Full Name</label>
                          <input name="fullname" type="text" class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="col-md-6 ps-md-2">
                        <div class="input-group input-group-static mb-4">
                          <label>Your Email</label>
                          <input name="email" type="email" class="form-control" placeholder="hello@utumishi.com">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>How can we help you?</label>
                          <input name="sentsms" type="text" class="form-control" placeholder="Enter your message here">
                        </div>
                      </div>


                    <div class="row">
                      <div class="col-md-12 text-center">
                        <button name="submit" type="submit" class="btn bg-gradient-dark mt-3 mb-0">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "utumishi";

$conn = new mysqli($server, $user, $pass, $dbname);
if(isset($_POST['submit'])){
$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$sentsms = mysqli_real_escape_string($conn, $_POST['sentsms']);

$sql = "INSERT INTO feedback (fullname, email, sentsms) 
VALUES ('$fullname','$email','$sentsms')";

if($conn->query($sql) === TRUE){
?>
  <script>
      alert('Your message has been recorded.');
    </script>
    <?php
  echo "Your message has been recorded.";
}
else{
  echo "Error" . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

  <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="index.php">
              <img src="app/images/logo.png" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Utumishi</h6>
          </div>
   
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php" target="_blank">
                  About Us
                </a>
              </li>

            </ul>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php" target="_blank">
                  Contact Us
                </a>
              </li>

            </ul>
          </div>
        </div>


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


  <!--   Core JS Files   -->
  <script src="app/js/core/popper.min.js" type="text/javascript"></script>
  <script src="app/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="app/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="app/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>