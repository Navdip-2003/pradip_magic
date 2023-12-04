<!doctype html>
<html lang="en">

<head>
	<?php

use Google\Service\CloudSearch\InsertContent;

include 'links.php';
  ?>
	<style>
	.errorr {
		color: red;
	}

	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	.map {
		height: 74vh;
		width: 100%;
		border-radius: 15px;
	}

	.co-icon {
		height: 45px;
		width: 45px;
		background-color: #D10024;
		border-radius: 25px;
	}

	.iconX {
		color: #eee;
		font-size: 20px;
	}

	.textX {
		font-weight: 500;
		font-size: 18px;
	}

	.addX {
		margin-left: 45px;
	}

	.sgx {
		font-size: 14px;
	}

	.card-bg {
		background-color: rgb(242, 242, 242);
	}

	.hgs {
		height: 50px;
	}

	.hgsx {
		height: 42px;
		align-items: center;
		border-bottom: 1.5px solid rgb(210, 210, 210);
	}

	.x {
		font-weight: 500;
		font-size: 15px;
	}
	</style>
	<title>Check Out</title>
</head>

<body>
	<!----------------------------------header section----------------------------------->
	<!-- HEADER -->
	<?php
  include 'home_header.php';
  ?>
	<!-- /HEADER -->
	<!-------------------------------end of hedaer section------------------------------->
	<div class="container py-4">
		<div class="card">
			<div class="checkout_area my-3">
				<div class="container">
					<div class="row">

						<div class="col-12 col-md-6">
							<div class="checkout_details_area mt-50 clearfix">

								<div class="cart-page-heading mb-30">
									<h5>Billing Address</h5>
								</div>
								<?php  
// define variables to empty values  
// $fnameErr = $fnameErr = $addressErr = $pincodeErr = $cityErr = $stateErr = $countryErr =  $mobilenoErr = $emailErr = $methodErr  = "";  
// $fname= $lname = $address = $pincode = $city = $state = $country =  $mobileno = $email = $method  = "";  
// // $name = $email = $mobileno = $gender = $website = $agree = "";  
  
// //Input fields validation  
// if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
// //String Validation  
//     if (!empty($_POST["fname"])) {  
//          $fnameErr = "First Name is required";  
//     } else {  
//         $fname = input_data($_POST["fname"]);  
//             // check if name only contains letters and whitespace  
//             if (!preg_match("/^[a-zA-Z]*$/",$fname)) {  
//                 $fnameErr = "Only alphabets and white space are allowed";  
//             }  
//     }
    
//     if (!empty($_POST["lname"])) {  
//       $lnameErr = "Last Name is required";  
//  } else {  
//      $lname = input_data($_POST["lname"]);  
//          // check if name only contains letters and whitespace  
//          if (!preg_match("/^[a-zA-Z]*$/",$lname)) {  
//              $lnameErr = "Only alphabets and white space are allowed";  
//          }  
//  }

//  if (!empty($_POST["address"])) {  
//   $addressErr = "Address is required";  
// } else {  
//  $address = input_data($_POST["address"]);  
//      // check if name only contains letters and whitespace  
//      if (!preg_match("/^[a-zA-Z1-9 ]*$/",$address)) {  
//          $addressErr = "Only alphabets and white space are allowed";  
//      }  
// }

// if (!empty($_POST["pincode"])) {  
//   $pincodeErr = "Pincode no is required";  
// } else {  
//   $pincode = input_data($_POST["pincode"]);  
//   // check if mobile no is well-formed  
//   if (!preg_match ("/^[0-9]*$/", $pincode) ) {  
//   $pincodeErr = "Only numeric value is allowed.";  
//   } 

// }

// if (!empty($_POST["city"])) {  
//   $cityErr = "city Name is required";  
// } else {  
//  $city = input_data($_POST["city"]);  
//      // check if name only contains letters and whitespace  
//      if (!preg_match("/^[a-zA-Z]*$/",$city)) {  
//          $cityErr = "Only alphabets and white space are allowed";  
//      }  
// }

