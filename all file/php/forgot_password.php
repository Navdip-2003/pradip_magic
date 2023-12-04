<?php
session_start();
include 'config.php';
// include 'userregi_email.php';

// data insert code
if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	
	$selectquery = "SELECT * FROM user_register WHERE email = '$email'";
	$query = mysqli_query($conn, $selectquery);

	$row = mysqli_num_rows($query);
	if ($row) {	

		$fnamedata= mysqli_fetch_array($query);

		$fname = $fnamedata['fname'];
		$token = $fnamedata['token'];

						$subject = "Password Reset";
						// $body = $data;
						$body = "Hi, $fname. Click here too resert your password http://localhost/project%20ecommrce/pages/user/reset_pass.php?token=$token ";
						// $body = "your opt is ".$otp;
						$headers = "From: princedesai635@gmail.com";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/html\r\n";

						if (mail($email, $subject, $body, $headers)) {
							$_SESSION['msg'] = "Ckeck you mail to reset your password $email ";
							header("Location:../pages/user/ulogin.php");
						} else {
							echo "Email sending failed...";
						}
						// End email verify code
					} else {
						header("Location:../pages/user/forgot_pass.php?error=No Email Found");
						exit();
					}
				
	}

?>



// $otp = "";
						// for ($i = 1; $i <= 6; $i++) {
						// 	$otp .= rand(0, 9);
						// }
						// echo $otp;

						// $myfile = fopen("hello.html", "r") or die("Unable to open file!");

						// $data = "";
						// while(!feof($myfile)) {
						//   $data .= fgets($myfile);
						// }
						// fclose($myfile);

						// $to_email = "davarapradeep@gmail.com";