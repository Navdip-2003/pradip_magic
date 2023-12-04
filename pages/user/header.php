<!-- session_start(); -->
<?php
include '../../php/config.php';

$_SESSION['msgg'] = "";
	
	// echo '$user_id';
if(isset($_POST['submit'])){
// if(isset($_SESSION['user_id'])){
	$user_id = $_SESSION['user_id'];
	$product_id = $_POST['pro_id'];
	$pro_quentity = $_POST['pro_quentity'];
	
	$selectquery = mysqli_query($conn, "SELECT * FROM cartlist WHERE product_id = '$product_id' AND user_id = '$user_id' ") or die ('query failed');

	if(mysqli_num_rows($selectquery) > 0){
		// header('Location:single.php');
    $updatequery = "update cartlist set pro_quentity='$pro_quentity' where product_id = '$product_id' AND user_id = '$user_id'";
		$queryss = mysqli_query($conn, $updatequery);
    if($queryss){
	  header("Location:addtocart.php");
    }else{
      ?>
      <script>
        alert('updated not done');
      </script>
      <?php
  header("Location:single.php?id=$product_id");
    }
    
    // $_SESSION['msgg'] = "product already added to cart!";
	}
	else
	{
	// $insertquery = mysqli_query($conn, "INSERT INTO cartlist(user_id,pro_name,pro_images,pro_brand,pro_quentity,pro_price) VALUES('$user_id','$pro_name','$pro_images','$pro_brand','$pro_quentity','$pro_price')");
	// if($insertquery){
		$insertquery = mysqli_query($conn, "INSERT INTO cartlist(user_id,pro_quentity,product_id) VALUES('$user_id','$pro_quentity','$product_id')");
		if($insertquery){
		?>
		<script>	
			alert('insert done');
		</script>
		
		<?php
		header("Location:addtocart.php");
	}else{
		?>
		<script>
			alert('insert not done');
		</script>
		<?php
	}
}
// }else{
// 	$_SESSION['msg'] = "Please login";
// 		header("Location:ulogin.php");
// 		exit();
// }

}

if(isset($_POST['submit_update'])){
if(isset($_SESSION['user_id'])){
	$product_id = $_POST['pro_id'];
	$que = $_POST['pro_quentity'];
	
		header("Location:checkout.php?que=" .$que. "&id=".$product_id );
	
  }
}


if(isset($_POST['edit_profile'])){
	$user_id = $_SESSION['user_id'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];

	if(strlen($mobile) == 10) {

	$update_profile_query = "update user_register set email='$email', phone='$mobile', address='$address' where user_id = '$user_id'";
		$update_profile_query_run = mysqli_query($conn, $update_profile_query);
    if($update_profile_query_run){
			 header("Location:profile.php");
}
} else {
	$_SESSION['msg'] = "Invalid Phone Number";
	header("Location:edit_profile.php");
	exit();
} 

}


if(isset($_POST['user_change_image'])){
	$user_id = $_SESSION['user_id'];
	$new_image = $_FILES['new_image']['name'];
	$old_image = $_POST['image'];

	if($new_image != "")
	{
		$update_filename = $new_image;
	}
	else
	{
		$update_filename = $old_image;
	}
	$path = "uploaded_img";
	
	$update_profile_query = "update user_register set user_image='$update_filename' where user_id = '$user_id'";
	$update_profile_query_run = mysqli_query($conn, $update_profile_query);
if($update_profile_query_run){
	if($_FILES['new_image']['name'] != "")
		{
			move_uploaded_file( $_FILES['new_image']['tmp_name'], $path.'/'.$new_image);
			if(file_exists("uploaded_img/".$old_image))
			{
				unlink("uploaded_img/".$old_image);
			}	 
			 header("Location:profile.php");
	  
    }else{
		$_SESSION['msg'] = "some thing went wrong";
  header("Location:profile.php");
    }

}
}


