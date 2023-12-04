<?php
	include 'config.php';
	// session_start();

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$search_email = "SELECT * FROM user_register WHERE email = '$email'";
		$query = mysqli_query($conn,$search_email);

		$email_row = mysqli_num_rows($query);
echo "<pre>";
print_r($email_row);
		if($email_row > 0){
			$email_pass = mysqli_fetch_assoc($query);
			
			$pass = $email_pass['password'];
			
		
			$_SESSION['user_id'] = $email_pass['user_id'];
			$pass_verify = password_verify($password, $pass);
			if($pass_verify){
				$_SESSION['loggedin'] = true;
			
				$_SESSION['fname'] = $email_pass['fname'];
				$_SESSION['status'] = $email_pass['status'];
				$_SESSION['role_as'] = $email_pass['role_as'];
				$role_as = $_SESSION['role_as'];
				

				

				if($_SESSION['status'] == 'inactive' && $email != null){
					header("Location:../pages/user/ulogin.php?error=Please verify Email ..");
					exit();
				}

				// if($role_as == 1){
				// 	header('location:../pages/admin/index.php');
				// }else{
					
					if(isset($_POST['rememberme'])){
						setcookie('emailcookie',$email,time()+86400);
						setcookie('passwordcookie',$password,time()+86400);
						header('location:../pages/user/home.php');
					}else{
						
						header('location:../pages/user/home.php');
	
					}
				// }

				
				
			}else{
				header("Location:../pages/user/ulogin.php?error=Invalid Password..!");
			exit();
			}

		}else{				

			
				header("Location:../pages/user/ulogin.php?error=Email invalid..");
			// exit();
			
			
		}
	}
