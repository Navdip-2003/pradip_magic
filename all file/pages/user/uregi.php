<?php

//start session on web page
// session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once '../../vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('957017817470-lagu0cf0lc9rifnerhfrh2mup2795q2q.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/project%20ecommrce/pages/user/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

$conn = mysqli_connect('localhost','root','','magicpin');

?> 

<!-- <?php

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <script src="./jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="../../css/ulogin.css">

    <title>User Login</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
 
    <nav class="navbar navbar-light bg-light p-3 pl-1">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../../img/magicpin-logo.png" height="35" alt="MDB Logo" loading="lazy" />
            </a>
        </div>
    </nav>

    <div class="container">
        <section class=" ">
            <div class="container  ">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-lg-6  p-2 p-md-5 d-flex">
                                    <img src="../../img/undraw_reminder_re_fe15.svg" alt="Sample photo" class="img-fluid ps-0 m-auto" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 text-black">
                                        <form method="post" action="../../php/user_registration.php">
                                            <h3 class=" mb-5 text-uppercase"> Registration</h3>
                                            <?php
                                             if(isset($_GET['error'])){ ?>
                                                <p class="error"><?php echo $_GET['error']; ?></p>

                                            <?php }?>
                                           
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1m" name="fname" class="form-control form-control-lg">
                                                        <label class="form-label" for="form3Example1m">First name</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1n" name="lname" class="form-control form-control-lg"/>
                                                        <label class="form-label" for="form3Example1n">Last name</label>
                                                    </div>

                                                </div>
                                            </div>



                                            <div class="form-outline mb-4">
                                                <textarea name="address" class="form-control form-control-lg" id="form3Example8" rows="2" cols="20"></textarea>
                                                <label class="form-label" for="form3Example8">Address</label>
                                            </div>


                                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                <h6 class="mb-0 me-4">Gender: </h6>

                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" type="radio"  name="gender" id="femaleGender" value="Female" />
                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                </div>

                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" />
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                </div>

                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio"  name="gender" id="otherGender" value="Other" />
                                                    <label class="form-check-label" for="otherGender">Other</label>
                                                </div>

                                            </div>

                                            
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example97">Email ID</label>
                                            </div>


                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example9" name="password" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                                                <label class="form-label" for="form3Example9">Password</label>
                                            </div>


                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example90" name="cpassword" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example90">Conform Password</label>
                                            </div>




                                            <div class="mt-4"><span class="">Already Create a Accounr? <a href="ulogin.php">Click Here..</a> </span></div>
                                            <div class="d-flex justify-content-end pt-3">
                                            
                                                <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                                <input type="submit" class="btn btn-primary btn-lg ms-2" name="submit" value="Submit">
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


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html> -->