// if (!empty($_POST["state"])) {  
//   $stateErr = "State Name is required";  
// } else {  
//  $state = input_data($_POST["state"]);  
//      // check if name only contains letters and whitespace  
//      if (!preg_match("/^[a-zA-Z]*$/",$state)) {  
//          $stateErr = "Only alphabets and white space are allowed";  
//      }  
// }

// if (!empty($_POST["country"])) {  
//   $countryErr = "Country Name is required";  
// } else {  
//  $country = input_data($_POST["country"]);  
//      // check if name only contains letters and whitespace  
//      if (!preg_match("/^[a-zA-Z]*$/",$country)) {  
//          $countryErr = "Only alphabets and white space are allowed";  
//      }  
// }
   
//   //Number Validation  
//   if (!empty($_POST["mobileno"])) {  
//     $mobilenoErr = "Mobile no is required";  
// } else {  
//     $mobileno = input_data($_POST["phone"]);  
//     // check if mobile no is well-formed  
//     if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
//     $mobilenoErr = "Only numeric value is allowed.";  
//     }  
// //check mobile no length should not be less and greator than 10  
// if (strlen ($mobileno) != 10) {  
//     $mobilenoErr = "Mobile no must contain 10 digits.";  
//     }  
// } 

//     //Email Validation   
//     if (!empty($_POST["email"])) {  
//             $emailErr = "Email is required";  
//     } else {  
//             $email = input_data($_POST["email"]);  
//             // check that the e-mail address is well-formed  
//             if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
//                 $emailErr = "Invalid email format";  
//             }  
//      }  
    
   
      
    
      
//     //Empty Field Validation  
//     // if (!empty ($_POST["gender"])) {  
//     //         $genderErr = "Gender is required";  
//     // } else {  
//     //         $gender = input_data($_POST["gender"]);  
//     // }  
  
//     //Checkbox Validation  
//     if (!isset($_POST['agree'])){  
//             $agreeErr = "Accept terms of services before submit.";  
//     } else {  
//             $agree = input_data($_POST["agree"]);  
//     }  
// }  
// function input_data($data) {  
//   $data = trim($data);  
//   $data = stripslashes($data);  
//   $data = htmlspecialchars($data);  
//   return $data;  
// }  
if (isset($_GET['que'])) {
  $_SESSION['que'] = $_GET['que'];
  $_SESSION['id']= $_GET['id'];


			 $Selectquery ="SELECT * FROM product_page ";
	$query = mysqli_query($conn, $Selectquery);
	if($num = mysqli_num_rows($query)){
		
		while($row = mysqli_fetch_assoc($query)){
    $product_id =  $_SESSION['product_id'] = $row['product_id'];
    }}}
