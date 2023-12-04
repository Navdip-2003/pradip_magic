<?php
// $to_email = "navdipchothani99@gmail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi, This is test email send by PHP Script";
// $headers = "From: davarapradeep@gmail.com";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }
// include 'config.php';

session_start();
// if(!isset($_SESSION['fname'])){
// 	echo "please login";
// 	header('location:../pages/user/ulogin.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p> hi,<?php echo $_SESSION['fname']; ?></p>
<button type="logout"><a href="user_logout.php"> logout </a></button>
</body>
</html>