<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>complaint </title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->

<div class="container my-4">
  <div class=" ">
    <ul class="nav nav-tabs justify-content-center mb-3" id="ex1" role="tablist">
      <li class="nav-item " role="presentation">
        <button
          class="nav-link active"
          id="home-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#home0"
          type="button"
          role="tab"
          aria-controls="home"
          aria-selected="true"
        >
          My Complaints
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="profile-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#profile0"
          type="button"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
        >
          Complain Replays
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="contact-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#contact0"
          type="button"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
        >
          Write Complain
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent0">
      <div
        class="tab-pane fade show active"
        id="home0"
        role="tabpanel"
        aria-labelledby="home-tab0"
      >
      <!-------------------my complaints---------------->
              <div class="row  borx py-4 ps-2 border-bottom">

                                        <div class="col-12 col-lg-9 p-0 d-flex">

                                            <!---company logo----->
                                            <div class=" my-auto">
                                                <img src="../img/lorian.png" class="hig-image" alt="">
                                            </div>
                                            <!----message------->
                                            <div class="ps-3">
                                                <div class="py-0">
                                                    <div class=""> <span class="fw-bold">Nayka private Limitade </span>
                                                        <span class="">-January 2025</span>
                                                        <div>
                                                            <span class="fw-bold">to-</span>
                                                            <span class="">Prince desai</span>
                                                        </div>
                                                        <div class="hide-xy d-none d-md-block">
                                                            <p class="pb-0 mb-0">Lorem, ipsum dolor sit amet consectetur
                                                                adipisicing elit. Odio, totam.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
                                            <!------buttons------>
                                            <div class="d-flex btnx-w m-auto me-0">
                                                <a href="./singal-feedback.html">
                                                    <button class="btn  bg-x1 m-1">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                                <button class="btn btn-bg-x1 p-2 px-4 m-1">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>

                                        </div>

                                    </div>
     
     <div class="container my-4">
      <div class="card px-4 pb-3">
            
         <!-----1 complain----->
         <?php 
         if (isset($_SESSION['user_id'])) {
          $user_id = $_SESSION['user_id'];
    
      
          $sql = "SELECT * " .
            "FROM user_register, use_complaint " .
            "WHERE use_complaint.user_id = $user_id AND user_register.user_id = use_complaint.user_id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
              $ids = $row['complaint_id'];
         ?>
        <div class="row  borx py-4 ps-2">

          <div class="col-12 col-lg-9 p-0 d-flex">

          <!---company logo----->
      <div class="img-logo2 my-auto">
        <div class="border-rx ">
          <?php
                if($row['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="img-logo2"  style="height: 100px;">';
                }else{
                  echo '<img src="uploaded_img/'.$row['user_image'].'" alt="avatar" class="img-logo2"  style="height: 100px;">';
                }
                ?>
        </div>
      </div>
         <!----message------->
    <div class="ps-3">
      <div class="py-0">
        <div class=""> <span class="fw-bold"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?> </span>
          <span class=""><?php echo $row['create_at']; ?></span>
          <div> 
            <span class="fw-bold">to-</span>
            <span class=""><?php echo $row['company_name']; ?></span>
          </div>
          <div class="hide-xy d-none d-md-block"> <p class="pb-0 mb-0"><?php echo $row['description']; ?>
          </p></div>
          
        </div>
      </div>
    </div>
    </div>

    <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
           <!------buttons------>
    <div class="d-flex btnx-w m-auto me-0">
      <a href="single-complain.php?id=<?php echo $row['complaint_id']; ?>" class="btn btn-sm bg-x1  hei-x m-lg-auto m-1 d-flex">
        <i class="fa-solid fa-eye m-auto"></i>
      </a >
      <form action="header.php" method="post">
      <input type="hidden" name="complaint_replay_id" value=<?php echo $row['complaint_id']; ?>>

      <button class="btn btn-sm btn-bg-x1  hei-x m-lg-auto m-1"  name="delete_complaint_replay">
        <i class="fa-solid fa-trash"></i>
      </button>
      </form>
    </div>

    </div>
    
        </div>

   <?php }}}?>
           <!-----1 complain----->
          

      </div>
     </div>
     
      
      <!-------------------my complaints---------------->
      </div>


      <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
        <!------------------complaints replay-------------->
        
    
        <div class="container my-4">
       
          <div class="card px-4 pb-3">
          <?php 
         if (isset($_SESSION['user_id'])) {
          $user_id = $_SESSION['user_id'];
    
          // $total = 0;
    
          $sql = "SELECT * " .
            "FROM admin_register, replay_complaint " .
            "WHERE admin_register.id = replay_complaint.company_id and replay_complaint.compaint_id = $ids";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($data = mysqli_fetch_assoc($result)) {
         ?>
         
             <!-----1 complain----->
            <div class="row  borx py-4 ps-2">
    
              <div class="col-12 col-lg-9 p-0 d-flex">
          
              <!---company logo----->
          <div class="img-logo2 my-auto">
            <div class="border-rx ">
              <img src="../company/company_logo/<?php echo $data['Image']; ?>" class="img-logo2" style="width:100px" alt="">
            </div>
          </div>
             <!----message------->
        <div class="ps-3">
          <div class="py-0">
            <div class=""> <span class="fw-bold"><?php echo $data['company_name']; ?></span>
              <span class="">-<?php echo $data['create_at']; ?></span>
              <div> 
                <span class="fw-bold">to-</span>
                <span class=""><?php echo $data['customer_name']; ?>  </span>
              </div>
              <div class="hide-xy d-none d-md-block"> <p class="pb-0 mb-0"><?php echo $data['re_description']; ?>
              </p></div>
              
            </div>
          </div>
        </div>
        </div>
    
    <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
           <!------buttons------>
    <div class="d-flex btnx-w m-auto me-0">
      <a href="single-complain.php?replay_id=<?php echo $data['replay_id']; ?>" class="btn btn-sm bg-x1  hei-x m-lg-auto m-1">
        <i class="fa-solid fa-eye"></i>
      </a>
    
    </div>
   
    </div>
    
        </div>
            
           <?php }}} ?>
              <!-----1 complain----->
             
        
          </div>
         
         </div>
      
        <!------------------complaints replay-------------->
      </div>


      <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
        <!-------------------write complaint--------------->
        <div class="container my-4 my-lg-0">
          <section class=" ">
            <div class="container  h-100 my-2  card card-registration">
              <div class="row d-flex align-items-center justify-content-center h-100 ">
                <div class="col-md-9 col-lg-7 col-xl-6 pt-lg-0">
                  <img src="../../img/lo&rg/Call center-pana.svg" class="img-fluid " alt="Phone image">
                </div>
                <div class="col-md-8 col-lg-5 col-xl-5 mt-3 mt-xl-0 p-4">
      
      
                  <!--------------------------------------------+ cancel form +------------------------------------>
                  <?php 
                  if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                  }
                  ?>
                  <p class="mb-3 tit">Write complain</p>
                  <form class="w-100" action="header.php" method="post">
                  <!-- <select name="company" id="form4Example2" class="form-control"> -->
                      <?php
                        // $sql = "SELECT * FROM categorye";
                        // $result=mysqli_query($conn,$sql);
                        // while($row = mysqli_fetch_assoc($result)){
                      ?>
                       
                        <?php // } ?>
                      <!-- </select> -->
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="order" id="form4Example1" class="form-control" />
                      <label class="form-label" for="form4Example1">Your Order Id</label>
                    </div>
                  
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="company" id="form4Example2" class="form-control" />
                      <label class="form-label" for="form4Example2">Company Name</label>
                    </div>

                    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="subject" id="form4Example2" class="form-control" />
                      <label class="form-label" for="form4Example2">Complaint subject</label>
                    </div>
                  
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea class="form-control" name="complain" id="form4Example3" rows="4"></textarea>
                      <label class="form-label"  for="form4Example3">Complain Description</label>
                    </div>

                    
                  
                   <!-- file input-->
                   <!-- <div class="row"  id="image_box"> -->
							<div class="col-md-8">
						   <label for="" mb-0>Upload Image</label><br>
					       <input type="file" name="image" class="form-control" mb-2>
						</div>
						<!-- <div class="col-md-2">
										<label for="categories" class=" form-control-label"></label><br>
										<button id="" type="button" class="btn btn-sm btn-info btn-block" onclick="add_more_images()">
											<span id="payment-button-amount">Add Image</span>
										</button>
									 </div>
							</div> -->
                     <!-- Submit button -->
                     <button type="submit" name="complain_submit" class="btn bg-x1 btn-block my-4">Report</button>
                  </div>
                  
                  
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-------------------write complaint--------------->
      </div>
    </div>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
  <!-- <script src="../admin/assets/js/custom.js"></script> -->
</body>

</html>