?>
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
									<span class="errorr">* required field </span>
									<br><br>
									<div class="row">
										<div class="col-md-6 mb-3">
											<label for="first_name">First Name </label>
											<input type="text" name="fname" class="form-control" id="first_name"
												value="">
										</div>
										<div class="col-md-6 mb-3">
											<label for="last_name">Last Name </label>
											<input type="text" name="lname" class="form-control" id="last_name"
												value="">
										</div>
										<div class="col-12 mb-3">
											<label for="company">Company Name</label>
											<input type="text" name="cname" class="form-control" id="company" value="">
										</div>

										<div class="col-12 mb-3">
											<label for="street_address">Addressn </label>
											<textarea name="address" id="" cols="30" rows="5"
												class="w-100 form-control"></textarea>
										</div>
										<div class="col-12 mb-3">
											<label for="postcode">Pincoden </label>
											<input type="text" name="pincode" class="form-control" id="postcode"
												value="">
										</div>
										<div class="col-12 mb-3">
											<label for="city">Town/City</label>
											<input type="text" name="city" class="form-control" id="city" value="">
										</div>
										<div class="col-12 mb-3">
											<label for="state">State </label>
											<input type="text" name="state" class="form-control" id="state" value="">
										</div>
										<div class="col-12 mb-3">
											<label for="country">Countryn</label>
											<select class="w-100 form-control" name="country" id="country">
												<option value="United States">United States</option>
												<option value="United Kingdom">United Kingdom</option>
												<option value="Germany">Germany</option>
												<option value="France">France</option>
												<option value="India">India</option>
												<option value="Australia">Australia</option>
												<option value="Brazil">Brazil</option>
												<option value="Canada">Canada</option>
											</select>
										</div>
										<div class="col-12 mb-3">
											<label for="phone_number">Phone Noan </label>
											<input type="number" name="phone" class="form-control" id="phone_number"
												min="0" value="">
										</div>
										<div class="col-12 mb-4">
											<label for="email_address">Email Address </label>
											<input type="email" name="email" class="form-control" id="email_address"
												value="">
										</div>

										<div class="col-12">
											<div class="custom-control custom-checkbox d-block mb-2">
												<input type="checkbox" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label" for="customCheck1">Terms and
													conitions</label>
											</div>
											<div class="custom-control custom-checkbox d-block mb-2">
												<input type="checkbox" class="custom-control-input" id="customCheck2">
												<label class="custom-control-label" for="customCheck2">Create an
													accout</label>
											</div>
											<div class="custom-control custom-checkbox d-block">
												<input type="checkbox" class="custom-control-input" id="customCheck3">
												<label class="custom-control-label" for="customCheck3">Subscribe to our
													newsletter</label>
											</div>
											<div class="pt-5 d-none d-md-block">
												<h6 class="mb-0">
													<?php echo "<a href=\"javascript:history.go(-1)\"  class='text-body'><i
                            class='fas fa-long-arrow-alt-left me-2'></i>Back to shop</a>"; ?>
												</h6>
											</div>
										</div>

									</div>
									<!-- </form> -->


							</div>
						</div>

						<div class="col-12 col-md-6 col-lg-6 ml-lg-auto mt-4 mt-md-0">
							<div class="order-details-confirmation p-5 pt-0">

								<!-- <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div> -->
								<div class="d-flex w-100 justify-content-between hgs">
									<h5>Your Order</h5>
									<p>The Details</p>
								</div>

								<ul class="order-details-form mb-4">
									<li class="d-flex w-100 justify-content-between hgsx"><span>Product</span>
										<span>Total</span></li>
									<li class="d-flex w-100 justify-content-between hgsx"><span>Cocktail Yellow
											dress</span> <span>₹ <?php 
                            if(isset( $_GET['que'])){
								$_SESSION ['ttotal'] = $_GET['que'] *  $_SESSION ['total'];
                              echo $_SESSION ['ttotal'];
							//   unset($_SESSION ['total']);z
                            }else{
                            echo $_SESSION ['total']; } ?>.00</span></li>
									<li class="d-flex w-100 justify-content-between hgsx"><span>Subtotal</span> <span>₹
											00.00</span></li>
									<li class="d-flex w-100 justify-content-between hgsx"><span>Shipping</span>
										<span>Free</span></li>
									<li class="d-flex w-100 justify-content-between hgsx"><span>Total</span> <span>₹ <?php 
                            if(isset( $_GET['que'])){
								$_SESSION ['total'] = $_GET['que'] *  $_SESSION ['total'];
								echo $_SESSION ['total'];
                            }else{
                            echo $_SESSION ['total']; } ?>.00</span></li>
								</ul>

								<!-- <form action="../../php/user_checkout.php" method="post" class="form-group ps-3"> -->


								<!-- <a href="#" name="submit" class="btn btn-lg bg-x1 w-100 mt-5">Place Order</a> -->
								<button type="submit" name="submit" class="btn btn-lg bg-x1 w-100 mt-5">Place
									Order</button>

								</form>
							</div>

							<div class="pt-5 d-md-none">
												<h6 class="mb-0">
													<?php echo "<a href=\"javascript:history.go(-1)\"  class='text-body'><i
                            class='fas fa-long-arrow-alt-left me-2'></i>Back to shop</a>"; ?>
												</h6>
											</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php
// session_start();
// include '../../php/config.php';
// include 'userregi_email.php';
// $_SESSION['con'] = "";
// data insert code
if (isset($_GET['id'])) {
  $quentity = $_GET['que'];
  $_SESSION['que'] = $quentity;
  $product_id = $_GET['id'];
  $_SESSION['p_id'] = $product_id;
}
elseif (isset($_GET['user'])) {
  $use_id = $_GET['user'];
  $_SESSION['pp_id'] = $use_id;
}
  // echo $product_id;
