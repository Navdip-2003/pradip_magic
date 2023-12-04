<!-- session_start(); -->
<?php
include '../../php/config.php';

$_SESSION['msgg'] = "";
	
	// echo '$user_id';
if(isset($_POST['submit'])){
	if(isset($_SESSION['user_id'])){
	$user_id = $_SESSION['user_id'];
	$product_id = $_POST['pro_id'];
	$pro_quentity = $_POST['pro_quentity'];
	$selectquery = mysqli_query($conn, "SELECT * FROM cartlist WHERE product_id = '$product_id' AND user_id = '$user_id' ") or die ('query failed');

	if(mysqli_num_rows($selectquery) > 0){
		header("Location:single.php?id=$product_id");
		$_SESSION['msgg'] = "product already added to cart!";
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
}else{
	$_SESSION['msg'] = "Please login";
		header("Location:ulogin.php");
		exit();
}
}
if(isset($_POST['wi1'])){
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		$product_id = $_POST['pro_id'];
		$pro_quantity = $_POST['pro_quentity'];
		// $pro_price = $_POST['pro_price'];
		$selectquery = mysqli_query($conn, "SELECT * FROM wishlist WHERE product_id = '$product_id' AND user_id = '$user_id' ") or die ('query failed');
	
		if(mysqli_num_rows($selectquery) > 0){
			// header("Location:save_p.php");
			?>
			<script>
				location.replace("save_p.php");
				alert('product already added to cart!');
			</script>
			<?php
			
		}
		else
		{
			$insertquery = mysqli_query($conn, "INSERT INTO wishlist(user_id,pro_quantity,product_id) VALUES('$user_id','$pro_quantity','$product_id')");
			if($insertquery){
			?>
			<script>	
				alert('insert done');
			</script>
			
			<?php
			header('Location:save_p.php');
		}else{
			?>
			<script>
				alert('insert not done');
			</script>
			<?php
		
	}
	}
}else{
	$_SESSION['msg'] = "Please first login ";
		header("Location:ulogin.php");
		exit();
}
}



$id = $_GET['id'];

$deletequery = "DELETE FROM wishlist WHERE wish_id={$id}";
$query = mysqli_query($conn, $deletequery);

if($query){
	?>
		<script>
			// alert("record deleted successfully");
			location.replace("save_p.php");
		</script>
	<?php
}else{
	?>
		<script>
			alert("something went wrong ");
			location.replace("save_p.php");

		</script>
	<?php
}

	?>