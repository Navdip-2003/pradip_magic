<?php
session_start();
include 'config.php';

if(isset($_GET['token'])){
	$token = $_GET['token'];

	$updatequery = "update user_register set status='active' where token='$token'";
	$query = mysqli_query($conn, $updatequery);

	if($query){
		if(isset($_SESSION['msg'])){
			$_SESSION['msg'] = "Account Updated Successfully";
			header("location:../pages/user/ulogin.php");
		}else{
			$_SESSION['msg'] = "You are logged out.";
			header("location:../pages/user/ulogin.php");
		}
	}else{
		$_SESSION['msg'] = "Account Not Updated ";
			header("location:../pages/user/userregi.php");
	}
}
?>