<?php
require_once '../../vendor/autoload.php';
//index.php

//Include Configuration File
include('uregi.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 $query = "SELECT * FROM google WHERE token = '$data->id'";
 $result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
 if($row < 1){
      $iquery = "INSERT INTO google (email,first_name,last_name,full_name,picture,verifiedEmail,token) VALUES('$data->email','$data->givenName','$data->familyName','$data->name','$data->picture','$data->verifiedEmail','$data->id')";
      mysqli_query($conn, $iquery);
 }


  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  
  if(!empty($data['name']))
  {
   $_SESSION['user_fullname'] = $data['name'];
  }

  if(!empty($data['verifiedEmail']))
  {
   $_SESSION['user_verifiedEmail'] = $data['verifiedEmail'];
  }

  if(!empty($data['id']))
  {
   $_SESSION['user_id'] = $data['id'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">PHP Login using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Gender :</b> '.$_SESSION['user_gender'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
    echo '<pre>';
    print_r($data);
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
//    ?>
   </div>
  </div>
 </body>    
</html>




<?php


// $userinfo = [
//     'email' => $data['email'],
//     'first_name' => $data['givenName'],
//     'last_name' => $data['familyName'],
//     'gender' => $data['gender'],
//     'full_name' => $data['name'],
//     'picture' => $data['picture'],
//     'verifiedEmail' => $data['verifiedEmail'],
//     'token' => $data['id'],
//   ];

//   // checking if user is already exists in database
//   $sql = "SELECT * FROM google WHERE email ='{$userinfo['email']}'";
//   $result = mysqli_query($conn, $sql);
//   if (mysqli_num_rows($result) > 0) {
//     // user is exists
//     $userinfo = mysqli_fetch_assoc($result);
//     $token = $userinfo['token'];
//   } else {
//     // user is not exists
//     $sql = "INSERT INTO goo (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//       $token = $userinfo['token'];
//     } else {
//       echo "User is not created";
//       die();
//     }
//   }

//   // save user data into session
//   $_SESSION['user_token'] = $token;
// } else {
//   if (!isset($_SESSION['user_token'])) {
//     header("Location: index.php");
//     die();
//   }

//   // checking if user is already exists in database
//   $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
//   $result = mysqli_query($conn, $sql);
//   if (mysqli_num_rows($result) > 0) {
//     // user is exists
//     $userinfo = mysqli_fetch_assoc($result);
//   }
// }

?>