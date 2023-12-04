
<!doctype html>
<html lang="en">

<head>
  <?php
include 'links.php';
  ?>
  <style>
    .map{
  height: 74vh;
  width: 100%;
  border-radius: 15px;
}

.co-icon{
  height: 45px;
  width: 45px;
  background-color: #D10024;
  border-radius: 25px;
}
.iconX{
  color:#eee;
  font-size: 20px;
}
.textX{
  font-weight: 500;
  font-size: 18px;
}
.addX{
  margin-left: 45px;
}
.sgx{
  font-size: 14px;
}
.card-bg{
  background-color: rgb(242, 242, 242);
}
.hgs{
  height: 50px;
}
.hgsx{
  height: 42px;
  align-items: center;
  border-bottom: 1.5px solid rgb(210, 210, 210);
}

.x{
  font-weight: 500;
  font-size: 15px;
}
.form-outline {
    position: relative;
    width: 100%;
    left: 74px;
}
  </style>
  <title>Add To Cart</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php
 include 'home_header.php';
//  $user_id = $_SESSION['user_id'];
  ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->
  <section class="h-100 h-custom">
    <div class="container py-4 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <p class="tit m-0">Add To Cart</p>
                      <?php
                   if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];

                  // $count = mysqli_query($conn, "SELECT * FROM cartlist WHERE user_id = $user_id");
                  $result = mysqli_query($conn, "SELECT count(*) as total from cartlist, product_page  WHERE user_id = $user_id AND product_page.product_id = cartlist.product_id");
                  $data = mysqli_fetch_assoc($result);
                 } ?>
                      <h6 class="mb-0 text-muted"><?php  if(isset($_SESSION['fname']))
                          {
                            echo $data['total']; 
                          }  
                          ?> items</h6>
                    </div>
                    <hr class="my-4">
                     <!-- Single item -->
                      <?php
                      if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];

                        $total = 0;

                        $sql = "SELECT * " .
                          "FROM product_page, cartlist " .
                          "WHERE cartlist.user_id = $user_id AND product_page.product_id = cartlist.product_id AND product_page.delete_status = 'active' AND product_page.trending = '1'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result)) {

                          while ($row = mysqli_fetch_assoc($result)) {




                      ?>
                       <form action="cartlist.php" method="post">
              <div class="row">
                <div class="col-md-3 col-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="../company/multi_images/<?php echo $row['img']; ?>"
                      class="w-100" alt="<?php echo $row['product_name']?>" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>
  
                <div class="col-md-5 col-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong><a href="single.php?id=<?php echo $row['product_id']?>"><?php echo $row['product_name']?></a></strong></p>
                  <p>Categories: <?php echo $row['brand']?></p>
                  <!-- <p>Size: M</p> -->
                
                    <a href='../../php/deleteCart.php?id=<?php echo $row['ca_id'] ?>' class="btn btn-bg-x1 btn-sm me-1 mb-2 p-1 px-3" data-mdb-toggle="tooltip"
                    title="Remove item">
                    <i class="fas fa-trash"></i>
                    </a>
                 
                  <button name="wi1" class="btn bg-x1 btn-sm mb-2 px-3" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button>
                 
                  <!-- Data -->
                </div>
  
                <div class="col-md-4 col-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <!-- <button class="btn bg-x1 px-3 me-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
   -->                
                    <div class="form-outline">
                      <!-- <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" /> -->
                      <span>Quantity :</span>
                      <label class="form-label" for="form1"><?php echo $row['pro_quentity']?></label>
                    </div>
  
                    <!-- <button class="btn bg-x1 px-3 ms-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button> -->
                  </div>
                  <!-- Quantity -->
  
                  <!-- Price -->
                  
                  <p class="text-start text-md-center">
                    <strong>INR <?php echo $row['price'] *  $row['pro_quentity'] ?>.00</strong>
                    
                  </p>
                  <!-- Price -->
                </div>
                <input type="hidden" name="pro_quentity" value="1">
                <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
              </div>
              </form>
              <?php

$total  = $_SESSION ['total'] = $total +  ($row['price'] * $row['pro_quentity']);
}
}}
    
    ?>
              <!-- Single item -->

              
              <!----------------------------back to home page------------------------------------------->
              <div class="pt-5">
                      <h6 class="mb-0">
                      <?php echo "<a href=\"javascript:history.go(-1)\"  class='text-body'><i
                            class='fas fa-long-arrow-alt-left me-2'></i>Back to shop</a>"; ?>
                          </h6>
                    </div>
                  </div>
                </div>

               <!----------------------------sub total------------------------------------------->
                <div class="col-lg-4 card card-bg mt-5">
                  <div class=" ">
                    <div class="card-header py-3 border-bottom">
                      <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="card-body ">
                      <ul class=" ">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                          Products
                          <span>INR <?php
                          if(isset($_SESSION['fname']))
                          {
                            echo $total; 
                          }
                           ?>.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                          Shipping
                          <span>Gratis</span>
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                          <div>
                            <strong>Total amount</strong>
                            <strong>
                              <p class="mb-0">(including VAT)</p>
                            </strong>
                          </div>
                          <span><strong>INR <?php  if(isset($_SESSION['fname']))
                          {
                            echo $total; 
                          }
                           ?>.00/-</strong></span>
                        </li>
                      </ul>
          <!-- <form action="" method="get"> -->
                      <a href="checkout.php?user=<?php echo $user_id; ?>" type="button" name="" class="btn bg-x1 btn-lg w-100 mt-5">
                        Go to checkout </a>
<!-- </form> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

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