if(isset($_POST['subscribe_btn'])){
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
	$subscribe_email = $_POST['email'];

	$selectquery = "SELECT * FROM subscribe WHERE subscribe_email = '$subscribe_email' and user_id = '$user_id'";
	$query = mysqli_query($conn, $selectquery);

	$row = mysqli_num_rows($query);
	$email_pass = mysqli_fetch_assoc($query);



	if ($row > 0) {
		?>
	<script>
		alert("your email already subscribed ");
		location.replace("home.php");
	</script>
		<?php
	} else {

	$subscribe_query = mysqli_query($conn,"INSERT INTO subscribe (user_id,subscribe_email) value('$user_id','$subscribe_email')");
	if($subscribe_query){
		?>
	<script>
		alert("your subscribe successfully");
		location.replace("home.php");
	</script>
		<?php
	}else{
		?>
		<script>
			alert("some thing went wrong");
			location.replace("home.php");
		</script>
			<?php
	}
}

	}else{
		$_SESSION['msg'] = "Please login first";
		header("Location:ulogin.php");
		exit();
	}
}

if(isset($_POST['sendReview'])){
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		$product_id = $_POST['product_id'];
		$userName = $_POST['userName'];
		$userMessage = $_POST['userMessage'];

		$sql = "INSERT INTO rating (product_id, user_id, name, message)
VALUES ('$product_id', '$user_id', '$userName', '$userMessage')";
$result = mysqli_query($conn, $sql);

if ($result) {

		?>
      <script>
        alert('updated not done');
      </script>
      <?php
  header("Location:single.php?id=$product_id");
} else {
		header("location:single.php?id=$product_id");
}

	}else{
		$_SESSION['msg'] = "Please login first";
		header("Location:ulogin.php");
		exit();
	}
}

if(isset($_POST['delete_review_btn'])){
	$rating_id = $_POST['rating_id'];
	echo $rating_id;

		$delete_review_query = mysqli_query($conn, "DELETE FROM rating WHERE rating_id = '$rating_id'");
		if($delete_review_query){
			?>
		<script>
			alert("Delete review successfully");
			location.replace("my review.php");
		</script>
			<?php
		}else{
			?>
			<script>
				alert("Delete review successfully");
				location.replace("my review.php");
			</script>
				<?php
		}
}


if(isset($_POST['delete_single_review_btn'])){
	$rating_id = $_POST['rating_id'];

	$delete_query = "DELETE FROM rating WHERE rating_id=$rating_id";
	$delete_query_run = mysqli_query($conn, $delete_query);

	if($delete_query_run){
		$_SESSION['msg'] = " review Delete successflly";
		header("Location:my review.php");
	}else{
		$_SESSION['msg'] = "some thing went wrong";
		header("Location:my review.php");
	}
}


if(isset($_POST['complain_submit'])){
	$user_id = $_SESSION['user_id'];
	$order_id = $_POST['order'];
	$company = $_POST['company'];
	$subject = $_POST['subject'];
	$complain = $_POST['complain'];
		// $images = $_FILES['image']['name'];


	

	$compaint_query = "INSERT INTO use_complaint(user_id,order_id,company_name,subject,description)
	VALUES ('$user_id','$order_id','$company','$subject','$complain') ";
	$compaint_query_run = mysqli_query($conn, $compaint_query);

	if($compaint_query_run){
		
		?>
		<script>
					alert("Complaint Send Successfully");
					location.replace("compaint.php");
				</script>
		<?php
	}else{
		?>
		<script>
					alert("some thing is wrong");
					location.replace("compaint.php");
				</script>
		<?php
	}
}
                             
if(isset($_POST['delete_complaint_replay'])){
	$complaint_replay_id = $_POST['complaint_replay_id'];

	
	$delete_query = "DELETE FROM use_complaint WHERE complaint_id=$complaint_replay_id";
	$delete_query_run = mysqli_query($conn, $delete_query);

	if($delete_query_run){
		$_SESSION['msg'] = " Replay Delete successflly";
		header("Location:compaint.php");
	}else{
		$_SESSION['msg'] = "some thing went wrong";
		header("Location:compaint.php");
	}
}
	?>