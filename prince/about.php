pradeep davara
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">



  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/home.css">
  <link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />
  <link type="text/css" rel="stylesheet" href="../css/slick.css" />
  <link rel="stylesheet" href="../css/about.css">
  <link type="text/css" rel="stylesheet" href="../css/style.css" />


  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>




  <link rel="stylesheet" href="../css/ulogin.css">
  <title>About</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <header>
    <!-- TOP HEADER -->
    <div id="top-header">
      <div class="container px-4 px-lg-3">
        <div class="row d-flex justify-content-between">
          <ul class="header-links pull-left col-6">
            <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
          </ul>
          <div class="col-6   d-flex">
            <ul class="header-links pull-right ms-auto">
              <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
              <li class="account">
                <div class="dropdown">
                  <a href="#" id="dropdownMenuLink1" data-mdb-toggle="dropdown" aria-expanded="false">
                    My Account
                    <i class="fa fa-angle-down ms-1"></i>
                  </a>


                  <ul class="dropdown-menu bg-dark " aria-labelledby="dropdownMenuLink">
                    <li class="w-100 d-flex p-3"><a href="#" class="m-auto sgx"><i class="fa fa-sign-in"
                          aria-hidden="true"></i>Sign In</a></li>
                    <li class="w-100 d-flex p-3 pt-0"><a href="#" class="m-auto sgx"><i class="fa fa-user-plus"
                          aria-hidden="true"></i>Register</a></li>
                  </ul>
                </div>

              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
      <!-- container -->
      <div class="container px-4 px-lg-3">
        <!-- row -->
        <div class="row d-flex justify-content-between">
          <!-- LOGO -->
          <div class=" col-12 col-lg-3  dflex1 a-align-items-center">
            <div class="header-logo">
              <a href="#" class="">
                <img src="../img/magicpin-logo2.png" alt="" class="logo1">
              </a>
            </div>
          </div>
          <!-- /LOGO -->

          <!-- SEARCH BAR -->
          <div class="col-12 col-lg-5">
            <div class="header-search">
              <form class="row bx">
                <select class="input-select col-4">
                  <option value="0">All Categories</option>
                  <option value="1">Category 01</option>
                  <option value="1">Category 02</option>
                </select>

                <input class="input col bx" placeholder="Search here">
                <button class="search-btn col-2">Search</button>
              </form>
            </div>
          </div>
          <!-- /SEARCH BAR -->

          <!-- ACCOUNT -->
          <div class="col-lg-3 clearfix">
            <div class="header-ctn">
              <!-- Wishlist -->
              <div>
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                  <span>Your Wishlist</span>
                  <div class="qty">2</div>
                </a>
              </div>
              <!-- /Wishlist -->

              <!-- Cart -->
              <div class="dropdown text-light">
                <a class="dropdown-toggle" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#offcanvasRight"
                  aria-controls="offcanvasRight">
                  <i class="fa fa-shopping-cart text-light"></i>
                  <span class="text-light">Your Cart</span>
                  <div class="qty ">3</div>
                </a>


              </div>
              <!-- /Cart -->

              <!-- Menu Toogle -->
              <div class="dropdown d-lg-none">

                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fa fa-bars"></i>
                  <span>Menu</span>
                </a>

                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <li class="nav-item p-2">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item p-2">
                    <a class="nav-link" href="#">Hot Deal</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link" href="#">Categories</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="#">Laptops</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="#">Smartphones</a>
                  </li>
                  <li class="nav-item p-2 ">
                    <a class="nav-link " href="#">Cameras</a>
                  </li>
                  <li class="nav-item p-2">
                    <a class="nav-link " href="#">Accessories</a>
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
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->

  <div class="about my-4">
    <div class="container card">
      <div class="row">
        <div class="col-xl-6 col-lg-6  d-flex align-items-center justify-content-center">
          <div class=" col-10 col-md-8 col-lg-12 col-xl-10 ">
            <img src="../img/lo&rg/In no time-amico.svg" alt="image">

          </div>


        </div>
        <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
          <div class="part-txt">
            <h2>Who We Are?</h2>
            <h5>Beauty, to me, is about being comfortable in your own skin</h5>
            <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going</p>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary, maki this the first true
              generator on the Internet.</p>
            <ul>

              <li class="off-day mx-2">
                <div class="part-icon d-flex">
                  <span class="m-auto mx-3"><img src="../img/lo&rg/brand-image.png" alt="" width="35px" class=""></span>
                </div>
                <div class="txt">
                  <p><span>Brand</span>Reputed Brands</p>
                </div>
              </li>
              <li class="off-day mx-2">
                <div class="part-icon d-flex">
                  <span class="m-auto mx-2"><img src="../img/lo&rg/quality.png" alt="" width="35px" class=""></span>
                </div>
                <div class="txt">
                  <p><span>Quality</span>High quality</p>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </div>
  <!------------------service-------------------------------->
      <div class="feature feature-inner my-3 ">
        <div class="container">
        <div class="row">
        <div class="col-xl-3 col-lg-3 col-sm-6">
        <div class="single-box">
        <div class="part-icon ">
      <img src="../img/lo&rg/free-delivery.png" alt="">
        </div>
        <div class="part-txt  mt-1">
        <h3>FREE SHIPPING</h3>
        <p>On all Orders Over $99</p>
        </div>
        </div>
        </div>
         <div class="col-xl-3 col-lg-3 col-sm-6">
        <div class="single-box">
        <div class="part-icon">
        <img src="../img/lo&rg/cashback.png" alt="icon">
        </div>
        <div class="part-txt mt-1">
        <h3>CASH BACK OFFER</h3>
        <p>When You Use Credit Card</p>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-sm-6">
        <div class="single-box">
        <div class="part-icon">
        <img src="../img/lo&rg/customer-support.png" alt="icon">
        </div>
        <div class="part-txt  mt-1">
        <h3>24/7 SUPPORT</h3>
        <p>Any Time Support Client</p>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-sm-6">
        <div class="single-box">
        <div class="part-icon">
        <img src="../img/lo&rg/coupon.png" alt="icon">
        </div>
        <div class="part-txt  mt-1">
        <h3>GIFT VOUCHERS</h3>
        <p>Cras a nunc id risus</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

       <!------------------/service-------------------------------->

       <!-------------------vision---------------------------------->
       <div class="">
        <div class="container">
        <div class="row">
        <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
        <div class="part-txt">
        <h2>Our Vission</h2>
        <h5>We Are A Zolkany Focused On Delivering Product</h5>
        <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going</p>
        <ul>
        <li>Generators on the Internet tend to repeat predefined chunks as this the first true generator on the Internet</li>
        <li>Alteration in some form, by injected humour, or randomised which don't look even slightly believable</li>
        </ul>
        </div>
        </div>
        <div class="col-xl-6 col-lg-6  d-flex align-items-center justify-content-center">
        <div class=" col-10 col-md-8 col-lg-12 col-xl-10 m-auto">
        <img src="../img/lo&rg/Business vision-amico.svg" alt="image">
        </div>
        </div>
        </div>
        </div>
        </div>
       <!--------------------/vision-------------------------------->
       <!---------------------mission------------------------------->
       <div class="mission mb-2">
        <div class="container">
        <div class="row">
        <div class="col-xl-6 col-lg-6  d-flex align-items-center justify-content-center order-2 order-lg-1" >
        <div class="col-12  ">
        <img src="../img/lo&rg/Business Plan-pana.svg" alt="image" class="m-3  ms-1 m-lg-0">
        </div>
        </div>
        <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center order-1 order-lg-2">
        <div class="part-txt">
        <h2>Our Mission</h2>
        <h5>We Are A Zolkany Focused On Delivering Product</h5>
        <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going</p>
        <ul class="ulx">
        <li>Better Quality</li>
        <li>Secure Payment</li>
        </ul>
        <ul  class="ulx">
          <li>Quality Materials</li>
        <li>Simple Retaurn</li>
        </ul>
        <ul  class="ulx">
        <li>Good Service</li>
        <li>Online Support</li>
        </ul>
        <ul  class="ulx">
        <li>In time Delivery</li>
        <li>Creative Team</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
       <!--------------------/mission------------------------------->
 
    </div>
  </div>

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
    crossorigin="anonymous"></script>-->

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>