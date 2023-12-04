<?php

//start session on web page
// session_start();
//config.php

//Include Google Client Library for PHP autoload file
require_once '../../vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('57309476027-94te3naasqpsef85vuh9es8vj8vjmm6t.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/project%20ecommrce/pages/user/new_home.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

$conn = mysqli_connect('localhost','root','','magicpin');

?> 