<?php
// session_start();
include '../../php/config.php';

if(isset($_GET['token'])){
	$token = $_GET['token'];

	$updatequery = "update admin_register set status='panding' where token='$token'";
	$query = mysqli_query($conn, $updatequery);
	// $_SESSION['loggedin']==true;
	if($query){
		if(isset($_SESSION['msg'])){
			$_SESSION['loggedin']=true;
				// $_SESSION['msg'] = "Account Updated Successfully";
				header("location:admin-login.php");
		}else{
			$_SESSION['msg'] = "You are logged out.";
			header("location:admin-login.php");
		}
	}else{
		$_SESSION['msg'] = "Account Not Updated ";
			header("location:admin-login.php");
	}
}
?>