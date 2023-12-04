<?php require('razorpay-php/Razorpay.php');  include 'home_header.php';
if(isset($_SESSION['p_id'])){
 $pid=$_SESSION['p_id'];
}
// require_once("../../php/config.php");
//  session_start();
define('DBNAME','magicpin');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Your page is connected with database successfully..";
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}

        // $pid=$_SESSION['product_id'];
		// $price=$_SESSION['total'];
      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Verification - Techno Smarter </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'links.php'; ?>

</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-sm-12 form-container">
				<h1>Payment Status</h1>
<hr>

				<div class="row"> 
					<div class="col-8"> 
            <?php 
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
$success = true;
include("gateway-config.php");
$error = "Payment Failed";
if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
if ($success === true)
{
  $user_id = $_SESSION['user_id'];	
 $firstname=$_SESSION['firstname']; 
$lastname=$_SESSION['user_lname'];
 $email=$_SESSION['user_email'];
$mobile=$_SESSION['user_phone'];
$address=$_SESSION['address'];
$note=$_SESSION['pincode'];
$productinfo='Payment';  

$posted_hash = $_SESSION['razorpay_order_id'];
    if(isset($_POST['razorpay_payment_id']))
        
    $txnid = $_POST['razorpay_payment_id'];
    $amount = $_SESSION['total'];
    $status='success'; 
  $eid=$_POST['shopping_order_id']; 
$subject='Your payment has been successful..';
       $key_value='okpmt'; 
  
$currency='INR';
$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
$payment_date=$date->format('Y-m-d H:i:s');
     $sql="SELECT count(*) from payments WHERE txnid=:txnid"; 
       $stmt = $db->prepare($sql);
           $stmt->bindParam(':txnid', $txnid, PDO::PARAM_STR);
           $stmt->execute();
          $countts=$stmt->fetchcolumn();
  if($txnid!=''){
//     if($countts<=0)
//     {
//       $sql="INSERT INTO payments(firstname,lastname,amount,status,txnid,user_id,payer_email,currency,mobile,address,note,payment_date) VALUES(:firstname,:lastname,:amount,:status,:txnid,:user_id,:payer_email,:currency,:mobile,:address,:note,:payment_date)"; 
//        $stmt = $db->prepare($sql);
     
//            $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
//            $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
//            $stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
//            $stmt->bindParam(':status', $status, PDO::PARAM_STR);
//            $stmt->bindParam(':txnid', $txnid, PDO::PARAM_STR);
//            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
//            $stmt->bindParam(':payer_email', $email, PDO::PARAM_STR);
//            $stmt->bindParam(':currency', $currency, PDO::PARAM_STR);
//            $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
//           $stmt->bindParam(':address', $address, PDO::PARAM_STR);
//            $stmt->bindParam(':note', $note, PDO::PARAM_STR);
//             $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
//            $stmt->execute();
// }
// if(isset($_SESSION['quen'])){
//   $pro_que = $_SESSION['quen'];
// }
if(isset($_SESSION['cart_order_id'] )){
    $cart_order_id = $_SESSION['cart_order_id'];

    $Selectquery ="SELECT * FROM checkout WHERE id = $cart_order_id ";
    $query = mysqli_query($conn, $Selectquery);
    if($num = mysqli_num_rows($query)){
      
      while($row = mysqli_fetch_assoc($query)){
        $pro_que = $row['quen'];
}}}
if($countts<=0)
    {
      $sql="INSERT INTO payments(firstname,lastname,amount,Status,txnid,pid,order_id,user_id,payer_email,currency,mobile,address,note,quen,payment_date) VALUES(:firstname,:lastname,:amount,:status,:txnid,:pid,:cart_order_id,:user_id,:payer_email,:currency,:mobile,:address,:note,:pro_que,:payment_date)"; 
       $stmt = $db->prepare($sql);
           $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
           $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
           $stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
           $stmt->bindParam(':status', $status, PDO::PARAM_STR);
           $stmt->bindParam(':txnid', $txnid, PDO::PARAM_STR);
           $stmt->bindParam(':pid', $pid, PDO::PARAM_INT);
           $stmt->bindParam(':cart_order_id', $cart_order_id, PDO::PARAM_INT);
           $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
           $stmt->bindParam(':payer_email', $email, PDO::PARAM_STR);
           $stmt->bindParam(':currency', $currency, PDO::PARAM_STR);
           $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
          $stmt->bindParam(':address', $address, PDO::PARAM_STR);
           $stmt->bindParam(':note', $note, PDO::PARAM_STR);
           $stmt->bindParam(':pro_que', $pro_que, PDO::PARAM_INT);
            $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
           $stmt->execute();
           unset($_SESSION['quen']);
}
 // start 
        echo ' <h2 style="color:#33FF00";>'.$subject.'</h2>   <hr>';

        echo '<table class="table">'; 
        echo '<tr> '; 
$rows= $sql="SELECT * from payments WHERE txnid=:txnid"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':txnid',$txnid,PDO::PARAM_STR);
            $stmt->execute();
           $rows=$stmt->fetchAll();
foreach($rows as $row)
{
    $dbdate = $row['payment_date'];
}
echo '<tr>  
          <th>Transaction ID:</th>
        <td>'.$txnid.'</td> 
    </tr>
     <tr> 
        <th>Paid Amount:</th>
        <td>'.$amount.' '. $currency.'</td> 
    </tr>
    <tr>
       <th>Payment Status:</th>
        <td>'.$status.'</td> 
   </tr>
   <tr> 
       <th>Payer Email:</th>
       <td>'.$email.'</td> 
   </tr>
    <tr> 
       <th>Name:</th>
       <td>'.$firstname.' '.$lastname.'</td>
   </tr>
   <tr> 
       <th>Address:</th>
       <td>'.$address.'</td>
   </tr>
   <tr> 
       <th>Note:</th>
       <td>'.$note.'</td>
   </tr>

   <tr>
       <th>Date :</th>
       <td>'.$dbdate.'</td> 
  </tr>
  </table>';
}
 else 
 {
  $html = "<p><div class='errmsg'>Invalid Transaction. Please Try Again</div></p>";   
  $error_found=1;      
 }    
 $subject = "Welcome to Magicpin E-website";
 // $body = $data;
 $body = "
 <table id='gmail-u_body' style='border-collapse: collapse; table-layout: fixed; border-spacing: 0px; vertical-align: top; min-width: 320px; margin: 0px auto; background-color: #f9f9f9; width: 1188px;' cellspacing='0' cellpadding='0'>
