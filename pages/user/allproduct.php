<!DOCTYPE html>
<html lang="en">

<head>
	
	<?php
	include 'links.php';
	?>
	<title>Document</title>
</head>

<body>

	<!----------------------------------header section----------------------------------->
	<?php
	// include '../../php/config.php';
	include 'home_header.php';
	?>


	<section>
		
		<div class="container py-5 px-5 px-sm-3 px-xl-5">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-2 g-sm-3 g-lg-4">
						<?php
							$Selectquery ="SELECT * FROM product_page";
							$query = mysqli_query($conn, $Selectquery);
							if($num = mysqli_num_rows($query)){
						
						   while($row = mysqli_fetch_assoc($query)){
						
						?>
			<div class="col">
				<form action="cartlist.php" method="post">
				<div class="card">
				  <div class="d-flex justify-content-between p-3">
					
					<p class="lead mb-0">Today's Combo Offer</p>
					<div
					  class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
					  style="width: 35px; height: 35px;">
					  <p class="text-white mb-0 small">X<?php echo $row['offer']; ?></p>
					</div>
				  </div>
				  <img src="../company/multi_images/<?php echo $row['img']; ?>"
					class="card-img-top" alt="Laptop" />
				  <div class="card-body">
					<div class="d-flex justify-content-between">
					  <p class="small"><a href="#!" class="text-muted"><?php echo $row['brand']; ?></a></p>
					  <p class="small text-danger"><s>₹<?php echo $row['dis_price']; ?></s></p>
					</div>
		
					<div class="d-flex justify-content-between mb-3">
					<a   href='single.php?id=<?php echo  $row["product_id"] ?>' <h5 class="mb-0"><?php echo $row['product_name']; ?></h5></a>
					  <h5 class="text-dark mb-0">₹<?php echo $row['price']; ?></h5>
					</div>
		
					
					<input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
					<input type="hidden" name="pro_quentity" value="1">
					<div class=" d-flex justify-content-between mt-3">
						<!-- <button class="btnX" name="wi1"><i class=" fa-bookmark add_cart_btn my-auto class_chain fa-regular m-auto"></i></button> -->
						<button  class="btn btn-bg-x1" name="wi1" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button>
					
						<input type="submit" class="btn btn-sm bg-x1" name="submit"  value="Add To Cart">
					<!-- <a   href='single.php?id=<?php //echo  $row["product_id"] ?>' class="btn btn-default btn-xs pull-left">
                        <i class="fa fa-eye"></i> Details
                    	 -->
					  
					</div>
				  </div>
				</div>
				</form>
			  </div>	<?php } }?>
			</div>
		</div>
	
	</section>

	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Sign Up for the <strong>NEWSLETTER</strong></p>
						<form class="row ">
							<input class="input col-8" type="email" placeholder="Enter Your Email">
							<button class="newsletter-btn col-4"><i class="fa fa-envelope"></i> Subscribe</button>
						</form>
						<ul class="newsletter-follow">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	
	<?php
  include 'footer.php';
  ?>
	


	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<h5 id="offcanvasRightLabel">Offcanvas right</h5>
			<button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">...</div>
	</div>

	
	<script type="text/javascript" src="../../js/product.js"></script>

	<script src="../../pages/company/assets/js/jquery-3.6.3.min.js"></script>
  <script src="../../js/script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>