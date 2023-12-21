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
  
<nav
  class="navbar navbar-expand-lg top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
  <div class="container">
    <a class="navbar-brand  text-Gray 900 " href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      <h4>Utumishi</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
     
        <li class="nav-item px-3">
          <a class="nav-link text-muted">
          <span class="d-sm-inline d-none"><h4>Signed In As</h4></span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-muted font-weight-bold px-0">
                
                <span class="d-sm-inline d-none"><h4><i class="fa fa-user fa-2xl text-muted"></i> Sign Out</h4></span>
              </a>
            </li>

          </ul>

    
    </div>
  </div>
</nav>
<!-- End Navbar -->


</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
    <span><h4>Current date and time : </h4></span>
    <span id="datetime"></span>

    <script>
      // create a function to update the date and time
      function updateDateTime() {
        // create a new `Date` object
        const now = new Date();

        // get the current date and time as a string
        const currentDateTime = now.toLocaleString();

        // update the `textContent` property of the `span` element with the `id` of `datetime`
        document.querySelector('#datetime').textContent = currentDateTime;
      }

      // call the `updateDateTime` function every second
      setInterval(updateDateTime, 1000);
    </script>
    </div>

    <div class="col-sm">
    <center><img src="img/logo.png" height="100px" width="100px"></center>
      
              <h4 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">Utumishi</h4>
        <h5 class="text-Secondary font-weight-bolder text-center mt-2 mb-0">Here To Serve</h5>
    </div>

    
  <div class="col-sm">
  <button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="fa fa-exclamation me-sm-1"></i></span>
  <span class="btn-inner--text">Report Case</span>
  </button>
  </div>
  </div>
</div>


<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/rellax.min.js"></script>
<script src="js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

</body>
</html>
