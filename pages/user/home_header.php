<?php
include '../../php/config.php';
// $cart =  $_SESSION['cart'];


?>
<script type="text/javascript">
  window.onpageshow = function(evt) {
    if (evt.persisted) {
      window.location.reload();
    }
  };
</script>
</head>
<style>
  .cart-detail-product {
    position: relative;
    top: -90px;
    right: -138px;
  }

  .offcanvas-body {
    flex-grow: 0;
  }

  .cart-btnn {
    position: absolute;
    bottom: 0px;
    width: 100%;
  }

  .offcanvas-body {
    overflow-y: clip !important;
    margin-bottom: -77px;
  }
  .container-f{
    height: 100vh;
    overflow-x: clip;
    overflow-y: scroll;
}

</style>

<body onload="noback();" onpageshow="if(evt.persisted) ;" onunload="">
  <header>
    <!-- TOP HEADER -->
    <div id="top-header">
      <div class="container px-4 px-lg-3">
        <div class="row d-flex justify-content-between">
          <ul class="header-links pull-left col-6">
            <li><a href="#"><i class="fa fa-phone"></i> +91 7567159902</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> MagicPin@email.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> A-45 punagam surat </a></li>
          </ul>
          <div class="col-6   d-flex">
            <ul class="header-links pull-right ms-auto">
           
              <li class="account"><?php
                                  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    echo '<div class="dropdown">
              <a href="#"
                id="dropdownMenuLink1"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              > ' . $_SESSION['fname'] . '
              <i class="fa fa-angle-down ms-1"></i>
              </a>
              
              <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
              <li class="w-100"><a href="profile.php" class="p-3 ps-5"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
                <li class="w-100"><a href="logout.php" class="p-3 ps-5"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a></li>
              </ul>
              </div>';
                                  } else {
                                    echo '<div class="dropdown">
              <a href="#" id="dropdownMenuLink1" data-mdb-toggle="dropdown" aria-expanded="false">
                My Account
                <i class="fa fa-angle-down ms-1"></i>
              </a>

              <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
                <li class="w-100 my-1"><a href="ulogin.php" class="p-3 ps-5"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                <li class="w-100 my-1"><a href="userregi.php" class="p-3 ps-5"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
              </ul>
            </div>';
                                  }
                                  ?>

              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <!-- /TOP HEADER -->

    <?php

if(isset($_POST["searchbutton"])){
  $searchValue = $_POST['searchbar'];
  header("Location:shop.php?product_name=$searchValue");
}

