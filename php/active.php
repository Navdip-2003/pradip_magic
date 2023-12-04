<?php
session_start();
include 'config.php';

if(isset($_GET['token'])){
	$token = $_GET['token'];

	$updatequery = "update user_register set status='active' where token='$token'";
	$query = mysqli_query($conn, $updatequery);
	$_SESSION['loggedin']==true;
	if($query){
		if(isset($_SESSION['msg'])){
			$_SESSION['loggedin']=true;
				$_SESSION['msg'] = "Account Updated Successfully";
				header("location:../pages/user/home.php");
		}else{
			$_SESSION['msg'] = "Account Updated Successfully";
			header("location:../pages/user/ulogin.php");
		}
	}else{
		$_SESSION['msg'] = "Account Not Updated ";
			header("location:../pages/user/userregi.php");
	}
}
?>