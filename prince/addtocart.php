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
  <link rel="stylesheet" href="./home.css">
  <link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

  <link type="text/css" rel="stylesheet" href="./css/style.css" />
  
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>




  <link rel="stylesheet" href="./ulogin.css">
  <title>Add To Cart</title>
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
								<a
								 
								  href="#"
				
								  id="dropdownMenuLink1"
								  data-mdb-toggle="dropdown"
								  aria-expanded="false"
								>
								My Account
								<i class="fa fa-angle-down ms-1"></i>
								</a>
							  
                <ul class="dropdown-menu bg-dark " aria-labelledby="dropdownMenuLink">
								  <li class="w-100 d-flex p-3"><a href="#" class="m-auto sgx"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
								  <li class="w-100 d-flex p-3 pt-0"><a href="#" class="m-auto sgx"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
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
              <a href="#" class="logo">
                <img src="./img/magicpin-logo2.png" alt="" class="logo1">
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
                      <h6 class="mb-0 text-muted">3 items</h6>
                    </div>
                    <hr class="my-4">
  
                    
  
                     <!-- Single item -->
              <div class="row">
                <div class="col-md-3 col-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                      class="w-100" alt="Blue Jeans Jacket" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>
  
                <div class="col-md-5 col-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>Blue denim shirt</strong></p>
                  <p>Color: blue</p>
                  <p>Size: M</p>
                  <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                    title="Remove item">
                    <i class="fas fa-trash"></i>
                  </button>
                  <button type="button" class="btn bg-x1 btn-sm mb-2" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button>
                  <!-- Data -->
                </div>
  
                <div class="col-md-4 col-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <button class="btn bg-x1 px-3 me-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
  
                    <div class="form-outline">
                      <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                      <label class="form-label" for="form1">Quantity</label>
                    </div>
  
                    <button class="btn bg-x1 px-3 ms-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- Quantity -->
  
                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>$17.99</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
              <!-- Single item -->

                 <!-- Single item -->
                 <div class="row mt-1">
                  <div class="col-md-3 col-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                        class="w-100" alt="Blue Jeans Jacket" />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>
    
                  <div class="col-md-5 col-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p><strong>Blue denim shirt</strong></p>
                    <p>Color: blue</p>
                    <p>Size: M</p>
                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                      title="Remove item">
                      <i class="fas fa-trash"></i>
                    </button>
                    <button type="button" class="btn bg-x1 btn-sm mb-2" data-mdb-toggle="tooltip"
                      title="Move to the wish list">
                      <i class="fas fa-heart"></i>
                    </button>
                    <!-- Data -->
                  </div>
    
                  <div class="col-md-4 col-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                    <div class="d-flex mb-4" style="max-width: 300px">
                      <button class="btn bg-x1 px-3 me-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
    
                      <div class="form-outline">
                        <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                        <label class="form-label" for="form1">Quantity</label>
                      </div>
    
                      <button class="btn bg-x1 px-3 ms-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- Quantity -->
    
                    <!-- Price -->
                    <p class="text-start text-md-center">
                      <strong>$17.99</strong>
                    </p>
                    <!-- Price -->
                  </div>
                </div>
                <!-- Single item -->

                   <!-- Single item -->
              <div class="row mt-1">
                <div class="col-md-3 col-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                      class="w-100" alt="Blue Jeans Jacket" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>
  
                <div class="col-md-5 col-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>Blue denim shirt</strong></p>
                  <p>Color: blue</p>
                  <p>Size: M</p>
                  <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                    title="Remove item">
                    <i class="fas fa-trash"></i>
                  </button>
                  <button type="button" class="btn bg-x1 btn-sm mb-2" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button>
                  <!-- Data -->
                </div>
  
                <div class="col-md-4 col-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <button class="btn bg-x1 px-3 me-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
  
                    <div class="form-outline">
                      <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                      <label class="form-label" for="form1">Quantity</label>
                    </div>
  
                    <button class="btn bg-x1 px-3 ms-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- Quantity -->
  
                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>$17.99</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
              <!-- Single item -->

              
              <!----------------------------back to home page------------------------------------------->
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="#!" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
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
                          <span>$53.98</span>
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
                          <span><strong>$53.98</strong></span>
                        </li>
                      </ul>
          
                      <button type="button" class="btn bg-x1 btn-lg w-100 mt-5">
                        Go to checkout
                      </button>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>