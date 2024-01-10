<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "ladelighthotel");
if(!isset($_SESSION['sess_user'])){
  header("Location:login.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../img/logo.png">
  <link rel="icon" type="image/png" href="../img/logo.png">
  <title>
Admin Dashboard
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="css/nucleo-icons.css" rel="stylesheet" />
  <link href="css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>  
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8"></h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
            
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">LOGGED IN AS</span>
                <span class="d-sm-inline d-none"> <?=$_SESSION['sess_user'];?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-warning shadow-warning border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-center text-capitalize ps-3">Orders</h6>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Town</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone Number</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class="d-flex flex-column justify-content-center">
                        <?php 
                    $query = "SELECT * FROM orders ORDER BY id ASC";
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while ($row = mysqli_fetch_array($result)) {
                        ?>
                    
                      <tr>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["id"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["customer_name"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["town"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["phone_number"]; ?> </td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["product_name"]; ?> </td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["quantity"]; ?> </td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["total"]; ?> </td>
                        <td><input type="button" class="font-weight-bold mb-0 align-middle text-center" 
                        onclick="deleteme(<?php echo $row['id']; ?>)" name="Delete" value="Delete"></td>
                      </tr>
                    
                      <?php
                    }
}
                      ?>
                    </tr>
                  </tbody>
                </table>
                <script language="javascript">
  function deleteme(delid)
  {
    if(confirm("Do you want to delete this record?")){
      window.location.href='deleteorders.php?del_id=' +delid+'';
      return true;
    }
  }
</script>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Second Table-->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-secondary shadow-secondary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize text-center ps-3">Products</h6>
                <center><button type="button" class="btn btn-block bg-gradient-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">Add Product</button></center>
            </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class="d-flex flex-column justify-content-center">
                        <?php 
                    $query = "SELECT * FROM products ORDER BY id ASC";
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while ($row = mysqli_fetch_array($result)) {
                        ?>
                    
                      <tr>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["id"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["p_name"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["description"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["price"]; ?> </td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["image"]; ?> </td>
                        <td><input type="button" class="font-weight-bold mb-0 align-middle text-center" 
                        onclick="deleteproduct(<?php echo $row['id']; ?>)" name="Deleteprod" value="Delete"></td>
                      </tr>
                    
                      <?php
                    }
}
                      ?>
                    </tr>
                  </tbody>
                </table>
                <script language="javascript">
  function deleteproduct(delid)
  {
    if(confirm("Do you want to delete this record?")){
      window.location.href='deleteproducts.php?del_id=' +delid+'';
      return true;
    }
  }
</script>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!--Second Table-->
       <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize text-center ps-3">Admin Users</h6>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Admin Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pass</th>

                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class="d-flex flex-column justify-content-center">
                        <?php 
                    $query = "SELECT * FROM admin ORDER BY id ASC";
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while ($row = mysqli_fetch_array($result)) {
                        ?>
                    
                      <tr>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["id"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["user"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["pass"]; ?></td>
                        <td><input type="button" class="font-weight-bold mb-0 align-middle text-center" 
                        onclick="deleteadmin(<?php echo $row['id']; ?>)" name="Deleteadmin" value="Delete"></td>
                      </tr>
                    
                      <?php
                    }
}
                      ?>
                    </tr>
                  </tbody>
                </table>
                <script language="javascript">
  function deleteadmin(delid)
  {
    if(confirm("Do you want to delete this record?")){
      window.location.href='deleteadmin.php?del_id=' +delid+'';
      return true;
    }
  }
</script>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!--Fifth Table-->
  <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-center text-capitalize ps-3">Feedback</h6>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class="d-flex flex-column justify-content-center">
                        <?php 
                    $query = "SELECT * FROM feedback ORDER BY id ASC";
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while ($row = mysqli_fetch_array($result)) {
                        ?>
                    
                      <tr>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["id"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["name"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["email"]; ?></td>
                        <td class="font-weight-bold mb-0 align-middle text-center"><?php echo $row["message"]; ?> </td>
                        <td><input type="button" class="font-weight-bold mb-0 align-middle text-center" 
                        onclick="deletefeed(<?php echo $row['id']; ?>)" name="Deletefeed" value="Delete"></td>
                      </tr>
                    
                      <?php
                    }
}
                      ?>
                    </tr>
                  </tbody>
                </table>
                <script language="javascript">
  function deletefeed(delid)
  {
    if(confirm("Do you want to delete this record?")){
      window.location.href='deletefeedback.php?del_id=' +delid+'';
      return true;
    }
  }
</script>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "ladelighthotel";

$conn = new mysqli($server, $user, $pass, $dbname);
if(isset($_POST['add'])){
$p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
$image = mysqli_real_escape_string($conn, $_POST['image']);

$sql = "INSERT INTO products (p_name,description,price,quantity,image) 
VALUES ('$p_name','$description', '$price','$quantity','$image')";

if($conn->query($sql) === TRUE){
?>
  <script>
      alert('The product has been added successfully.');
    </script>
    <?php
  echo "The product has been added successfully.";
}
else{
  echo "Error" . sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "ladelighthotel";

$conn = new mysqli($server, $user, $pass, $dbname);
if(isset($_POST['addadmin'])){
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);

$sql = "INSERT INTO admin (user,pass) 
VALUES ('$user','$pass')";

if($conn->query($sql) === TRUE){
?>
  <script>
      alert('The user has been added successfully.');
    </script>
    <?php
  echo "The yser has been added successfully.";
}
else{
  echo "Error" . sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<!-----Modals-->
<div class="f-flex">
<div class="me-2">
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
<div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Add New Product</h5>
                <p class="mb-0">Enter the product details</p>
              </div>
              <div class="card-body" >
                <form role="form text-left" action="" method="post">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="p_name">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="description">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="price">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="quantity">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Image Link</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="image">
                  </div>
                  <div class="text-center">
                    <button class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0" type="submit" name ="add" >Add</button>
                  </div>
                </form>
              </div> 
</div>

<!-- <div class="me-2">
<button type="button" class="btn btn-block bg-gradient-warning mb-3" data-bs-toggle="modal" data-bs-target="#modal-notification">Notification</button>
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
<div class="modal-content">>
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Add New Admin</h5>
                <p class="mb-0">Enter the admin details</p>
              </div>
              <div class="card-body" >
                <form role="form text-left" action="" method="post">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Admin Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="user">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="pass">
                  </div>
                  <div class="text-center">
                    <button class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0" type="submit" name ="addadmin" >Add</button>
                  </div>
                </form>
              </div>  -->



    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.min.js"></script>
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <script src="js/plugins/chartjs.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/material-dashboard.min.js?v=3.0.4"></script>
</body>
<!----->
<!-- <div class="f-flex">
<div class="me-2">
<button type="button" class="btn btn-block bg-gradient-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">Default</button>
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title font-weight-normal" id="modal-title-default">Type your modal title</h6>
<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn bg-gradient-primary">Save changes</button>
<button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<div class="me-2">
<button type="button" class="btn btn-block bg-gradient-warning mb-3" data-bs-toggle="modal" data-bs-target="#modal-notification">Notification</button>
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title font-weight-normal" id="modal-title-notification">Your attention is required</h6>
<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="py-3 text-center">
<i class="material-icons h1 text-secondary">
notifications_active
</i>
<h4 class="text-gradient text-danger mt-4">You should read this!</h4>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary">Ok, Got it</button>
<button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<div class="me-2">
<button type="button" class="btn btn-block btn-light mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Form</button>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
<div class="modal-content">
<div class="modal-body p-0">
<div class="card card-plain">
<div class="card-header pb-0 text-left">
<h5 class="">Welcome back</h5>
<p class="mb-0">Enter your email and password to sign in</p>
</div>
<div class="card-body">
<form role="form text-left">
<div class="input-group input-group-outline my-3">
<label class="form-label">Email</label>
<input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
</div>
<div class="input-group input-group-outline my-3">
<label class="form-label">Password</label>
<input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
</div>
<div class="form-check form-switch d-flex align-items-center">
<input class="form-check-input" type="checkbox" id="rememberMe" checked="">
<label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
</div>
<div class="text-center">
<button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign in</button>
</div>
</form>
</div>
<div class="card-footer text-center pt-0 px-lg-2 px-1">
<p class="mb-4 text-sm mx-auto">
Don't have an account?
<a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
</div>
</html>
<?php
}
?>