<tbody>
<tr style='vertical-align: top;'>
<td style='word-break: break-word; vertical-align: top; border-collapse: collapse;'>
<div class='gmail-u-row-container' style='padding: 0px; background-color: transparent;'>
<div class='gmail-u-row' style='margin: 0px auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-break: break-word; background-color: #D10024;'>
 <div style='border-collapse: collapse; display: table; width: 600px; height: 86.5625px; background-color: transparent;'>
   <div class='gmail-u-col gmail-u-col-100' style='max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;'>
     <div style='height: 86.5625px; width: 600px;'>
       <div style='box-sizing: border-box; height: 86.5625px; padding: 0px; border: 0px solid transparent;'>
         <table style='font-family: Cabin, sans-serif;' role='presentation' border='0' width='100%' cellspacing='0' cellpadding='0'>
           <tbody>
             <tr>
               <td style='overflow-wrap: break-word; word-break: break-word; padding: 20px;' align='left'>
                 <table border='0' width='100%' cellspacing='0' cellpadding='0'>
                   <tbody>
                     <tr>
                       <td style='padding-right: 0px; padding-left: 0px; font-size:45px;' align='center'>
                         <span style='outline: none; height: auto; float: none; width: 196px; max-width: 196px; display: inline-block; color:white;' >MagicPin</span>
                       </td>
                     </tr>
                   </tbody>
                 </table>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
