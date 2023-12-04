<?php
// session_start();
include 'config.php';
// include 'userregi_email.php';
$_SESSION['con'] = "";
// data insert code
if (isset($_POST['message'])) {
	$name =  $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
					if($name != "" && $email != "" && $message != ""){
					$insertquery = "INSERT INTO user_contact(name,email,phone_no,message) VALUES('$name','$email','$phone','$message')";
					$query = mysqli_query($conn, $insertquery);
					if($query){
						header("Location:../pages/user/contact.php?succ=Send Message Successfully..");
				exit();
						
					}
				}else{
					header("Location:../pages/user/contact.php?error=Please Fill The Form");
				}		
}
?>


