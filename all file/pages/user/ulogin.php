<?php
// include '../../php/config.php';
require_once '../../vendor/autoload.php';
//index.php

//Include Configuration File
include('g_config.php');

$login_button = '';


if (isset($_GET["code"])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


  if (!isset($token['error'])) {

    $google_client->setAccessToken($token['access_token']);


    $_SESSION['access_token'] = $token['access_token'];


    $google_service = new Google_Service_Oauth2($google_client);


    $data = $google_service->userinfo->get();



    // $query = "SELECT * FROM google WHERE token = '$data->id'";
    // $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_array($result);
    // if ($row < 1) {
    //   $iquery = "INSERT INTO google (email,first_name,last_name,full_name,picture,verifiedEmail,token) VALUES('$data->email','$data->givenName','$data->familyName','$data->name','$data->picture','$data->verifiedEmail','$data->id')";
    //   mysqli_query($conn, $iquery);
    // }


    if (!empty($data['given_name'])) {
      $_SESSION['user_first_name'] = $data['given_name'];
    }

    if (!empty($data['family_name'])) {
      $_SESSION['user_last_name'] = $data['family_name'];
    }

    if (!empty($data['email'])) {
      $_SESSION['user_email_address'] = $data['email'];
    }


    if (!empty($data['name'])) {
      $_SESSION['user_fullname'] = $data['name'];
    }

    if (!empty($data['verifiedEmail'])) {
      $_SESSION['user_verifiedEmail'] = $data['verifiedEmail'];
    }

    if (!empty($data['id'])) {
      $_SESSION['user_id'] = $data['id'];
    }

    if (!empty($data['picture'])) {
      $_SESSION['user_image'] = $data['picture'];
    }
  }
}


