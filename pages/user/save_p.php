<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'links.php';
?>
<title>Document</title>
</head>

<body>
	<?php
		include 'home_header.php';
	?>
<h2 class="text-center container py-2 px-2 px-sm-3 px-xl-2">SAVE PRODUCTS</h2>


	
                    <hr class=" mx-4 mt-10">
                      
		<!-- <form action="cartlist.php" method="post"> -->
		<?php  if (isset($_SESSION['msgg'])) {
                      echo $_SESSION['msgg'];
					  unset($_SESSION['msgg']);
                    } ?>
		<div class="container py-5 px-5 px-sm-3 px-xl-5">
		
			<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-2 g-sm-3 g-lg-4">
			<?php
                      if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];

                        $total = 0;

                        $sql = "SELECT * " .
                          "FROM product_page, wishlist " .
                          "WHERE wishlist.user_id = $user_id AND product_page.product_id = wishlist.product_id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result)) {

                          while ($row = mysqli_fetch_assoc($result)) {
                      ?>
			<div class="col">
			<form action="cartlist.php" method="post">
				<div class="card">
				  
					<div class="d-flex">
					<a href="../user/cartlist.php?id=<?php echo  $row["wish_id"] ?>"
					  class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong ms-auto m-3"
					  style="width: 35px; height: 35px;">
					  <p class="text-white mb-0 small">X</p>
					
						  </a>
					</div>
				  <img src="../company/multi_images/<?php echo $row['img']; ?>"
					class="card-img-top" alt="Laptop" height="250px" />
				  <div class="card-body">
					<div class="d-flex justify-content-between">
					  <p class="small"><a href="#!" class="text-muted"><?php echo $row['brand']; ?></a></p>
					  <p class="small text-danger"><s>₹<?php echo $row['dis_price']; ?></s></p>
					</div>
		
					<div class="d-flex justify-content-between mb-3">
					<a   href='single.php?id=<?php echo  $row["product_id"] ?>' <h6 class="mb-0"><?php echo $row['product_name']; ?></h6></a>
					  <P class="text-dark mb-0">₹<?php echo $row['price']; ?>.00</P>
					</div>
		
					
					<input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
					
					<input type="hidden" name="pro_quentity" value="1">
			
					<div class=" d-flex justify-content-between mt-3">
					<button  class="btn btn-bg-x1" name="wi1" data-mdb-toggle="tooltip"
                    title="Move to the wish list" disabled>
                    <i class="fas fa-heart" ></i>
                  </button>
						<input type="submit" class="btn btn-sm bg-x1" name="submit"  value="Add To Cart">
					<!-- <a   href='single.php?id=<?php //echo  $row["product_id"] ?>' class="btn btn-default btn-xs pull-left">
                        <i class="fa fa-eye"></i> Details
                    	 -->
					  
					</div>
				  </div>
				</div>
				</form>
			  </div>	
			
			<?php } }}?></div>
		</div>
		
		<!-- </form> -->
		<?php include 'footer.php' ?>
<!-- >>>>>>> 0b05203e433144efbaa3b65c5054a034c2c5287c -->
<script src="../../pages/company/assets/js/jquery-3.6.3.min.js"></script>
  <script src="../../js/script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>