?>

    <!-- MAIN HEADER -->
    <div id="header">
      <!-- container -->
      <div class="container px-4 px-lg-3">
        <!-- row -->
        <div class="row d-flex justify-content-between">
          <!-- LOGO -->
          <div class=" col-12 col-lg-3  dflex1 a-align-items-center">
            <div class="header-logo">
              <a href="home.php" class="">
                <img src="../../img/magicpin-logo2.png" alt="" class="logo1">
              </a>
            </div>
          </div>
          <!-- /LOGO -->

          <!-- SEARCH BAR -->
          <div class="col-12 col-lg-5">
            <div class="header-search">
              <form class="row bx" method="post">
                <input class="input col bx" placeholder="Search here" name="searchbar">
                <button class="search-btn col-2" name="searchbutton">Search</button>
              </form>
            </div>
          </div>
          <!-- /SEARCH BAR -->

          <!-- ACCOUNT -->
          <div class="col-lg-3 clearfix">
            <div class="header-ctn">
              <!-- Wishlist -->
              <div>
              <a href="save_p.php">
                  <i class="fa fa-heart-o"></i>
                  <span>Your Wishlist</span>
              <?php
                   if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];

                  // $count = mysqli_query($conn, "SELECT * FROM cartlist WHERE user_id = $user_id");
                  $result1 = mysqli_query($conn, "SELECT count(*) as total from wishlist, product_page WHERE user_id = $user_id AND product_page.product_id = wishlist.product_id");
                  $data1 = mysqli_fetch_assoc($result1);
                  ?>
                  <div class="qty"><?php  echo $data1['total']; ?>
                </div>
                <?php } ?>
                </a>
              </div>
              <!-- /Wishlist -->

              <!-- Cart -->

              <div class="dropdown text-light">
                <a class="dropdown-toggle" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#offcanvasRight" aria-controls="offcanvasRight">
                  <i class="fa fa-shopping-cart text-light"></i>
                  <span class="text-light">Your Cart</span>
                  <?php
                   if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];

                  // $count = mysqli_query($conn, "SELECT * FROM cartlist WHERE user_id = $user_id");
                  $result = mysqli_query($conn, "SELECT count(*) as total from cartlist, product_page  WHERE user_id = $user_id AND product_page.product_id = cartlist.product_id");
                  $data = mysqli_fetch_assoc($result);
                 
                  ?>
                  <div class="qty "><?php  echo $data['total']; ?></div>
                  <?php } ?>
                </a>


              </div>
              <!-- /Cart -->

              <!-- Menu Toogle -->
              <div class="dropdown d-lg-none">

                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bars"></i>
                  <span>Menu</span>
                </a>

                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <li class="nav-item p-2">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item p-2">
                    <a class="nav-link" href="allproduct.php">Hot Deal</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link" href="shop.php">Categories</a>
                  </li>
                  <li class="nav-item p-2">
                    <a class="nav-link " href="about.php">About US</a>
                  </li>
                 
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="term&condition.php">term&condition</a>
                  </li>
                </ul>


              </div>
              <!-- /Menu Toogle -->
            </div>
          </div>
          <!-- /ACCOUNT -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
  </header>

  <!-- NAVIGATION -->
  <nav id="navigation" class="">
    <!-- container -->
    <div class="container p-0 px-4 px-lg-3">

      <nav class=" navbar-expand-sm d-none d-lg-block   m-0 p-0">


        <div class="collapse navbar-collapse p-0" id="navbarNav">
          <ul class="navbar-nav w-100 main-nav d-flex justify-content-between">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
          
            <li class="nav-item ">
              <a class="nav-link" href="shop.php">Categories</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link " href="about.php">About US</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="contact.php">Contact</a>
            </li>
           
            <li class="nav-item ">
              <a class="nav-link " href="term&condition.php">term&condition</a>
            </li>
          </ul>
        </div>
      </nav>


    </div>
    <!-- /container -->
  </nav>



  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Offcanvas right</h5>
      <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
    </div>
        <div class="container-f">
    <?php
    if (isset($_SESSION['user_id'])) {
      $user_id = $_SESSION['user_id'];

      $total = 0;

      $sql = "SELECT * " .
        "FROM product_page, cartlist " .
        "WHERE cartlist.user_id = $user_id AND product_page.product_id = cartlist.product_id";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result)) {

        while ($row = mysqli_fetch_assoc($result)) {




    ?>

          <div class="offcanvas-body">
            <!-- <div class="row cart-detail"> -->
            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
              <img src="../company/multi_images/<?php echo $row['img'] ?> " height="100px" width="100px">
            </div>
            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
              <p><a href="single.php?id=<?php echo $row['product_id'] ?>"><?php echo $row['product_name'] ?></a></p>
              <span class="price text-info"> INR <?php echo $row['price'] ?>.00</span>
              <span class="count"> Quantity:<?php echo $row['pro_quentity'] ?></span>
            </div>
          </div>

      <?php
          $total = $total +  ($row['price'] * $row['pro_quentity']);
        }
      }

      ?>
      <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
        <div>
          <strong>Total amount</strong>
          <strong>
            <!-- <p class="mb-0">(including VAT)</p> -->
          </strong>
        </div>
        <span><strong>INR <?php echo $total; ?>.00/-</strong></span>
      </div>
    <?php } else {
      echo '';
    } ?>
    </div>
    <!-- </div> -->
    <div class="cart-btnn">
    <a href="addtocart.php" type="button" name="submit" class="btn bg-x1 btn-lg btn-block ">Proceed to Buy</a></div>
  </div>