<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>my review</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->
<?php 
// $_SESSION['product_review_id'] = $_GET['id'];
?>
  <div class="container  my-4">
    <section>
      <div class="py-3">

        <div class="row">
          <div class="col-xl-4 row">
           <!------product------->
           <?php 
           if (isset($_GET['pro_id'])) {
            $product_id = $_GET['pro_id'];
            $rating_id = $_GET['rating_id'];
            // $_SESSION['review_product_id'] = $product_id;
            // echo $product_id;
           $Selectquery ="SELECT * FROM rating,product_page,user_register WHERE rating.user_id = user_register.user_id AND rating.product_id = product_page.product_id AND product_page.product_id='$product_id' AND rating.rating_id = '$rating_id'";
          $query = mysqli_query($conn, $Selectquery);
          if($num = mysqli_num_rows($query)){
          
          $row = mysqli_fetch_assoc($query);
          $max_price = $row['dis_price'];
          $min_price = $row['price'];
          $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100, 0);
           ?>
            <form action="cartlist.php" method="post">
           <div class="col-12 col-md-8 col-xl-12 mx-auto">
            <div class="card">
              <!-- <div class="d-flex justify-content-between p-3">
                <p class="lead mb-0">Today's Combo Offer</p>
                <div
                  class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                  style="width: 35px; height: 35px;">
                  <p class="text-white mb-0 small">-<?php echo $percent_increase ?>%</p>
                </div>
              </div> -->
              <img src="../company/multi_images/<?php echo $row['img']; ?>"
                class="card-img-top px-4" alt="Laptop" />
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <p class="small"><a href="#!" class="text-muted"><?php echo $row['product_name']; ?></a></p>
                  <!-- <p class="small text-danger"><s><?php echo $row['dis_price']; ?></s></p> -->
                </div>
    
                <!-- <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0"><?php echo $row['brand']; ?></h5>
                  <h5 class="text-dark mb-0"><?php echo $row['price']; ?></h5>
                </div> -->
<!--     
                <div class="d-flex justify-content-between mb-2">
                  <p class="text-muted mb-0 ">Rates :</p>
                  <div class=" text-x ">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div> -->
                <!-- <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
                <input type="hidden" name="pro_quentity" value="1">

                <div class=" d-flex justify-content-between mt-3">
                <button class="btn btn-bg-x1" name="wi1" data-mdb-toggle="tooltip"
                                            title="Move to the wish list">
                                            <i class="fas fa-heart"></i>
                                        </button>
                  <button class="btn bg-x1">Add tO Cart</button>
                </div> -->
              </div>
            </div>
          </div>
          <?php }} ?>
            <!------product end------->
          </div>
          </form>
          <div class="col-xl-8 ">
            <div class="">
              <div class="card mb-4  mt-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row['name']; ?></p>
                    </div>
                  </div>
                  <hr>
                  <form action="header.php" method="post">
                    <input type="hidden" name="rating_id" value="<?php echo $row['rating_id']; ?>">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Email</p>
                    </div>
                    <div class="col-sm-9 d-flex">
                      <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
                      <button class="btn btn-sm btn-bg-x1 ms-auto" name="delete_single_review_btn">DELETE</button>
                    </div>
                  </div>
                  </form>
                  <hr>
                    <!-- <div class="row">
                    <div class="col-sm-3 ">
                      <p class="mb-0 color-x1 my-auto">Rates</p>
                    </div>
                    <div class="col-sm-9 d-flex">
                      <div class="text-muted mb-0 text-x my-auto"> 
                        <i class="fa fa-star text-x"></i>
                        <i class="fa fa-star text-x"></i>
                        <i class="fa fa-star text-x"></i>
                        <i class="fa fa-star text-x"></i>
                        <i class="fa fa-star text-x"></i></div>
                        
                    </div>
                  </div>
                 -->
                  </div>
                </div>
              </div>

              <div class="card ">
                  <div class="rew-x">
                    <div class="py-1 border-bottom mx-3"> <h5 class="my-2 color-x1">Description</h5></div>
                    <div class="p-3">
                      <p class=" mb-3"><span><i class="fa-solid fa-arrow-right color-x1 me-2"></i></span>
                      <?php echo $row['message']; ?>
                      </p>

                       
                    </div>
                  </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  </div>


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
  <!--------------------------------end of the footer------------------------------------>



  
  <script src="../../pages/company/assets/js/jquery-3.6.3.min.js"></script>
  <script src="../../js/single_review.js"></script>

  <!-- MDB -->
  <script src="./js/save_btn.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>