if (!isset($_SESSION['access_token'])) {

  $login_button = ' <form class="mt-4 mt-md-0 p-0 p-lg-2 pt-0 " method="post" action="new_header.php">
 <a class="btn btn-primary btn-lg btn-block" name="google" style="background-color: #3b5998" role="button" href="' . $google_client->createAuthUrl() . '">Login With Google</a></form>';
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">



  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/home.css">
  <link type="text/css" rel="stylesheet" href="../../css/slick.css" />
  <link type="text/css" rel="stylesheet" href="../../css/slick-theme.css" />

  <link type="text/css" rel="stylesheet" href="../../css/style.css" />

  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>




  <link rel="stylesheet" href="../../css/ulogin.css">
  <title>User Login</title>
  <style>

  </style>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <?php
  include 'header.php';
  ?>
  <!-- HEADER -->
  <!-- <header> -->
  <!-- TOP HEADER -->
  <!-- <div id="top-header">
      <div class="container px-4 px-lg-3">
        <div class="row d-flex justify-content-between">
        <ul class="header-links pull-left col-6">
          <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
          <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
          <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
        </ul>
        <div class="col-6   d-flex">
          <ul class="header-links pull-right ms-auto">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li class="account">
							<div class="dropdown">
								<a
								 
								  href="#"
				
								  id="dropdownMenuLink1"
								  data-mdb-toggle="dropdown"
								  aria-expanded="false"
								>
								My Account
								<i class="fa fa-angle-down ms-1"></i>
								</a>
							  
								<ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
								  <li class="w-100"><a href="#" class="p-3 ps-5"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
								  <li class="w-100"><a href="#" class="p-3 ps-5"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
								</ul>
							  </div>
						
						</li>
					</ul>
        
        </div>
      </div>
      </div>
    </div>
    /TOP HEADER -->

  <!-- MAIN HEADER -->
  <!-- <div id="header">
 
      <div class="container px-4 px-lg-3">
       
        <div class="row d-flex justify-content-between">
         
          <div class=" col-12 col-lg-3  dflex1 a-align-items-center">
            <div class="header-logo">
              <a href="#" class="logo">
                <img src="./img/magicpin-logo2.png" alt="" class="logo1">
              </a>
            </div>
          </div>
         
          <div class="col-12 col-lg-5">
            <div class="header-search">
              <form class="row bx">
                <select class="input-select col-4">
                  <option value="0">All Categories</option>
                  <option value="1">Category 01</option>
                  <option value="1">Category 02</option>
                </select>

                <input class="input col bx" placeholder="Search here">
                <button class="search-btn col-2">Search</button>
              </form>
            </div>
          </div>
       
          <div class="col-lg-3 clearfix">
            <div class="header-ctn">
            
              <div>
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                  <span>Your Wishlist</span>
                  <div class="qty">2</div>
                </a>
              </div>
             
              <div class="dropdown text-light">
                <a class="dropdown-toggle" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#offcanvasRight"
                  aria-controls="offcanvasRight">
                  <i class="fa fa-shopping-cart text-light"></i>
                  <span class="text-light">Your Cart</span>
                  <div class="qty ">3</div>
                </a>


              </div>
             
              <div class="dropdown d-lg-none">

                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fa fa-bars"></i>
                  <span>Menu</span>
                </a>

                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <li class="nav-item p-2">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item p-2">
                    <a class="nav-link" href="#">Hot Deal</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link" href="#">Categories</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="#">Laptops</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="#">Smartphones</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="#">Cameras</a>
                  </li>
                  <li class="nav-item p-2">
                    <a class="nav-link " href="#">Accessories</a>
                  </li>
                </ul>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header> -->
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->


  <div class="container my-4 my-lg-0">
    <section class=" ">
      <div class="container  h-100 my-2  card card-registration">
        <div class="row d-flex align-items-center justify-content-center h-100 ">
          <div class="col-md-9 col-lg-7 col-xl-6 pt-lg-5">
            <img src="../../img/lo&rg/Sign in-amico.svg" class="img-fluid " alt="Phone image">
          </div>
          <div class="col-md-8 col-lg-5 col-xl-5 ">


            <!--------------------------------------------+ login form +------------------------------------>
            <form class="mt-4 mt-md-0 p-0 p-lg-2 pt-0 " method="post" action="../../php/user_login.php">
              <h3 class="mb-4 text-uppercase">Sign In</h3>
              <?php
              if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>

              <?php }
              ?>
              <div class="msg">
                <p><?php

                    if(isset($_SESSION['msg'])) {
                      echo $_SESSION['msg'];
                    } else {
                      echo $_SESSION['msg'] = "You are logged out. please login again.";
                    }
                    ?></p>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" value="<?php
                                                                                                                  if (isset($_COOKIE['emailcookie'])) {
                                                                                                                    echo $_COOKIE['emailcookie'];
                                                                                                                  }
                                                                                                                  ?>" />
                <label class="form-label" for="form1Example13">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" value="<?php
                                                                                                                        if (isset($_COOKIE['passwordcookie'])) {
                                                                                                                          echo $_COOKIE['passwordcookie'];
                                                                                                                        }
                                                                                                                        ?>" />
                <label class="form-label" for="form1Example23">Password</label>
              </div>

              <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="rememberme" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <a href="forgot_pass.php">Forgot password?</a>
              </div>

              <!-- Submit button -->
              <button type="submit" name="submit" class="btn bg-x1 btn-lg btn-block">Sign in</button>
              <span class="mt-3 xc">Don't have account? <a href="userregi.php">Click Here..</a> </span>
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
              </div>

              <?php
             if($login_button == '')
   {
    // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    // echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    // echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    // echo '<h3><b>Gender :</b> '.$_SESSION['user_gender'].'</h3>';
    // echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    // // echo '<h3><a href="logout.php">Logout</h3></div>';
    // echo '<pre>';
    // print_r($data);
    header('location:new_home.php');
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
              ?>
              <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--------------------------------------------------------------------------------------------->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Offcanvas right</h5>
      <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">...</div>
  </div>
  <!--------------------------------------------------------------------------------------------->
  <!--------------------------------this is the footer----------------------------------->
  <!-- FOOTER -->
  <footer id="footer">
    <!-- top footer -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
          <div class="col">
            <div class="footer">
              <h3 class="footer-title">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
              <ul class="footer-links">
                <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="footer">
              <h3 class="footer-title">Categories</h3>
              <ul class="footer-links">
                <li><a href="#">Hot deals</a></li>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Smartphones</a></li>
                <li><a href="#">Cameras</a></li>
                <li><a href="#">Accessories</a></li>
              </ul>
            </div>
          </div>



          <div class="col">
            <div class="footer">
              <h3 class="footer-title">Information</h3>
              <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Orders and Returns</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="footer">
              <h3 class="footer-title">Service</h3>
              <ul class="footer-links">
                <li><a href="#">My Account</a></li>
                <li><a href="#">View Cart</a></li>
                <li><a href="#">Wishlist</a></li>
                <li><a href="#">Track My Order</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col text-center">
            <ul class="footer-payments">
              <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
              <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
              <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
              <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
              <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
              <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
            </ul>
            <span class="copyright">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </span>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /bottom footer -->
  </footer>
  <!-- /FOOTER -->
  <!--------------------------------end of the footer------------------------------------



  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>