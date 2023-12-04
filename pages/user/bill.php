<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>product bill</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->


  <div class="container my-4">
  <?php
  $id = $_GET['id'];
  $order_id = $_GET['order'];
  // $pro_que = $_GET['que'];
  // $pro_id = $_SESSION['id'];

            // $txn_id = $_SESSION['txnid'];
            $selectquery = mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.payid = $id AND product_page.product_id = payments.pid");
            if (mysqli_num_rows($selectquery) > 0) {
              if ($row = mysqli_fetch_array($selectquery)) {
                $max_price = $row['dis_price'];
                $min_price = $row['price'];
                $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100 , 0);
                $datetime = $row['payment_date'];
$getOnlyDate = date('Y-m-d',strtotime($datetime));
            ?>
   <div class="card">
    <div id="ui-view"><div><div class="">
      <div class="card-header d-flex">
       <img src="../../img/magicpin-logo2.png" class="bil-l-logo d-none d-md-block" alt="">
       <p class=" m-0 ms-auto me-3"> Invoice<strong class="color-x1 ms-1">#<?php echo $row['txnid']; ?></strong></p>
      </div>
      
      
      
      </div>
      <div class="card-body">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 g-lg-0 mb-4">
      <div class="col">
      <h6 class="mb-3 color-x1">From:</h6>
      <div><strong >BBBootstrap Inc.</strong></div>
      <div>546 Aston Avenue</div>
      <div>NYC, NY 12394</div>
      <div>Email: contact@bbbootstrap.com</div>
      <div>Phone: +1 848 389 9289</div>
      </div>
      
      <div class="col">
      <h6 class="mb-3 color-x1">To:</h6>
      <div><strong><?php echo $row['firstname'];  ?> <?php echo $row['lastname'];  ?></strong></div>
      <div><?php echo $row['address'];  ?></div>
      <div><?php echo $row['note'];  ?></div>
      <div>Email:<?php echo $row['payer_email'];  ?></div>
      <div>Phone: <?php echo $row['mobile'];  ?></div>
      </div>
      
      <div class="col">
      <h6 class="mb-3 color-x1">Details:</h6>
      <div>Invoice<strong><?php echo $row['txnid']; ?></strong></div>
      <div><?php echo $getOnlyDate;  ?></div>
      <div>Account Name: BANK OF AMERICA</div>

      </div>
      
      </div>
      <?php
      if($row['quen'] != 0 ){?>
      <div class="table-responsive-lg">
      <table class="table table-striped">
      <thead>
      <tr>
      <th class="center color-x1">#</th>
      <th class="color-x1">Item</th>
      <th class="color-x1">Description</th>
      <th class="center color-x1">UNIT</th>
      <th class="right color-x1">COST</th>
      <th class="right color-x1">Total</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td class="center">1</td>
      <td class="left"><?php echo $row['product_name']; ?></td>
      <td class="left"><?php echo $row['description']; ?></td>
      <td class="center"><?php echo $row['quen']; ?></td>
      <td class="right"><?php echo $row['price']?> </td>
      <td class="right"><?php echo $row['price'] * $row['quen'] ?> </td>
      
      </tr>
      
      </tbody>
      </table>
      </div>
      <div class="row">
      <div class="col-lg-4 col-sm-5 d-flex"><p class="m-auto"><?php echo $row['address']; ?></p></div>
      <div class="col-lg-4 col-sm-5 ms-auto">
      <table class="table table-clear">
      <tbody>
      <tr>
      <td class="left"><strong class="color-x1">Subtotal</strong></td>
      <td class="right"><?php echo $row['dis_price'] * $row['quen'] ?> </td>
      </tr>
      <tr>
      <td class="left"><strong class="color-x1">Discount (<?php echo $percent_increase ?>% )</strong></td>
      <td class="right"><?php echo ($row['dis_price'] * $row['quen']) - ($row['price'] * $row['quen']) ?> </td>
      </tr>
      <!-- <tr>
      <td class="left"><strong class="color-x1">VAT (10%)</strong></td>
      <td class="right">$90</td>
      </tr> -->
      <tr>
      <td class="left"><strong class="color-x1">Total</strong></td>
      <td class="right"><strong><?php echo $row['price'] * $row['quen'] ?> </strong></td>
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      <?php
      }else{
      ?>
         <div class="table-responsive-lg">
      <table class="table table-striped">
      <thead>
      <tr>
      <th class="center color-x1">#</th>
      <th class="color-x1">Item</th>
      <!-- <th class="color-x1">Description</th> -->
      <th class="center color-x1">UNIT</th>
      <th class="right color-x1">COST</th>
      <th class="right color-x1">Total</th>
      </tr>
      </thead>
      <tbody>
      <?php
          $order_id = $_GET['order'];
          $selectquerycart = mysqli_query($conn, "SELECT * FROM cart_order_item,payments WHERE  payments.order_id = $order_id AND cart_order_item.order_id = $order_id");
              if (mysqli_num_rows($selectquerycart) > 0) {
                $index_id = 0;
                foreach ($selectquerycart as $data) {
                $index_id++;?>
               
      <tr>
   
        <td class="center"><?php echo $index_id; ?></td>
      <td class="left"><?php echo $data['pro_name']; ?></td>
      <td class="center"><?php echo $data['que']; ?></td>
      <td class="right"><?php echo $data['price']?> </td>
      <td class="right"><?php echo $data['price'] * $data['que']; ?> </td>
      </tr> <?php }} ?> </tbody>
      </table>
      </div>  
      <div class="row">
      <div class="col-lg-4 col-sm-5 d-flex"><p class="m-auto"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p></div>
      <div class="col-lg-4 col-sm-5 ms-auto">
      <table class="table table-clear">
      <tbody>
      <tr>
      <td class="left"><strong class="color-x1">Subtotal</strong></td>
      <td class="right"><?php echo $data['dis_price'] * $data['que'] ?>.00 </td>
      </tr>
      <tr>
      <td class="left"><strong class="color-x1">Discount (<?php echo $percent_increase ?>% )</strong></td>
      <td class="right"><?php echo ($data['dis_price'] * $data['que']) - ($data['price'] * $data['que']) ?>.00 </td>
      </tr>
      <!-- <tr>
      <td class="left"><strong class="color-x1">VAT (10%)</strong></td>
      <td class="right">$90</td>
      </tr> -->
      <tr>
      <td class="left"><strong class="color-x1">Total</strong></td>
      <td class="right"><strong><?php echo $data['amount'] ?>.00 </strong></td>
      </tr>
      </tbody>
      </table>
      </div>
      </div>
        <?php } ?>

      

      </div>
      </div></div></div>
   </div>
  <?php }} ?>
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
  <?php include 'footer.php' ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>