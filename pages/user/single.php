<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'links.php';
?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <title>Document</title>
</head>
<style>
  .img{
    width: 30px; }
</style>
<body>
<?php include('home_header.php');
 
// $product_id =  $row['product_id']; 

?>
 
  <div class=" ">
    <div class="container card my-4">
    <?php
    	
      
 

if (isset($_SESSION['msgg'])) {
    echo $_SESSION['msgg'];
  } else {
    // echo $_SESSION['msg'] = "You are logged out. please login again.";
  }
if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        $_SESSION['review_product_id'] = $product_id;
        // echo $product_id;
			 $Selectquery ="SELECT * FROM product_page WHERE product_id='$product_id'";
	$query = mysqli_query($conn, $Selectquery);
	if($num = mysqli_num_rows($query)){
		
		while($row = mysqli_fetch_assoc($query)){
      $_SESSION['total'] = $row['price'];
      $max_price = $row['dis_price'];
      $min_price = $row['price'];
      $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100, 0);
      // $pid = $row['product_id'];
      // $quentity = $_POST['product_quentity'];
      
      $resMultipleImages=mysqli_query($conn,"select product_images from product_images where product_id='$product_id'");
      $multipleImages=[];
      if(mysqli_num_rows($resMultipleImages)>0){
        while($rowMultipleImages=mysqli_fetch_assoc($resMultipleImages)){
          $multipleImages[]=$rowMultipleImages['product_images'];
        }
      }
      $pathh = "multi_images/";
		?>
    <form  action="header.php" method="post">
      <div class="row g-0">
        <div class="col-md-6 border-end">
          <div class="d-flex flex-column justify-content-center">
            <div class="main_image" id="img-tab-1"> <img  src="../company/multi_images/<?php echo $row['img']; ?>" id="main_product_image"  style='height:500px;width:500px;'>
            </div>
           
            <div class="thumbnail_images">
              
              <ul id="thumbnail" class="d-flex justify-content-center">
              <?php if(isset($multipleImages[0])){?>
										<li id="multiple_images">
                      <img onclick=changeImage(this) width='70px'  src="../company/multi_images/<?php echo $row['img']; ?>">
											<?php
											foreach($multipleImages as $list){
			echo "<img onclick=changeImage(this) width='70px' src='../company/".$pathh.$list."'/>";
											}
											?>
											
										</li>
										<?php } ?>
                <!-- <li><img onclick="changeImage(this)" src="../../img/product/p3.avif" width="70"></li>
                <li><img onclick="changeImage(this)" src="../../img/product/p4.avif" width="70"></li>
                <li><img onclick="changeImage(this)" src="../../img/product/p5.avif" width="70"></li> -->
              </ul>
            </div>
      
          </div>
        </div>
        <div class="col-md-6">
          <div class="p-3 mt-1 right-side">
            <div class="d-flex justify-content-between align-items-center">
              <h3><b><?php echo $row['product_name']; ?></b></h3>
            </div>
            <div class="mt-2 pr-3 ">
              <p><b><?php echo $row['subtitle']; ?></b></p>
            </div>
            <h3><b>₹<?php echo $row['price']; ?>.00</b></h3>
            <div class="row align-items-center">
                <div class="col-md-2 text-dark">
                    Quantity:
                </div>
                <div class="col-md-2">
                    <!-- <form action='../../php/addToProduct.php'> -->
                        <input type="hidden" name='id' value='<?php echo  $row['product_id']; ?>'>
                        <input type="number" min="1" style="margin-left: -31px;" class='form-control' name='pro_quentity' value="1">

                </div>
           
            <div class="mt-3"> <span class="fw-bold">Available :</span>
              <span class="text-success"><?= $row['status'] == '0'? "In Stack":"Out of Stack" ?></span>
            </div>
            <div class="mt-2"> <span class="fw-bold">Sold by :</span>
              <span class=""><?php echo $row['brand']; ?></span>
            </div>
            <div class="colors mt-3">
              <div class="alert alert-primary p-2" role="alert">
                Get Flat <?php echo $percent_increase?>% Discount on first order.
              </div>
            </div>
            <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
            <div class=" d-flex flex-row mt-4 gap-3">
              
              <?php 
                                    if( $row['status'] == 0){ ?>
                                       <button   name="submit_update" class="btn btn-bg-x1 btn-lg">Buy Now</button>
                                   <?php }else{?>
                                   <button   name="submit_update" class="btn btn-bg-x1 btn-lg" disabled>Buy Now</button>
                                   <?PHP } ?>
              <button class="btn bg-x1 btn-lg" name="submit">Add to Cart</button>
            </div>

          </div>

          <div class="row mt-4 mb-3 px-4">
            <div class="col-12 col-lg-6 d-flex m-2 m-lg-0">
              <img class="img" src="../../img/genuine.png" alt="" width="40px">
              <p class="m-auto ms-3 color-x">100% Genuine Products</p>
            </div>
            <div class="col-12 col-lg-6 d-flex m-2 m-lg-0">
              <img class="img" src="../../img/return-box.png" alt="" width="40px">
              <p class="m-auto ms-3 color-x">Easy Return Policy</p>
            </div>

          </div>

        </div>
      </div>
    </form>
   
      <!--------------------here product section complete----------------------->
      <!--------------------here discription------------------>
      <!-- Tabs navs -->
      <ul class="nav nav-tabs nav-fill mt-3 px-4" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
            aria-controls="ex2-tabs-1" aria-selected="true">Description</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
            aria-controls="ex2-tabs-2" aria-selected="false">Ingredients</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab"
            aria-controls="ex2-tabs-3" aria-selected="false"> Reviews</a>
        </li>
      </ul>
      <!-- Tabs navs -->

      <!-- Tabs content -->
      <div class="tab-content" id="ex2-content">
        <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
          <!-----------------------description----------------------->
          <div class="px-4">
            <div class="des-sec mb-4">
              <div class="mb-4">
                <span class="fw-bold">Description : </span>
                <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>
                  <?php echo $row['description']; ?>
                </p>
              </div>

              <div class="mt-2"> <span class="fw-bold">Expiry Date : </span>
                <span class=""><?php echo $row['expiry_date']; ?></span>
              </div>
              <div class="mt-1"> <span class="fw-bold">Country of Origin :</span>
                <span class=""> <?php echo $row['country']; ?></span>
              </div>
              <div class="mt-1"> <span class="fw-bold">Sold by :</span>
                <span class=""><?php echo $row['company_name']; ?></span>
              </div>
              <div class="mt-2"> <span class="fw-bold">Address :</span>
                <span class=""><?php echo $row['Address']; ?></span>
              </div>

            </div>
          </div>
          <!-----------------------description----------------------->
        </div>

        <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
          <!-----------------------ing----------------------->
          <div class="px-4">
            <div class="des-sec mb-4">
              <div>
                <span class="fw-bold"> Ingredients : </span>
                <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>
                  <?php echo $row['Ingredients']; ?>
                 </p>
              </div>
            </div>
          </div>
          <!-----------------------ing----------------------->
        </div>

        <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
          <!-----------------------review----------------------->
          <div class="">
            <div class="des-sec1 mb-4">
              <div>


                <div class="row w-100 mb-3  g-4">
                  <div class="col-xl-7 ">
                    <span class="fw-bold ms-2">Reviews : </span>
                    <div class="scroll-x">
<!-- 
                    <div id="display_review">

</div> -->

<div class="card shadow-0 border rounded-3 ms-2 mt-2">

                        <div class="card-body">
                        <?php
  $sql = "SELECT * FROM rating where product_id = '$product_id'";
  $result = mysqli_query($conn, $sql);
  // if(mysqli_num_rows($selectquery) > 0){
  // while($row = mysqli_fetch_assoc($result)) {
    foreach($result as $row){
?>
                          <div class="row py-1">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex">
                            <?php
                            $user_id = $_SESSION['user_id'];
  $sql = "SELECT * FROM user_register WHERE user_id = '$user_id'";
  $result = mysqli_query($conn, $sql);
  while($data = mysqli_fetch_assoc($result)) {
?>
                              <div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">
                                <img src=""
                                  class="w-100" />
                                  <?php
                if($data['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="w-50">';
                }else{
                  echo '<img src="uploaded_img/'.$data['user_image'].'" alt="avatar" class="w-50">';
                }
                ?>
                                <a href="#!">
                                  <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                  </div>
                                </a>
                              </div>
                              <?php } ?>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                              <div class="mt-2">  <?php echo $row['name']; ?><span class="fw-bold"></span>
                                <span class=""> <?php echo $row['create_at']; ?></span>
                              </div>
                              <!-- <div class="d-flex flex-row">
                                <div class="color-x mb-1 me-2">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>

                              </div> -->


                              <p class="text-truncate mb-4 mb-md-0">
                      <?php echo $row['message']; ?>
                              </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">


                              <div class="d-flex h-100">
                                <a href="my review.php" class="btn bg-x1 m-auto" >Details</a>

                              </div>
                            </div>
                          </div>
                            <?php 
                            }
                  
                   ?>
                        </div>
                      
                      </div>
                   
                    </div>
                  </div>


                  <div class="col-md-12 col-xl-5" id="myModal">
                    <span class="fw-bold ">Your Review : </span>
                     

                                    <form action="header.php" method="post">
                         <!-- Name input -->
                         <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                      <div class="form-outline mb-4 mt-2">
                        <input type="text" id='userName' name='userName' class="form-control" />
                        <label class="form-label" for="form4Example1">Name</label>
                      </div>

                      <!-- Message input -->
                      <div class="form-outline mb-4">
                        <textarea class="form-control" name="userMessage"  id="userMessage" rows="4"></textarea>
                        <label class="form-label" for="form4Example3">Message</label>
                      </div>

                      <!-- Checkbox -->
                      <!-- <div class="form-check d-flex justify-content-center mb-4">

                        <label class="form-check-label mt-1" for="form4Example4">
                          Rates :

                        </label>
                        <h4>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_1'  data-rating='1'></i>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_2' data-rating='2'></i>
            <i class="fa fa-star star-light submit_star   mr-1 " id='submit_star_3' data-rating='3'></i>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_4' data-rating='4'></i>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_5' data-rating='5'></i>
        </h4>
                      </div> -->

                      <!-- Submit button -->
                      <button type="submit" class="btn bg-x1 btn-block mb-0" name="sendReview" id='sendReview'>Send</button>
                      </form>
                  </div>


                </div>
                
              </div>
            </div>
          </div>
          <!-----------------------review----------------------->
        </div>
      </div>
      <!-- Tabs content -->
      <!--------------------here discription end-------------->
      <div class="d-flex mt-1">
          <h4 class="m-auto">Suggested products </h4>
      </div>

      <!-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 p-5 p-lg-3 g-2 g-md-4"> -->
        
 <!------product-------> 
 <section>
		
		<div class="container py-5 px-5 px-sm-3 px-xl-5">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-2 g-sm-3 g-lg-4">
						<?php
							$Selectquery ="SELECT * FROM product_page where product_id != $product_id  order by rand() limit 4";
							$query = mysqli_query($conn, $Selectquery);
							if($num = mysqli_num_rows($query)){
						
						   while($row = mysqli_fetch_assoc($query)){
                $max_price = $row['dis_price'];
                $min_price = $row['price'];
                $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100, 0);
						?>
			<div class="col">
				<form action="cartlist.php" method="post">
				<div class="card" >
				  <div class="d-flex justify-content-between p-3">
					
					<p class="lead mb-0">Today's Combo Offer</p>
					<div
					  class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
					  style="width: 35px; height: 35px;">
					  <p class="text-white mb-0 small">-<?php echo $percent_increase ?>%</p>
					</div>
				  </div>
				  <img src="../company/multi_images/<?php echo $row['img']; ?>"
					class="card-img-top" alt="image" style="height:300px;"/>
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
  <!------product end------->
      <!-- </div>    -->

    </div>
  </div>
  <!--------------------product view end-------------->

  <!--------------------------------------------------------------------------------------------->
  <!-------------------------------this is the subscribe section----------------------->
  <!-- NEWSLETTER -->
  <div id="newsletter" class="section">
    <!-- container -->
    <div class="">
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
  <!-- /NEWSLETTER -->
  <!-------------------------this is the end of the subscribe section------------------>
 
  <!--------------------------------------------------------------------------------------------->
  <!--------------------------------this is the footer----------------------------------->
	<?php
  include 'footer.php';
  ?>

  <!--------------------------------end of the footer------------------------------------>




  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script> -->
    
    <script>
			function changeImage(im){
				jQuery('#img-tab-1').html("<img src='"+im+"'/>");
			}
			</script>

  <!-- MDB -->
  <script src="../../pages/company/assets/js/jquery-3.6.3.min.js"></script>
  <link rel="stylesheet" href="../../js/single_p.js">
  <script src="../../js/save_btn.js"></script>
  <script src="../../js/single_p.js"></script>
  <!-- <script src="../../js/script.js"></script> -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</body>

</html><?php
// $_SESSION['total'] = $_SESSION['total'] * $cart;
        }}}
?>