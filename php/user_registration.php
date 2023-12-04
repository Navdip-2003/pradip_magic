<?php
// session_start();
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
	$email_pass = mysqli_fetch_assoc($query);

	$_SESSION['fname'] = $email_pass['fname'];

	if ($row > 0) {
		$_SESSION['msg'] = "Email Is Already Register..!";
		header("Location:../pages/user/userregi.php");
		exit();
	} else {     //      echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		if ($fname != "" && $lname != "" ) {
		if ($password != "" && $cpassword != "" ){
			if ($password === $cpassword) {	
				if(strlen($phone) == 10) {	
					$insertquery = "INSERT INTO user_register(fname,lname,phone, email, password, cpassword,token,status,create_at) VALUES('$fname','$lname','$phone','$email','$pass','$cpass','$token','inactive','".date("y-m-d H:i:s")."')";
					$query = mysqli_query($conn, $insertquery);
					// header("location:http://localhost/project%20ecommrce/php/userregi_email.php?id='$email'");

					if ($query) {
						// Email verify code
						
						$subject = "Welcome to Magicpin E-website";
						// $body = $data;
						$body = "Hi, $fname. Click here too activate your account http://localhost/pradip%20git/pro_magic/php/active.php?token=$token ";
						// $body = "your opt is ".$otp;
						$headers = "From: pd12911291@gmail.com";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/html\r\n";

						if (mail($email, $subject, $body, $headers)) {
							$_SESSION['msg'] = "Ckeck you mail to activate your account $email ";
							header("Location:../pages/user/ulogin.php");
						} else {
							$_SESSION['msg'] = "Email sending failed...";
							header("Location:../pages/user/userregi.php");
						exit();
						}
						// End email verify code
					} else {
						$_SESSION['msg'] = "Data Not Inserted..!";
						header("Location:../pages/user/userregi.php");
						exit();
					}
				} else {
					$_SESSION['msg'] = "Invalid Phone Number";
					header("Location:../pages/user/userregi.php");
					exit();
				}
			} else {	
				$_SESSION['msg'] = "Password Is Not Match..!";
				header("Location:../pages/user/userregi.php");
				exit();
			}
		}else {
			$_SESSION['msg'] = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
			header("Location:../pages/user/userregi.php");
			exit();
		}
		} else {
			$_SESSION['msg'] = "Please Fill The Name..!";
			header("Location:../pages/user/userregi.php");
			exit();
		}
	}

	$selectquery = "SELECT * FROM user_register WHERE fname = '$fname'";
	$query = mysqli_query($conn, $selectquery);

	$row = mysqli_num_rows($query);
	$email_pass = mysqli_fetch_assoc($query);
	$_SESSION['user_id'] = $email_pass['user_id'];
	$_SESSION['fname'] = $email_pass['fname'];
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