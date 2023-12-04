<?php
include 'home_header.php';

//index.php

//Include Configuration File
// session_start();
include('g_config.php');

$login_button = '';


if (isset($_GET["code"])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


  if (!isset($token['error'])) {

    $google_client->setAccessToken($token['access_token']);


    $_SESSION['access_token'] = $token['access_token'];


    $google_service = new Google_Service_Oauth2($google_client);


    $data = $google_service->userinfo->get();


    $query = "SELECT * FROM google WHERE token = '$data->id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if ($row < 1) {
      $iquery = "INSERT INTO google (email,first_name,last_name,full_name,picture,verifiedEmail,token) VALUES('$data->email','$data->givenName','$data->familyName','$data->name','$data->picture','$data->verifiedEmail','$data->id')";
      mysqli_query($conn, $iquery);
    }


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

 
<?php
include 'links.php';
  ?>

  <title>User Login</title>
  <style>

  </style>
</head>

<body>
  <!----------------------------------header section----------------------------------->


  <!-------------------------------end of hedaer section------------------------------->


  <div class="container my-4">
    <section class=" ">
      <div class="container   card card-registration">
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

                    if (isset($_SESSION['msg'])) {
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    } else {
                      // echo $_SESSION['msg'] = "You are logged out. please login again.";
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
              <div class="d-flex"><span class="mt-3 xc m-auto">Don't have account? <a href="userregi.php">Click Here..</a> </span></div>
              <!-- <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
              </div> -->

              <!-- <?php
              if ($login_button == '') {
                echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                echo '<img src="' . $_SESSION["user_image"] . '" class="img-responsive img-circle img-thumbnail" />';
                echo '<h3><b>Name :</b> ' . $_SESSION['user_first_name'] . '</h3>';
                echo '<h3><b>Name :</b> ' . $_SESSION['user_gender'] . '</h3>';
                echo '<h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
                echo '<h3><a href="logout.php">Logout</h3></div>';
                header('location:home.php');
              } else {
                echo '<div align="center">' . $login_button . '</div>';
              }
              ?> -->
             

            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--------------------------------------------------------------------------------------------->

  <!--------------------------------this is the footer----------------------------------->
  <!-- FOOTER -->
  <?php
  include 'footer.php';
  ?>
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