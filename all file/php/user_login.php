<?php
	include 'config.php';
	// session_start();

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$search_email = "SELECT * FROM user_register WHERE email = '$email' and status='active'";
		$query = mysqli_query($conn,$search_email);

		$email_row = mysqli_num_rows($query);

		if($email_row){
			$email_pass = mysqli_fetch_assoc($query);
			
			$pass = $email_pass['password'];
			

			$pass_verify = password_verify($password, $pass);

			if($pass_verify){
				$_SESSION['fname'] = $email_pass['fname'];
				$_SESSION['status'] = $email_pass['status'];

				if(isset($_POST['rememberme'])){
					setcookie('emailcookie',$email,time()+86400);
					setcookie('passwordcookie',$password,time()+86400);
					header('location:../pages/user/new_home.php');
				}else{
					header('location:../pages/user/new_home.php');

				}
				
			}else{
				header("Location:../pages/user/ulogin.php?error=Invalid Password..!");
			exit();
			}

		}else{
			if(isset($_SESSION['status']) && $email != ""){
				echo $_SESSION['status'];
				header("Location:../pages/user/ulogin.php?error=Please Verify Your Email Address to Login");
			// exit();
			}elseif(!isset($_SESSION['status']) && $email == ""){
				header("Location:../pages/user/ulogin.php?error=Email invalid..");
			// exit();
			}
			
		}
	}
	?>