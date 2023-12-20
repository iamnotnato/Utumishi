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
  
<div class="container">
  <div class="row">
    <div class="col-sm">
      <span>One of three columns</span>
      Officers oN Duty
      OB
      <button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
</button>


<button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
</button>

<button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
</button>

<button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
</button>
    </div>
    <div class="col-sm">
      <span>One of three columns</span>
      <h1>Current date and time:</h1>
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
      <span>One of three columns</span>
      LOst Vehicels
      LOst itemss
      Prisoners 
      Court Dates

      <button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
</button>


<button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
</button>

<button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
</button>

<button class="btn btn-icon btn-3 btn-primary" type="button">
	<span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
  <span class="btn-inner--text">With icon</span>
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
