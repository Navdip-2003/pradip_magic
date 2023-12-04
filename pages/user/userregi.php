<?php
include 'home_header.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> -->


  <!-- Google font -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"> -->



  <!-- Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
  <!-- MDB -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/home.css">
  <link type="text/css" rel="stylesheet" href="../../css/slick.css" />
  <link type="text/css" rel="stylesheet" href="../../css/slick-theme.css" />

  <link type="text/css" rel="stylesheet" href="../../css/style.css" /> -->

  <!-- Font Awesome Icon -->
  <!-- <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

  <?php
include 'links.php';
  ?>


  <!-- <link rel="stylesheet" href="../../css/ulogin.css"> -->
  <!-- <link rel="stylesheet" href=../../css/uloginn.css"> -->
  <title>User Registration</title>
  <style>
    .error {
      padding-left: 15px;
      color: red;
      background-color: #F2DEDE;
    }

    .checkbox a {
      color: cornflowerblue;
      text-decoration: underline;
    }
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}



/* Firefox */
input[type=number] {
  appearance: textfield;
}
  </style>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <?php
  
  ?>
  
  <!-------------------------------end of hedaer section------------------------------->


  <div class="container">

    <section class="">
      <div class="container  ">
        <div class="row d-flex justify-content-center align-items-center ">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-lg-6  d-flex">
                  <img src="../../img/lo&rg/Online shopping-amico.svg" alt="Sample photo" class="img-fluid w-100 ps-0 m-auto" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>

                <div class="col-lg-6">
                  <div class="card-body py-md-5 text-black">
                    <h3 class="mb-3 text-uppercase"> Registration</h3>
                    <form action="../../php/user_registration.php" method="post">
                    <div class="alert-danger mb-2">
                <p class=''><?php
                    if (isset($_SESSION['msg'])) {
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    } 
                    ?></p>
              </div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m" name="fname" class="form-control form-control-lg" autofocus />
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" name="lname" class="form-control form-control-lg" autofocus />
                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="number" id="form3Example9" name="phone" class="form-control form-control-lg" autofocus />
                        <label class="form-label" for="form3Example9">Phone Number</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="email" id="form3Example9" name="email" class="form-control form-control-lg" autofocus />
                        <label class="form-label" for="form3Example9">Email ID</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example90" name="password" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autofocus />
                        <label class="form-label" for="form3Example90">Password</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example97" name="cpassword" class="form-control form-control-lg" autofocus />
                        <label class="form-label" for="form3Example97">Confirm Password</label>
                      </div>
                      <div class="mt-4"><span class="">Already Create a Accounr? <a href="ulogin.php">Click Here..</a> </span></div>
                      <div class="mt-4">
                        <input type="checkbox" name="checkbox" id="" checked>
                        <span class="checkbox">I agree to the <a href="#">PrivacyPolicy</a>, <a href="#">Terms & Conditions</a> and to receive marketing material </span>
                      </div>
                      <div class="d-flex justify-content-end pt-3">
                        <button type="button" class="btn btn-bg-x1 btn-lg">Reset all</button>
                        <!-- <button type="button" name="submit" class="btn bg-x1 text-light btn-lg ms-2">Submit</button> -->
                        <input type="submit" class="btn bg-x1 text-light btn-lg ms-2" name="submit" value="Submit">
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
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