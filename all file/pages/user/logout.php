<?php
session_start();
//logout.php

include('g_config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();
session_destroy();
setcookie('emailcookie','',time()-86400);
setcookie('passwordcookie','',time()-86400);

//redirect page to index.php
header('location:ulogin.php');

?>