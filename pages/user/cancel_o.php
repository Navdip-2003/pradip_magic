<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>Cancel Order</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->


  <div class="container my-4 my-lg-0">
    <section class=" ">
      <div class="container  h-100 my-2  card card-registration">
        <div class="row d-flex align-items-center justify-content-center h-100 ">
          <div class="col-md-9 col-lg-7 col-xl-6 pt-lg-0">
            <img src="../../img/lo&rg/Cancel-pana.svg" class="img-fluid " alt="Phone image">
          </div>

          <div class="col-md-8 col-lg-5 col-xl-5 mt-3 mt-xl-0 p-4">


            <!--------------------------------------------+ cancel form +------------------------------------>
			<?php

            $id = $_GET['id'];
            $selectquery = mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.payid = $id AND product_page.product_id = payments.pid");
            if (mysqli_num_rows($selectquery) > 0) {
              foreach ($selectquery as $row) {
                // $_SESSION['payid'] = $row['payid'];
                if($row['track_order'] == 'Panding'){
					$payid = $row['payid'];
					$firstname = $row['firstname'];
					$lastname = $row['lastname'];
					$txnid = $row['txnid'];
					$dbdate = $row['order date'];
					$email = $row['payer_email'];
            ?>
            <p class="mb-3 tit">Cancel Order</p>
			
            <div class="row">
              <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                <div class="m-auto m-xxl-0">
                <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body"><?php echo $row['txnid']; ?></span></p>
                <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
              </div>
              <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pe-0 pb-0 p-xxl-0 d-flex h-100">
                <a href="bill.php?id=<?php echo $row['payid']; ?>" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center align-content-center mt-3">
              <span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              
              <hr class="flex-fill track-line"><span
                class="d-flex justify-content-center align-items-center big-dot dot">
                <i class="fa fa-check text-white"></i></span>
            </div>


            <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
              <div class="d-flex flex-column align-items-start"><span class="d-none d-xl-inline">Order placed</span>
                <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-xl-none"></i>
              </div>
              <div class="d-flex flex-column justify-content-center"><span class="d-none d-xl-inline">Order
                  Shipped</span>
                  <i class="fas fa-box-open fs-4 color-x1 d-block d-xl-none"></i></div>
             
              <div class="d-flex flex-column align-items-center"><span class="d-none d-xl-inline">Out for
                  delivery</span>
                  <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-xl-none"></i></div>
              <div class="d-flex flex-column align-items-end"><span class=" d-none d-xl-inline">Delivered</span>
                <i class="fas fa-home fs-4 color-x1 d-block d-xl-none"></i></div>
            </div>
			<?php 
				if(isset($_POST['cancel_order'])){
					$reason = $_POST['reason'];
					$user_id = $_SESSION['user_id'];

					$reasoninsert = mysqli_query($conn, "INSERT INTO cancel_order(pro_id,user_id,reason) VALUES('$id','$user_id','$reason')");
					if($reasoninsert){
						$updatequery = mysqli_query($conn, "UPDATE payments SET Status='cancel', track_order='Completed' where payid=$payid");
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
          if($updatequery){
            header("Location:order.php");
          }
				}
			?>
            <form method="post" class="mt-3 p-lg-2 pt-0  ">
             
              <textarea name="reason" id="" class=" mb-4 h-textarea p-2 form-control" placeholder="Reason for cancel order..."></textarea>
             

             
              <!-- Submit button -->
              <button type="submit" name="cancel_order" class="btn bg-x1 btn-lg btn-block">Cancel Order</button>
              
             

            </form>
			<?php }}} ?>
          </div>
        </div>
      </div>
    </section>
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