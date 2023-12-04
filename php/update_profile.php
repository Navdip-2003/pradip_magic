<?php
// include 'config.php';
if(isset($_POST['edit'])){
// 	$user_id = $_POST['user_id'];
// 	$email = $_POST['email'];
// 	$mobile = $_POST['mobile'];
	
// 	$update_query = "UPDATE user_register SET email='$email', phone='$mobile' WHERE user_id='$user_id'";
// 	$update_query_run = mysqli_query($conn, $update_query);
	// if($update_query_run)
	// {
		
	// 	$_SESSION['msg'] = "Category Updated Successfully";
	// 	header("Location:../pages/user/profile.php");
	// }
	// else
	// {
	// 	$_SESSION['msg'] = "some thing went wrong";
	// 	header("Location:../pages/user/edit_profile.php");
	// }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<button type="submit" name="edit">update</button>
</body>
</html>