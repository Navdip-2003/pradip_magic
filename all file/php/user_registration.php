<?php
// session_start();
date_default_timezone_set('Asia/Kolkata');
include 'config.php';
// include 'userregi_email.php';

// data insert code
if (isset($_POST['submit'])) {
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	// $gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$token = bin2hex(random_bytes(15));



	$selectquery = "SELECT * FROM user_register WHERE email = '$email'";
	$query = mysqli_query($conn, $selectquery);

	$row = mysqli_num_rows($query);
	if ($row > 0) {
		header("Location:../pages/user/userregi.php?error=Email Is Already Register..!");
		exit();
	} else {     //      echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		if ($fname != "" && $lname != "" ) {
			if ($password === $cpassword) {	
				if(strlen($phone) == 10) {	
					$insertquery = "INSERT INTO user_register(fname,lname,phone, email, password, cpassword,token,status,create_at) VALUES('$fname','$lname','$phone','$email','$pass','$cpass','$token','inactive','".date("y-m-d H:i:s")."')";
					$query = mysqli_query($conn, $insertquery);
					// header("location:http://localhost/project%20ecommrce/php/userregi_email.php?id='$email'");

					if ($query) {
						// Email verify code
						
						$subject = "Simple Email Test via PHP";
						// $body = $data;
						$body = "Hi, $fname. Click here too activate your account http://localhost/project%20ecommrce/php/active.php?token=$token ";
						// $body = "your opt is ".$otp;
						$headers = "From: princedesai635@gmail.com";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/html\r\n";

						if (mail($email, $subject, $body, $headers)) {
							$_SESSION['msg'] = "Ckeck you mail to activate your account $email ";
							header("Location:../pages/user/ulogin.php");
						} else {
							header("Location:../pages/user/userregi.php?error=Email sending failed...");
						exit();
						}
						// End email verify code
					} else {
						header("Location:../pages/user/userregi.php?error=Data Not Inserted..!");
						exit();
					}
				} else {
					header("Location:../pages/user/userregi.php?error=Invalid Phone Number");
					exit();
				}
			} else {	
				header("Location:../pages/user/userregi.php?error=Password Is Not Match..!");
				exit();
			}
		} else {
			header("Location:../pages/user/userregi.php?error=Please Fill The Form..!");
			exit();
		}
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