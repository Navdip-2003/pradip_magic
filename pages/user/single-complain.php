<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>single complain</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; if (isset($_GET['id'])) {?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->

  <div class="container  my-4">
  <?php 
         if (isset($_SESSION['user_id'])) {
          $user_id = $_SESSION['user_id'];
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
       
          // $total = 0;
    
          $sql = "SELECT * " . 
            "FROM user_register, use_complaint " .
            "WHERE user_register.user_id = use_complaint.user_id AND complaint_id = $id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
    <section>
      <div class="py-3">

        <div class="row">
          <div class="col-xl-4 ">
            <div class="card mb-4">
              <div class="card-body text-center">
              <?php
                if($row['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="rounded-circle img-fluid" style="width: 150px;">';
                }else{
                  echo '<img src="uploaded_img/'.$row['user_image'].'" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">';
                }
                ?>
                <!-- <img src="uploaded_img/<?php // echo $row['user_image']; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;"> -->
                <h5 class="my-3 ">From : <span class="text-x"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></span></h5>
                <p class="text-muted mb-1"><?php echo $row['email']; ?></p>
                
              </div>
            </div>
                <?php 
            $sql = "SELECT * " .
            "FROM admin_register,use_complaint " .
            "WHERE  admin_register.company_name = use_complaint.company_name and use_complaint.complaint_id = '$id'";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($data = mysqli_fetch_assoc($result)) { ?>
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="../company/company_logo/<?php echo $data['Image'] ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3 ">To : <span class="text-x"><?php echo $data['company_name'] ?></span></h5>
                <p class="text-muted mb-1"><?php echo $data['email'] ?></p>
                
              </div>
            </div>
              <?php }} ?>
          </div>

          <div class="col-xl-8 ">

            <div class="">
              <div class="card mb-4  mt-4 ">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Subject</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row['subject']; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Date</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row['create_at']; ?></p>
                    </div>
                  </div>
                 
                
                  </div>
                </div>
              </div>

             <div class=" card">
             
              <div class="py-1 border-bottom mx-3"> <h5 class="my-2 color-x1">Complaint</h5></div>

               <div class="notX py-2 ms-3">

                <div class="mt-1">
                  
                 <p>
                 <?php echo $row['description']; ?>
                 </p>
                 
                </div>
                       
               </div>
             </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <?php }}}} ?>
  </div>
<?php }else{ ?>
<div class="container  my-4">
  <?php 
         if (isset($_SESSION['user_id'])) {
          $user_id = $_SESSION['user_id'];
          if (isset($_GET['replay_id'])) {
            $replay_id = $_GET['replay_id'];
       

    
          $sql = "SELECT * " . 
            "FROM admin_register, replay_complaint " .
            "WHERE admin_register.id = replay_complaint.company_id AND replay_complaint.replay_id  = $replay_id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($data = mysqli_fetch_assoc($result)) {
         ?>
    <section>
      <div class="py-3">

        <div class="row">
          <div class="col-xl-4 ">
            <div class="card mb-4">
              <div class="card-body text-center">
             
                <img src="../company/company_logo/<?php echo $data['Image']; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3 ">From : <span class="text-x"><?php echo $data['company_name']; ?></span></h5>
                <p class="text-muted mb-1"><?php echo $data['re_email']; ?></p>
                
              </div>
            </div>
                <?php 
                 if (isset($_SESSION['user_id'])) {
                  $user_id = $_SESSION['user_id'];
            $sql = "SELECT * " .
            "FROM user_register, use_complaint " .
            "WHERE  user_register.user_id = use_complaint.user_id AND use_complaint.user_id = $user_id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="card mb-4">
              <div class="card-body text-center">
              <?php
                if($row['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="rounded-circle img-fluid" style="width: 150px;height:150px;">';
                }else{
                  echo '<img src="uploaded_img/'.$row['user_image'].'" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;height:150px;">';
                }
                ?>
                <!-- <img src="../company/company_logo/<?php // echo $row['Image'] ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;"> -->
                <h5 class="my-3 ">To : <span class="text-x"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></span></h5>
                <p class="text-muted mb-1"><?php echo $row['email'] ?></p>
                
              </div>
            </div>
              <?php }}} ?>
          </div>

          <div class="col-xl-8 ">

            <div class="">
              <div class="card mb-4  mt-4 ">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Subject</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $data['re_subject']; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Date</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $data['create_at']; ?></p>
                    </div>
                  </div>
                 
                
                  </div>
                </div>
              </div>

             <div class=" card">
             
              <div class="py-1 border-bottom mx-3"> <h5 class="my-2 color-x1">Complaint</h5></div>

               <div class="notX py-2 ms-3">

                <div class="mt-1">
                  
                 <p>
                 <?php echo $data['re_description']; ?>
                 </p>
                 
                </div>
                       
               </div>
             </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <?php }}}} ?>
  </div>
  <?php } ?>

  <!--------------------------------------------------------------------------------------------->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Offcanvas right</h5>
      <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">...</div>
  </div>
  <!--------------------------------------------------------------------------------------------->
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
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                target="_blank">Colorlib</a>
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
</body>

</html>