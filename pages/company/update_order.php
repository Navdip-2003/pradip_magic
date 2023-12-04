<?php
include '../../php/config.php';
if(isset($_POST['update_button'])){
    $order = $_POST['order'];
    $payid  = $_GET['track_order']; 
    // echo $_GET['id'];
$updatequery = mysqli_query($conn, "UPDATE `payments` SET `track_order`='$order' where payid=$payid");
if($updatequery){
   echo 'update successfully';
   header("Location:index.php");
}else{
   echo 'data not updated';
}
}
?>
<form action="" method="post">
												<td>
                                        <input type="hidden" name="order" value="Panding">
													<button class="btn btn-primary" name="update_button">clcik</button>
												
													</td>
													</form>