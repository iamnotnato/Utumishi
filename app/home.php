<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "utumishi");
if(!isset($_SESSION['sess_user'])){
  header("Location:index.php");
}
else
{
?>

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

<title> utumishi | LOGIN </title>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link href="css/nucleo-icons.css" rel="stylesheet" />
<link href="css/nucleo-svg.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="css/material-kit.css?v=3.0.4" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">
  
  
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Material Kit 2
    </a>

  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

<header class="header-2">
  <div class="page-header min-vh-90 relative" style="background-image: url('images/wallpaper.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <span>One of three columns</span>
    </div>
    <div class="col-sm">
      <span>One of three columns</span>
    </div>
    <div class="col-sm">
      <span>One of three columns</span>
    </div>
  </div>
</div>
  </div>
</header>
</body>

</html>
<?php
}
?>