<?php
	// include '../../php/config.php';
	include 'home_header.php';
	?>
<!DOCTYPE html>
<html lang="en">

<head>
	
				<?php
	include 'links.php';
	?>
	
	<title>Document</title>
</head>
<style>

</style>

<body>


	<!--------------------------------this is the slider section-------------------------->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100 xv" src="../../img/slide-01.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 xv" src="../../img/slide-02.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 xv" src="../../img/slide-03.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!--------------------------------this is the end of the section----------------------->
	<!--------------------------------catagory--------------------------------------------->
	<?php  if (isset($_SESSION['msgg'])) {
                      echo $_SESSION['msgg'];
					  unset($_SESSION['msgg']);
                    } 
					?>
	<section>
		<!-- <form action="cartlist.php" method="post"> -->
		<div class="container py-5 px-5 px-sm-3 px-xl-5">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-2 g-sm-3 g-lg-4">
			<?php
			 $Selectquery ="SELECT * FROM product_page WHERE delete_status = 'active' ORDER BY RAND() LIMIT 4";
	$query = mysqli_query($conn, $Selectquery);
	if($num = mysqli_num_rows($query)){
		
		while($row = mysqli_fetch_assoc($query)){
			// $_SESSION['product_id'] = $row['product_id'];
			$_SESSION['product_name'] = $row['product_name'];
			$_SESSION['price'] = $row['price'];
			$_SESSION['quentity'] = $row['description'];
			$max_price = $row['dis_price'];
			$min_price = $row['price'];
			$percent_increase = number_format((($max_price - $min_price) / $min_price) * 100 , 0);
			// $prod_name = SUBSTRING_INDEX($max_price, '\n', 1);
			$sub=substr(strstr($row['product_name'], '-'), 1);
		?>
			<div class="col">
			<form action="cartlist.php" method="post">
				<div class="card">	
				  <div class="d-flex justify-content-between p-3">
					
					<p class="lead mb-0">Today's Combo Offer</p>
					<div
					  class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
					  style="width: 35px; height: 35px;">
					  <p class="text-white mb-0 small">-<?php echo $percent_increase ?>%</p>
					</div>
				  </div>
				  <img src="../company/multi_images/<?php echo $row['img']; ?>"
					class="card-img-top" alt="product" style="height:300px;"/>
				  <div class="card-body">
					<div class="d-flex justify-content-between">
					  <p class="small"><a href="#!" class="text-muted"><?php echo $row['company_name']; ?></a></p>
					  <p class="small text-danger"><s>₹<?php echo $row['dis_price']; ?></s></p>
					</div>
		
					<div class="d-flex justify-content-between mb-3">
					<a   href='single.php?id=<?php echo  $row["product_id"] ?>' <h6 class="mb-0"><?php echo $row['product_name']; ?></h6></a>
					  <P class="text-dark mb-0">₹<?php echo $row['price']; ?>.00</P>
					</div>
		
				
					<input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
					<!-- <input type="hidden" name="pro_images" value="<?php //echo $row['img']; ?>">
					<input type="hidden" name="pro_name" value="<?php //echo $row['product_name']; ?>">
					<input type="hidden" name="pro_brand" value="<?php // echo $row['brand']; ?>">-->
					<input type="hidden" name="pro_quentity" value="1">
					<!-- <input type="hidden" name="pro_price" value="<?php // echo $row['price']; ?>">  -->
			
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
		<!-- </form> -->
	</section>
	
	<!-------------------------------this is the subscribe section----------------------->
	<!-- NEWSLETTER -->

	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Sign Up for the <strong>NEWSLETTER</strong></p>
						<form class="row " action="header.php" method="post">
							<input class="input col-8" name="email" type="email" placeholder="Enter Your Email">
							<button class="newsletter-btn col-4" name="subscribe_btn"><i class="fa fa-envelope"></i> Subscribe</button>
						</form>
						
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

	
	<!--------------------------------end of add to cart page------------------------------>

<!-- <<<<<<< HEAD -->
	<script type="text/javascript" src="../../js/p 5roduct.js"></script>
<!-- ======= -->
   

<!-- >>>>>>> 0b05203e433144efbaa3b65c5054a034c2c5287c -->
<script src="../../pages/company/assets/js/jquery-3.6.3.min.js"></script>
  <script src="../../js/script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>