//  $Selectquery ="SELECT * FROM product_page WHERE product_id='$product_id'";
// $query = mysqli_query($conn, $Selectquery);
// if($num = mysqli_num_rows($query));

// while($row = mysqli_fetch_assoc($query));

if (isset($_POST['submit'])) {
//  if($fnameErr == "" && $fnameErr == "" && $addressErr == "" && $pincodeErr == "" && $cityErr == "" && $stateErr == "" && $countryErr == "" && $mobilenoErr == "" && $emailErr == ""){   
  // $product_id =  $_SESSION['product_id'] ;
	$fname = $_SESSION['firstname'] =  $_POST['fname'];
	$lname = $_SESSION['user_lname'] = $_POST['lname'];
	$address = $_SESSION['address'] = $_POST['address'];
	$pincode = $_SESSION['pincode'] = $_POST['pincode'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$mobileno = $_SESSION['user_phone'] = $_POST['phone'];
	$email = $_SESSION['user_email'] = $_POST['email'];
  
  if(isset($_SESSION['p_id'])){
  $product_id = $_SESSION['p_id'];
  $pro_id = $_SESSION['id'];
  $pro_que = $_SESSION['que'];
}
// elseif(isset($_SESSION['pp_id'])){
//   $pro = $_SESSION['pp_id'];}
	// $method = $_POST['payment'];


	
					// if($fname != "" && $email != "" && $address != ""){
					// $insertquery = ;
					$query = mysqli_query($conn, "INSERT INTO checkout(fname,lname,address,pincode,city,state,country,phone,email) VALUES('$fname','$lname','$address','$pincode','$city','$state','$country','$mobileno','$email')");
					if($query){
            $_SESSION['cart_order_id'] = $cart_order_id = mysqli_insert_id($conn);
            if(isset($_SESSION['pp_id'])){
                      if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];
                        $_SESSION['cart_order_id'] = $cart_order_id = mysqli_insert_id($conn);
                        // $total = 0;
                        $sql = "SELECT * " .
                          "FROM product_page, cartlist " .
                          "WHERE cartlist.user_id = $user_id AND product_page.product_id = cartlist.product_id";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result)) {

                          while ($row = mysqli_fetch_assoc($result)) {
                            $cart_pro_id = $row['product_id'];
                            $cart_que = $row['pro_quentity'];
                            $cart_price = $row['price'];
                            $cart_dis_price = $row['dis_price'];
                            $cart_product_name = $row['product_name'];
                           

                                    
                                      // echo $_SESSION['pp_id'];
                                      $cartorderquery = mysqli_query($conn, "INSERT INTO cart_order_item(user_id,order_id,pro_id,pro_name,que,price,dis_price) VALUES('$user_id','$cart_order_id','$cart_pro_id','$cart_product_name','$cart_que','$cart_price','$cart_dis_price')");
                                      if( $cartorderquery){
                                        unset($_SESSION['pp_id']);
                                        header("Location:pay.php");
                                      }} }}
                                    }else{if(isset($_SESSION['que'])) {
                                    $quen = $_SESSION['que'];
                                    $que_query = mysqli_query($conn, "UPDATE checkout SET quen='$quen' where id='$cart_order_id'");
                                    if($que_query){
                                    header("Location:pay.php?id=$product_id&quen=$quen");
                                    unset($_SESSION['que']);
                                  }else{
                                    echo "data not inserted";
                                  }
                                  // header("Location:../pages/user/contact.php?error=Please Fill The Form");
                                }	}
                                // }else{
                                //   echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>"; 
                                }else{
                                  echo "data not inserted";
                                }	
                                
}
?>



	<!--------------------------------------------------------------------------------------------->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<h5 id="offcanvasRightLabel">Offcanvas right</h5>
			<button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">...</div>
	</div>
	<!--------------------------------------------------------------------------------------------->
	<!--------------------------------this is the footer----------------------------------->
	<!-- FOOTER -->
	<?php
  include 'footer.php';
  ?>
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