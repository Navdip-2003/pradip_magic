<?php
session_start();

// include '../pages/user/g_config.php';

//Reset OAuth access token
// $google_client->revokeToken();
unset($_SESSION['admin_email']);
unset($_SESSION['admin_id']);
session_destroy();
setcookie('emailcookie','',time()-86400);
setcookie('passwordcookie','',time()-86400);
header('location:admin-login.php');
?>	    