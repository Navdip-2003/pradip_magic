<?php
include_once('../../php/config.php');
// if(!isset($_SESSION['admin_email'])){
// 		$_SESSION['msg'] = "please login";
// 		header('location:../admin/admin-login.php');
// 	}
?>
<!DOCTYPE html>
<html id="html" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
  magicpin
  </title>
 
 
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- alertifyjs -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>



    <!-- Font Awesome -->

    <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="../../prince/admin pannel/css/dashbord.css">
    
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>

    <title>Company Login</title>
    <style>
      .navbar-vertical.navbar-expand-xs{
        position: relative implements;
      }
      .btn-bg-x1{
    border: 2px solid #D10024 !important;
    color:#D10024;
  }
  .btn-bg-x1:hover{
    border: 2px solid #b5011f;
    background-color: #e5e5e5;
    color:#D10024;
  }  
  .border-1{
    border: 2px solid #D10024 !important;
  }
  .bg-x1{
    background-color: #D10024 ;
    color:#eee;
  }
  .bg-x1:hover{
    background-color: #b5011f;
    color:#eee;
  }
    </style>
</head>


<body class="  ">


	<?php
 include 'nav.php';
  ?>
  <!-- <main class="main-content position-relative  border-radius-lg row"> -->
  	<?php 
      if(isset($_SESSION['a_email'])){  
        include 'sidebar.php';
    }
    ?>
	