<div class='gmail-u-row-container' style='padding: 0px; background-color: transparent;'>
<div class='gmail-u-row' style='margin: 0px auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-break: break-word; background-color: #ffffff;'>
 <div style='border-collapse: collapse; display: table; width: 600px; height: 506.8px; background-color: transparent;'>
   <div class='gmail-u-col gmail-u-col-100' style='max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;'>
     <div style='height: 506.8px; width: 600px;'>
       <div style='box-sizing: border-box; height: 506.8px; padding: 0px; border: 0px solid transparent;'>
         <table style='font-family: Cabin, sans-serif;' role='presentation' border='0' width='100%' cellspacing='0' cellpadding='0'>
           <tbody>
             <tr>
               <td style='overflow-wrap: break-word; word-break: break-word; padding: 30px 40px 33px;' align='left'>
                 <div style='line-height: 26px; text-align: center; overflow-wrap: break-word;'>
                   <p style='font-size: 14px; line-height: 28px; text-align: left; margin: 0px;'>
                     <span style='font-size: 18px; line-height: 36px;'>Hi $firstname $lastname,</span>
                   </p>
                   <p style='font-size: 14px; line-height: 28px; text-align: left; margin: 0px;'>&nbsp;</p>
                   <p style='line-height: 28px; text-align: left; font-size: 14px; margin: 0px;'>
                     <span style='font-size: 18px; line-height: 36px;'>Thank you for your purchase, this email confirms your order. We will send you another email as soon as it delivered.&nbsp;</span>
                   </p>
                   <p style='line-height: 28px; text-align: center; font-size: 14px; margin: 0px;'>&nbsp;</p>
                   <p style='line-height: 28px; text-align: center; font-size: 14px; margin: 0px;'>
                     <span style='font-size: 18px; line-height: 36px;'>
                     Order Id : $txnid &nbsp; 
                       <br>
                       <h2>$dbdate</h2>
                       <br><p style='font-size: 18px; line-height: 36px;'>You can follow the status / order details of your order by clicking the button bellow:</P>
                     </span>
                   </p>
                 </div>
               </td>
             </tr>
           </tbody>
         </table>
         <table style='font-family: Cabin, sans-serif;' role='presentation' border='0' width='100%' cellspacing='0' cellpadding='0'>
           <tbody>
             <tr>
               <td style='overflow-wrap: break-word; word-break: break-word; padding: 10px;' align='left'>
                 <div align='center'>
                   <a href='http://localhost/pro_magic/pages/user/order.php' target='_blank' class='gmail-v-button' style='color: #ffffff; box-sizing: border-box; display: inline-block; text-decoration-line: none; text-size-adjust: none; background-color: #e67e23; border-radius: 4px; width: auto; max-width: 100%; word-break: break-word; overflow-wrap: break-word; font-size: 14px;' rel='noopener'>
                     <span style='display: block; padding: 14px 44px 13px; line-height: 16.8px;'>
                       <span style='line-height: 16.8px;'>
                         <strong>
                           <span style='line-height: 16.8px;'>ORDER DETAIL</span>
                         </strong>
                       </span>
                     </span>
                   </a>
                 </div>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
<div class='gmail-u-row-container' style='padding: 0px; background-color: transparent;'>
<div class='gmail-u-row' style='margin: 0px auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-break: break-word; background-color: #ffffff;'>
 <div style='border-collapse: collapse; display: table; width: 600px; height: 289px; background-color: transparent;'>
   <div class='gmail-u-col gmail-u-col-100' style='max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;'>
     <div style='height: 289px; width: 600px;'>
       <div style='box-sizing: border-box; padding: 0px; border: 0px solid transparent;'>
  
         <table style='font-family: Cabin, sans-serif;' role='presentation' border='0' width='100%' cellspacing='0' cellpadding='0'>
           <tbody>
             <tr>
               <td style='overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 33px;' align='left'>
                 <div align='center'>
                   <div style='display: table; max-width: 244px;'>
                     <table style='display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0px; vertical-align: top; margin-right: 17px; width: 32px; height: 32px;' border='0' width='32' cellspacing='0' cellpadding='0' align='left'>
                       <tbody>
                         <tr style='vertical-align: top;'>
                           <td style='word-break: break-word; vertical-align: top; border-collapse: collapse;' align='left' valign='middle'>
                             <a href='https://facebook.com/' title='Facebook' target='_blank' rel='noopener'>
                               <img style='outline: none; text-decoration-line: none; clear: both; border: none; height: auto; float: none; display: block; max-width: 32px;' title='Facebook' src='https://cdn.tools.unlayer.com/social/icons/circle/facebook.png' alt='Facebook' width='32'>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                     <table style='display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0px; vertical-align: top; margin-right: 17px; width: 32px; height: 32px;' border='0' width='32' cellspacing='0' cellpadding='0' align='left'>
                       <tbody>
                         <tr style='vertical-align: top;'>
                           <td style='word-break: break-word; vertical-align: top; border-collapse: collapse;' align='left' valign='middle'>
                             <a href='https://linkedin.com/' title='LinkedIn' target='_blank' rel='noopener'>
                               <img style='outline: none; text-decoration-line: none; clear: both; border: none; height: auto; float: none; display: block; max-width: 32px;' title='LinkedIn' src='https://cdn.tools.unlayer.com/social/icons/circle/linkedin.png' alt='LinkedIn' width='32'>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                     <table style='display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0px; vertical-align: top; margin-right: 17px; width: 32px; height: 32px;' border='0' width='32' cellspacing='0' cellpadding='0' align='left'>
                       <tbody>
                         <tr style='vertical-align: top;'>
                           <td style='word-break: break-word; vertical-align: top; border-collapse: collapse;' align='left' valign='middle'>
                             <a href='https://instagram.com/' title='Instagram' target='_blank' rel='noopener'>
                               <img style='outline: none; text-decoration-line: none; clear: both; border: none; height: auto; float: none; display: block; max-width: 32px;' title='Instagram' src='https://cdn.tools.unlayer.com/social/icons/circle/instagram.png' alt='Instagram' width='32'>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                     <table style='display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0px; vertical-align: top; margin-right: 17px; width: 32px; height: 32px;' border='0' width='32' cellspacing='0' cellpadding='0' align='left'>
                       <tbody>
                         <tr style='vertical-align: top;'>
                           <td style='word-break: break-word; vertical-align: top; border-collapse: collapse;' align='left' valign='middle'>
                             <a href='https://youtube.com/' title='YouTube' target='_blank' rel='noopener'>
                               <img style='outline: none; text-decoration-line: none; clear: both; border: none; height: auto; float: none; display: block; max-width: 32px;' title='YouTube' src='https://cdn.tools.unlayer.com/social/icons/circle/youtube.png' alt='YouTube' width='32'>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                     <table style='display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0px; vertical-align: top; margin-right: 0px; width: 32px; height: 32px;' border='0' width='32' cellspacing='0' cellpadding='0' align='left'>
                       <tbody>
                         <tr style='vertical-align: top;'>
                           <td style='word-break: break-word; vertical-align: top; border-collapse: collapse;' align='left' valign='middle'>
                             <a href='https://email.com/' title='Email' target='_blank' rel='noopener'>
                               <img style='outline: none; text-decoration-line: none; clear: both; border: none; height: auto; float: none; display: block; max-width: 32px;' title='Email' src='https://cdn.tools.unlayer.com/social/icons/circle/email.png' alt='Email' width='32'>
                             </a>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
