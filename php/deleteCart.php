<?php
include 'config.php';

$ca_id = $_GET['id'];

$deletequery = "DELETE FROM cartlist WHERE ca_id={$ca_id}";
$query = mysqli_query($conn, $deletequery);

if($query){
	?>
		<script>
			alert("record deleted successfully");
			location.replace("../pages/user/addtocart.php");
		</script>
	<?php
}else{
	?>
		<script>
			alert("record not deleted ");
			location.replace("../pages/user/addtocart.php");

		</script>
	<?php
}

?>