<?php
include '../../php/config.php';

if(isset($_POST['admin_submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$search_email = "SELECT * FROM admin_login WHERE admin_email = '$email'";
	$query = mysqli_query($conn,$search_email);

	$email_row = mysqli_num_rows($query);
// echo "<pre>";
// print_r($email_row);
	if($email_row > 0){
		$email_pass = mysqli_fetch_assoc($query);
		
		$pass = $email_pass['password'];
		
	
		
		$pass_verify = password_verify($password, $pass);
		if($pass_verify){
			$_SESSION['admin_loggedin'] = true;
		
			$_SESSION['a_email'] = $email_pass['admin_email'];
			$_SESSION['admin_id'] = $email_pass['admin_id'];
	
			

			

		
				
				if(isset($_POST['rememberme'])){
					setcookie('emailcookie',$email,time()+86400);
					setcookie('passwordcookie',$password,time()+86400);
					header('location:../admin/index.php');
				}else{
					
					header('location:../admin/index.php');

				}
		}else{
			$_SESSION['msg'] = 'Invalid Possword';
			header("Location:../admin/admin-login.php");
		exit();
		}
	}else{
		$_SESSION['msg'] = 'Invalid Email';
			header("Location:../admin/admin-login.php");
		exit();
	}

	}elseif(isset($_POST['forget_pwd_button'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		
		$selectquery = "SELECT * FROM admin_login WHERE admin_email = '$email'";
		$query = mysqli_query($conn, $selectquery);
	
		$row = mysqli_num_rows($query);
		if ($row) {	
	
			$fnamedata= mysqli_fetch_array($query);
			$admin_name = $fnamedata['admin_name'];
			// $fname = $fnamedata['fname'];
			$token = $fnamedata['token'];
	
							$subject = "Password Reset";
							// $body = $data;
							$body = "Hi, $admin_name Click here too resert your password http://localhost/pradip%20git/pro_magic/pages/admin/admin-set-password.php?token=$token ";
							// $body = "your opt is ".$otp;
							$headers = "From: pd12911291@gmail.com";
							$headers .= "MIME-Version: 1.0\r\n";
							$headers .= "Content-type: text/html\r\n";
	
							if (mail($email, $subject, $body, $headers)) {
								$_SESSION['msg'] = "Ckeck you mail to reset your password $email ";
								header("Location:../admin/admin-login.php");
							} else {
								echo "Email sending failed...";
							}
							// End email verify code
						} else {
							header("Location:../admin/admin-forgot.php?error=No Email Found");
							exit();
						}
					
		}elseif(isset($_POST['change_status'])){
			$id = $_POST['company_id'];
			$company_status = $_POST['company_status'];

			$update_status_query = mysqli_query($conn, "UPDATE admin_register SET status = '$company_status' WHERE id = '$id'");
			if($update_status_query){
				header("Location:company_index.php");
			}else{
				echo "some things went wrong";
				header("Location:company_index.php");
			}
		}elseif(isset($_POST['admin_edit_profile'])){
			$id = $_SESSION['admin_id'];
			$email = $_POST['email'];
			$name = $_POST['name'];
			
		
			$update_profile_query = "update admin_login set admin_email='$email', admin_name = '$name' where admin_id = '$id'";
			$update_profile_query_run = mysqli_query($conn, $update_profile_query);
		if($update_profile_query_run){
			$_SESSION['msg'] = "Profile Updated Successfully";
				header("Location:myaccount.php");
		}else{
			$_SESSION['msg'] = "some thing went wrong";
				header("Location:myaccount.php");
		}
	}elseif(isset($_POST['replay_submit'])){
		// $admin_id = $_SESSION['admin_id'];
		$customer_id = $_POST['customer_id'];
		$company_name = $_POST['company_name'];
		// $customer_name = $_POST['customer_name'];
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$description = $_POST['description'];
	
		$compaint_query = "INSERT INTO  admin_replay_complaint(company_name,complaint_id,subject,email,description) VALUES ('$company_name','$customer_id','$subject','$email','$description')";
		$compaint_query_run = mysqli_query($conn, $compaint_query);
	
		if($compaint_query_run){
			
			?>
			<script>
						alert("Replay Send Successfully");
						location.replace("FeedBack.php");
					</script>
			<?php
		}else{
			?>
			<script>
						alert("some thing is wrong");
						location.replace("FeedBack.php");
					</script>
			<?php
		}
	}elseif(isset($_POST['delete_subscribe'])){
		$subscribe_id = $_POST['subscribe_id'];
	
		
		$delete_query = "DELETE FROM subscribe WHERE subscribe_id=$subscribe_id";
		$delete_query_run = mysqli_query($conn, $delete_query);
	
		if($delete_query_run){
			$_SESSION['msg'] = "subscribe Delete successflly";
			header("Location:subscribe.php");
		}else{
			$_SESSION['msg'] = "some thing went wrong";
			header("Location:subscribe.php");
		}
	}elseif(isset($_POST['delete_user_contact'])){
		$contact_id = $_POST['contact_id'];
	
		
		$delete_query = "DELETE FROM user_contact WHERE id=$contact_id";
		$delete_query_run = mysqli_query($conn, $delete_query);
	
		if($delete_query_run){
			$_SESSION['msg'] = "contact Delete successflly";
			header("Location:contact_detail.php");
		}else{
			$_SESSION['msg'] = "some thing went wrong";
			header("Location:contact_detail.php");
		}
	}elseif(isset($_POST['delete_admin_replay'])){
		$complaint_replay_id = $_POST['complaint_replay_id'];
	
		
		$delete_query = "DELETE FROM admin_replay_complaint WHERE areplay_id=$complaint_replay_id";
		$delete_query_run = mysqli_query($conn, $delete_query);
	
		if($delete_query_run){
			$_SESSION['msg'] = " Replay Delete successflly";
			header("Location:FeedBack.php");
		}else{
			$_SESSION['msg'] = "some thing went wrong";
			header("Location:FeedBack.php");
		}
	}
?>