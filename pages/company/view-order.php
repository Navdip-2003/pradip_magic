
<?php
	include '../../php/config.php';
	include 'include/header.php';
	?>

<div class="d-flex">
  <div class="  hero-section-xr ms-auto">
    <?php
    $id = $_GET['id'];
    $order_id = $_GET['order'];
    // $pro_que = $_GET['que'];
    // $pro_id = $_SESSION['id'];
  
              // $txn_id = $_SESSION['txnid'];
              $selectquery = mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.payid = $id AND product_page.product_id = payments.pid");
              if (mysqli_num_rows($selectquery) > 0) {
                if ($row = mysqli_fetch_array($selectquery)) {
                 
                  $datetime = $row['payment_date'];
                  $p_id = $row['pid'];
                        $payid = $row['payid'];
                        $max_price = $row['dis_price'];
                        $min_price = $row['price'];
                        $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100, 0);
  $getOnlyDate = date('Y-m-d',strtotime($datetime));
              ?>
     <div class="card">
      <div id="ui-view"><div><div class="">
        <div class="card-header d-flex">
         <a href="./Order-indetail.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="color-x1"><span class="me-1"><i class="fa-solid fa-arrow-left"></i></span> Back to home</a>
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
        <div>Invoice<strong> <?php echo $row['txnid']; ?></strong></div>
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
        <!-- <th class="color-x1">Description</th> -->
        <th class="center color-x1">UNIT</th>
        <th class="right color-x1">COST</th>
        <th class="right color-x1">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr style="overflow: scroll;">
        <td class="center ">1</td>
        <td class="left"><?php echo $row['product_name']; ?></td>
        <!-- <td class="left">  <?php  // echo $row['description']; ?></td> -->
        <td class="center"><?php echo $row['quen']; ?></td>
        <td class="right">₹<?php echo $row['price']?> </td>
        <td class="right">₹<?php echo $row['price'] * $row['quen'] ?> </td>
        
        </tr>
        
        </tbody>
        </table>
        </div>
        <div class="row">
        <div class="col-lg-4 col-sm-5 d-flex"><p class="m-auto"><?php echo $row['address']; ?> </p></div>
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
        <div class="col-lg-4 col-sm-5 d-flex"><p class="m-auto"> <?php echo $data['address']; ?></p></div>
        <div class="col-lg-4 col-sm-5 ms-auto">
        <table class="table table-clear">
        <tbody>
        <tr>
        <td class="left"><strong class="color-x1">Subtotal</strong></td>
        <td class="right"><?php echo $data['dis_price'] * $data['que'] ?>.00 </td>
        </tr>
        <tr>
        <td class="left"><strong class="color-x1">Discount (<?php echo $percent_increase?>% )</strong></td>
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
        </div></div></div></div>
     </div>
    <?php }} ?>
        </div>


    <!-------------------------------------------------------------------------------------------->
   
</body>

</html>