<?php require('razorpay-php/Razorpay.php'); include 'home_header.php';
      if(!isset($_SESSION['fname'])) 
      {
      	 header('location:home.php');
      	 exit();
      }
      else 
      {
        if (isset($_GET['id'])) {
        $pid=$_SESSION['p_id'];
        }else{
          
        }
        // if (isset($_GET['quen'])) {
        // $_SESSION['quen'] = $_GET['quen'];
        //   }
        
      }
      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment - Magicpin </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'links.php'; ?>
</head>
<style>
  .razorpay-payment-button{
    background-color: #D10024;
    color: white;
    padding: 11px 48px;
    border-radius: 29px;
    /* position: relative;
    top: -100px;
    right: -597px; */
  }
</style>
<body>
  <?php  ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 form-container">
				<h1>Payment</h1>
<hr>
<?php 
include("gateway-config.php");
//Razorpay//
use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);
 $Selectquery ="SELECT * FROM checkout";
	$query = mysqli_query($conn, $Selectquery);
	if($num = mysqli_num_rows($query)){
		
		while($row = mysqli_fetch_assoc($query)){
        $firstname=$_SESSION['firstname']; 
    $lastname=$_SESSION['user_lname'];
     $email=$_SESSION['user_email'];
    $mobile=$_SESSION['user_phone'];
    $address=$_SESSION['address'];
    $note=$_SESSION['pincode'];
        }}

// $sql="SELECT * from products WHERE pid=:pid"; 
//          $stmt = $db->prepare($sql);
//            $stmt->bindParam(':pid',$pid,PDO::PARAM_INT);
//             $stmt->execute();
//            $row=$stmt->fetch();
//            $price=$row['price'];
//            $_SESSION['price']=$price;
//            $title=$row['title'];
      // $title=$_SESSION['product_name'];
        $price=$_SESSION['total'];  
$webtitle='Magicpin'; // Change web title
$displayCurrency='INR';
$imageurl='https://technosmarter.com/assets/images/Avatar.png'; //change logo from here
$orderData = [
    'receipt'         => 3456,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
  "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $webtitle,
    "description"       => "magicpin",
    "image"             => $imageurl,
    "prefill"           => [
    "name"              => $firstname.' '.$lastname,
    "email"             => $email,
    "contact"           => $mobile,
    ],
    "notes"             => [
    "address"           => $address,
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#D10024"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);



 ?>
				<div class="row"> 
					<div class="col-6"> 
            <h4>(Payer Details)</h4>
  <div class="mb-3">
    <label  class="label">First Name :- </label>
     <?php echo $firstname; ?>
  </div>
  <div class="mb-3">
    <label class="label">Last Name:- </label>
      <?php  echo $lastname; ?>
  </div>

  <div class="mb-3">
    <label class="label">Email:- </label>
      <?php echo $email; ?>
  </div>
  <div class="mb-3">
    <label class="label">Mobile:- </label>
      <?php  echo $mobile; ?>
  </div>
  <div class="mb-3">
    <label class="label">Address:- </label>
    <?php echo $address; ?>
  </div>
  <div class="mb-3">
    <label class="label">Note:- </label>
    <?php  echo $note; ?>
    <!-- <?php // echo $_SESSION['cart_order_id']; ?> -->
  </div>


				<!-- //	</div>
					//<div class="col-4 text-center">-->
				
		<!-- // 			 $sql="SELECT * from products WHERE pid=:pid"; 
        //  $stmt = $db->prepare($sql);
        //    $stmt->bindParam(':pid',$pid,PDO::PARAM_INT);
        //     $stmt->execute();
        //    $row=$stmt->fetch();
     // '<div class="card" style="width: 18rem;">
  //<img class="card-img-top" src="uploads/'//.$row['image'].'" alt="Card image cap">
 // <div class="card-body">
  //  <h5 class="card-title">'.$row['title'].'</h5>
  //  <p class="card-text">'.$row['price'].' INR</p>
//</div>
//</div>';  -->
				
				<br>
				  <center>
   <form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="<?php echo $pid;?>"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="<?php echo $pid;?>">
</form>
</center>

				</div>
        <div class="col-6"> 
        <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $quentity = $_GET['quen'];
          $Selectquery ="SELECT * FROM product_page WHERE product_id = $id";
          $query = mysqli_query($conn, $Selectquery);
          if($num = mysqli_num_rows($query)){
            
            ?>
               <table class="table-responsive  table-hover table-bordered table-striped">
                            <tbody>
                           <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                              <tr>
                                <td><img src="../company/multi_images/<?php echo $row['img'] ?>" alt="" height="100px" width="100px" srcset=""></td>
                                <td><?php echo $row['product_name'] ?></td>
                                <td><?php echo $row['price'] * $quentity ?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                          <?php }
          
        }else{
          if (!isset($_GET['id'])) {
                        $user_id = $_SESSION['user_id'];
                        // $total = 0;
                        $sql = "SELECT * " .
                          "FROM product_page, cartlist " .
                          "WHERE cartlist.user_id = $user_id AND product_page.product_id = cartlist.product_id";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result)) {

                         ?>
                          <table class="table-responsive  table-hover table-bordered table-striped">
                            <tbody>
                           <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                              <tr>
                                <td><img src="../company/multi_images/<?php echo $row['img'] ?>" alt="" height="100px" width="100px" srcset=""></td>
                                <td><?php echo $row['product_name'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                          <?php }} ?>
				<?php } ?>
		</div>
	</div>
</div>
<script src="../../pages/company/assets/js/jquery-3.6.3.min.js"></script>
  <script src="../../js/script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>