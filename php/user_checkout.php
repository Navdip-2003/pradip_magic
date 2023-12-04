<?php
// session_start();
include 'config.php';
// include 'userregi_email.php';
// $_SESSION['con'] = "";
// data insert code
if (isset($_POST['submit'])) {
 if($_SESSION['Err']){   

	$fname =  $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$mobileno = $_POST['phone'];
	$email = $_POST['email'];
	$method = $_POST['payment'];
	
					// if($fname != "" && $email != "" && $address != ""){
					$insertquery = "INSERT INTO checkout(fname,lname,address,pincode,city,state,country,phone,email,p_method) VALUES('$fname','$lname','$address','$pincode','$city','$state','$country','$mobileno','$email','$method')";
					$query = mysqli_query($conn, $insertquery);
					if($query){
						header("Location:../pages/user/checkout.php");
				// exit();	
						echo "inserted successfully";
					}else{
						echo "data not inserted";
				 	header("Location:../pages/user/checkout.php?error=Please Fill The Form");
				 }	
        // }else{
        //   echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>"; 
        }	
}
?>
