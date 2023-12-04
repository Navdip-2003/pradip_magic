<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
<?php include 'links.php'; ?>
  <title>My Review</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->

<div class="container my-4">
  <div class="card pb-3">

    <div class="d-flex p-4 pt-3 mx-3 border-bottom">
      <p class="tit m-auto">My Reviews</p>
     </div>
     <?php
     $user_id =$_SESSION['user_id'];
        $search_email = "SELECT * FROM rating,user_register WHERE rating.user_id = user_register.user_id AND rating.user_id = '$user_id'";
        $query = mysqli_query($conn,$search_email);
    
       if($email_row = mysqli_num_rows($query) > 0 ){
   
        //  if($data = mysqli_fetch_assoc($query)){	
			foreach ($query as $data){
				$product_id = $data['product_id'];
				$rating_id = $data['rating_id'];
     ?>

     <div class="noti-x" id="display_review">

          <!----review-1------->
		  <form action="header.php" method="post">
          <div class="card shadow-0 border rounded-3 mx-5 mt-4">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-2 col-xl-2 mb-4 mb-lg-0 d-flex">
                  <div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                      class="w-100 px-3 px-md-5 p-lg-0" /> -->
					  <?php
                if($data['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="px-3 px-md-5 p-lg-0" style="width: 100px;">';
                }else{
                  echo '<img src="uploaded_img/'.$data['user_image'].'" alt="avatar" class="px-3 px-md-5 p-lg-0" style="width: 100px;">';
                }
                ?>
                    <a href="#!">
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-7">
                  <div class="mt-2"> <span class="fw-bold"><?php echo $data['name'] ?> -</span>
                    <span class=""><?php echo $data['create_at'] ?></span>
                  </div>
                  <!-- <div class="d-flex flex-row">
                    <div class="color-x1 mb-1 me-2">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>

                  </div> -->
				  <input type="hidden" name="rating_id" value="<?php echo $data['rating_id']; ?>">

                  <p class="text-truncate mb-4 mb-md-0">
				  <?php echo $data['message'] ?>
                  </p>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">


                  <div class="d-flex h-100 flex-wrap">
                    <a href="my single review.php?pro_id=<?php echo urlencode ($product_id); ?>&rating_id=<?php echo urlencode ($rating_id); ?>" class="btn bg-x1  m-auto me-xxl-1" type="button">Details</a>
					
					

                    <button class="btn btn-bg-x1 m-auto p-2 px-4  ms-xxl-1" name="delete_review_btn">Delete</button>
					
                  </div>
                </div>
				
              </div>
            </div>
          </div>
         
		  </form>
        

          

     </div>
<?php }} ?>
  </div>
</div>

  
<!--------------------------------------------------------------------------------------------->
<div
  class="offcanvas offcanvas-end"
  tabindex="-1"
  id="offcanvasRight"
  aria-labelledby="offcanvasRightLabel"
>
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button
      type="button"
      class="btn-close text-reset"
      data-mdb-dismiss="offcanvas"
      aria-label="Close"
    ></button>
  </div>
  <div class="offcanvas-body">...</div>
</div>
<!--------------------------------------------------------------------------------------------->
<!--------------------------------this is the footer----------------------------------->
	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
					<div class="col">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col">
						<div class="footer">
							<h3 class="footer-title">Categories</h3>
							<ul class="footer-links">
								<li><a href="#">Hot deals</a></li>
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Smartphones</a></li>
								<li><a href="#">Cameras</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
					</div>

					

					<div class="col">
						<div class="footer">
							<h3 class="footer-title">Information</h3>
							<ul class="footer-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Orders and Returns</a></li>
								<li><a href="#">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>

					<div class="col">
						<div class="footer">
							<h3 class="footer-title">Service</h3>
							<ul class="footer-links">
								<li><a href="#">My Account</a></li>
								<li><a href="#">View Cart</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Track My Order</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col text-center">
						<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
					<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->
	<!--------------------------------end of the footer------------------------------------



  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <!-- MDB -->
  <script src="../../pages/company/assets/js/jquery-3.6.3.min.js"></script>
  <script src="../../js/script.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>




