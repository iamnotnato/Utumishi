<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>
        La Delight Hotel | LOGIN
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/material.css" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="sign-in-basic">
    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
        <div class="container">
            <a class="navbar-brand  text-white " href="" rel="tooltip" title="" data-placement="bottom" target="_blank">
      </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>

        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header align-items-start min-vh-100" style="background-image: url('img/daniel-olahh.jpg');" loading="lazy">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
        <center><img src="img/logo.png" alt="logo" style="width: 300px; height: 300px;"></center>
            <div class="row">     
                <div class="col-lg-4 col-md-8 col-12 mx-auto">             
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>

                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" action="" method="post" class="text-start">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="user">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="pass">
                                </div>

                                <div class="text-center">
                                    <button type="submit" value="Login" name="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Register</button>
                                </div>
                                <p class="mt-4 text-sm text-center"><a href="sign-in.php">
                                    Already have an account?
                                  </a>
                                </p>
                            </form>
<?php
date_default_timezone_set('Africa/Nairobi');

if(isset($_POST['submit'])){
  if(!empty($_POST['user']) && !empty($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $logon = date("Y-m-d H:i:s");
    $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
    $db = mysqli_select_db($conn, 'utumishi') or die("DB Error");

    $query = mysqli_query($conn, "SELECT * FROM tm WHERE user='".$user."'");
    $numrows = mysqli_num_rows($query);
    if($numrows  == 0) {
        $salted = "45sdsdaddjabdabda".$pass."adadavjdvuaudy";
        $hashed = hash('murmur3f',$salted);
      $sql = "INSERT INTO tm(user,pass,logon) VALUES('$user','$hashed','$logon')";
      $result = mysqli_query($conn, $sql);
      if($result){
        ?>
      <script>
      alert('Your account has been successfully created. Proceed to Login');
    </script>
    <?php
    echo '<script>window.location="index.php"</script>';
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

    <script type="text/javascript" src="js/material.min.js"></script>
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/parallax.min.js"></script>
    <script src="js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>
<footer class="mdl-mega-footer">
    <div class="mdl-mega-footer__middle-section">
  
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Contact Us</h1>
        <ul class=" mdl-mega-footer__link-list">
          <li><a href=""><p class="white-text"><i class="fa fa-whatsapp" aria-hidden="true"></i> Message us on Whatsapp</p></a></li>
          <li><p class="white-text"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Cell: +254729384323</p></li>
          <li><p class="white-text"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Help Center</p></li>
        </ul>
      </div>
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Let Us Help You:</h1>
        <ul class="mdl-mega-footer__link-list">
          <li><a href=""><p class="white-text">How To Shop On La Delight Hotel</p></a></li>
          <li><a href=""><p class="white-text">Shipping and Delivery</p></a></li>
          <li><a href=""><p class="white-text">Track Your Order</p></a></li>
        </ul>
      </div>
  
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Info</h1>
        <ul class="mdl-mega-footer__link-list">
              <li>  <p class="white-text">Find us:<br>
   Business Centre <br>
  First Floor Room Number 102.<br>
                </p></li><br>
          <li><a href="">
            <b><p class="white-text">CLICK TO NAVIGATE</p></b></a></li>
        </ul>
      </div>
  
      <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h1 class="mdl-mega-footer__heading">Payment Methods</h1>
        <ul class="mdl-mega-footer__link-list">
          <li><a href=""><p class="white-text">MPESA</p></a></li>
          <li><a href=""><p class="white-text">CASH ON DELIVERY</p></a><br> </li>
        </ul>
      </div>
  
    </div>
  
    <div class="mdl-mega-footer__bottom-section float-center">
      <div class="mdl-logo "><center>&copy La Delight Hotel</center></div>
      <ul class="mdl-mega-footer__link-list">
      </ul>
    </div>
  
  </footer>
</html>