<div class='gmail-u-row-container' style='padding: 0px; background-color: transparent;'>
<div class='gmail-u-row' style='margin: 0px auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-break: break-word; background-color: #e2e2e2;'>
 <div style='border-collapse: collapse; display: table; width: 600px; height: 31.2px; background-color: transparent;'>
   <div class='gmail-u-col gmail-u-col-100' style='max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;'>
     <div style='height: 31.2px; width: 600px;'>
       <div style='box-sizing: border-box; height: 31.2px; padding: 0px; border: 0px solid transparent;'>
         <table style='font-family: Cabin, sans-serif;' role='presentation' border='0' width='100%' cellspacing='0' cellpadding='0'>
           <tbody>
             <tr>
               <td style='overflow-wrap: break-word; word-break: break-word; padding: 3px;' align='left'>
                 <div style='color: #fafafa; line-height: 23.4px; text-align: center; overflow-wrap: break-word;'>
                   <p style='font-size: 14px; line-height: 25.2px; margin: 0px;'>
                     <span style='font-size: 12px; line-height: 21.6px; color: #474747;'>Copyrights © magicpin Rights Reserved</span>
                   </p>
                 </div>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</td>
</tr>
</tbody>
</table>

 ";
 // $body = "your opt is ".$otp;
 $headers = "From: pd12911291@gmail.com";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html\r\n";

 mail($email, $subject, $body, $headers);
}
else
{
    $html = "<p><div class='errmsg'>Invalid Transaction. Please Try Again</div></p>
             <p>{$error}</p>";
             $error_found=1;
}
if(isset($html)){
echo $html;
}
?>
					</div>
					<!-- <div class="col-4 text-center"> -->
					
          <!-- // if(!isset($error_found)){
// 					 $sql="SELECT * from products WHERE pid=:pid"; 
//          $stmt = $db->prepare($sql);
//            $stmt->bindParam(':pid',$pid,PDO::PARAM_INT);
//             $stmt->execute();
//            $row=$stmt->fetch();
//        echo '<div class="card" style="width: 18rem;">
//   <img class="card-img-top" src="uploads/'.$row['image'].'" alt="Card image cap">
//   <div class="card-body">
//     <h5 class="card-title">'.$row['title'].'</h5>
//   </div>
// </div>';
// } -->
				 
				<!-- <br>  -->
				<!-- </div> -->
				</div>
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