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
  <link type="text/css" rel="stylesheet" href="..css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="..css/slick-theme.css"/>

  <link type="text/css" rel="stylesheet" href="../css/style.css" />
  
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="../css/ulogin.css">
  <title>User Registration</title>
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

 

<div class="container my-4 mt-5">

    <div class="row">
        <div class="filer col-12 col-lg-3 ">
          <div class="card bg-x">
            <div class=" d-flex p-2 justify-content-between align-content-center">
                <p class="text-light mb-0 pb-0 m-lg-auto">Filters</p>
                
               
                <a class="" data-mdb-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <img src="./img/sort.png" alt="" height="26px" width="26px" class="d-lg-none">
                    </a>
            </div></div>


        <!--------------------------------main filter-------------------------------------->
            <div class="accordion accordion-borderless " id="accordionFlushExampleX">

                <!----------------category------------>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOneX1">
                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#flush-collapsecat" aria-expanded="true" aria-controls="flush-collapseOneX">
                      Category
                    </button>
                  </h2>
                  <div id="flush-collapsecat" class="accordion-collapse collapse show"
                    aria-labelledby="flush-headingcat" data-mdb-parent="#accordionFlushExampleX">
                    <div class="accordion-body">
                      Placeholder content for this accordion, which is intended to demonstrate the
                      <code>.accordion-flush</code> class. This is the first item's accordion body.
                    </div>
                  </div>
                </div>

                <!----------------prince------------>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX2">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapseprice" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Price
                      </button>
                    </h2>
                    <div id="flush-collapseprice" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>

                   <!----------------discount------------>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX3">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapseDis" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Discount
                      </button>
                    </h2>
                    <div id="flush-collapseDis" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headingDiscount" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>

                   <!----------------ratings------------>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX4">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapserate" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Ratings
                      </button>
                    </h2>
                    <div id="flush-collapserate" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>
                
                <!----------------hair------------>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX5">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapsehair" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Hair type
                      </button>
                    </h2>
                    <div id="flush-collapsehair" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headinghair" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>

                   <!----------------skin------------>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX6">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapseskin" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Skin type
                      </button>
                    </h2>
                    <div id="flush-collapseskin" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headinghair" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>

                   <!----------------brand------------>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX7">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapsebrand" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Brands
                      </button>
                    </h2>
                    <div id="flush-collapsebrand" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headinghair" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>
                
                   <!----------------gender------------>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX8">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapsegen" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Gender
                      </button>
                    </h2>
                    <div id="flush-collapsegen" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headinghair" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>

                   <!----------------Colors------------>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX8">
                      <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapsecolor" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Colors
                      </button>
                    </h2>
                    <div id="flush-collapsecolor" class="accordion-collapse collapse show"
                      aria-labelledby="flush-headinghair" data-mdb-parent="#accordionFlushExampleX">
                      <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                      </div>
                    </div>
                  </div>

              </div>
              <!--------------------------------main filter end---------------------------------->
              <!------------------sub filter----------------------->
             
            
         

               <!------------------sub filter end----------------------->
        </div>

        <!--------------------------------products---------------------------------------->
        <div class="prodcts col-12 col-lg-9 pt-4 pt-lg-0">
          
              <div class="row row-cols-xxl-3 row-cols-lg-2 row-cols-md-2 g-2 g-mg-4 row-cols-1 row-cols-sm-2">

                <!------product------->
                <div class="col">
                    <div class="card">
                      <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                          class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                          style="width: 35px; height: 35px;">
                          <p class="text-white mb-0 small">x4</p>
                        </div>
                      </div>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                        class="card-img-top" alt="Laptop" />
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                          <p class="small text-danger"><s>$1099</s></p>
                        </div>
            
                        <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0">HP Notebook</h5>
                          <h5 class="text-dark mb-0">$999</h5>
                        </div>
            
                        <div class="d-flex justify-content-between mb-2">
                          <p class="text-muted mb-0 ">Rates :</p>
                          <div class=" text-x ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class=" d-flex justify-content-between mt-3">
                            <button class="btnX"><i class=" fa-bookmark add_cart_btn my-auto class_chain fa-regular m-auto"></i></button>
                          <button class="btn bg-x1">Add tO Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!------product end------->

                    <!------product------->
                <div class="col">
                    <div class="card">
                      <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                          class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                          style="width: 35px; height: 35px;">
                          <p class="text-white mb-0 small">x4</p>
                        </div>
                      </div>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                        class="card-img-top" alt="Laptop" />
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                          <p class="small text-danger"><s>$1099</s></p>
                        </div>
            
                        <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0">HP Notebook</h5>
                          <h5 class="text-dark mb-0">$999</h5>
                        </div>
            
                        <div class="d-flex justify-content-between mb-2">
                          <p class="text-muted mb-0 ">Rates :</p>
                          <div class=" text-x ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class=" d-flex justify-content-between mt-3">
                            <button class="btnX"><i class=" fa-bookmark add_cart_btn my-auto class_chain fa-regular m-auto"></i></button>
                          <button class="btn bg-x1">Add tO Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!------product end------->

                    <!------product------->
                <div class="col">
                    <div class="card">
                      <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                          class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                          style="width: 35px; height: 35px;">
                          <p class="text-white mb-0 small">x4</p>
                        </div>
                      </div>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                        class="card-img-top" alt="Laptop" />
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                          <p class="small text-danger"><s>$1099</s></p>
                        </div>
            
                        <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0">HP Notebook</h5>
                          <h5 class="text-dark mb-0">$999</h5>
                        </div>
            
                        <div class="d-flex justify-content-between mb-2">
                          <p class="text-muted mb-0 ">Rates :</p>
                          <div class=" text-x ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class=" d-flex justify-content-between mt-3">
                            <button class="btnX"><i class=" fa-bookmark add_cart_btn my-auto class_chain fa-regular m-auto"></i></button>
                          <button class="btn bg-x1">Add tO Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!------product end------->

                    <!------product------->
                <div class="col">
                    <div class="card">
                      <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                          class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                          style="width: 35px; height: 35px;">
                          <p class="text-white mb-0 small">x4</p>
                        </div>
                      </div>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                        class="card-img-top" alt="Laptop" />
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                          <p class="small text-danger"><s>$1099</s></p>
                        </div>
            
                        <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0">HP Notebook</h5>
                          <h5 class="text-dark mb-0">$999</h5>
                        </div>
            
                        <div class="d-flex justify-content-between mb-2">
                          <p class="text-muted mb-0 ">Rates :</p>
                          <div class=" text-x ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class=" d-flex justify-content-between mt-3">
                            <button class="btnX"><i class=" fa-bookmark add_cart_btn my-auto class_chain fa-regular m-auto"></i></button>
                          <button class="btn bg-x1">Add tO Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!------product end------->

                    <!------product------->
                <div class="col">
                    <div class="card">
                      <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                          class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                          style="width: 35px; height: 35px;">
                          <p class="text-white mb-0 small">x4</p>
                        </div>
                      </div>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                        class="card-img-top" alt="Laptop" />
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                          <p class="small text-danger"><s>$1099</s></p>
                        </div>
            
                        <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0">HP Notebook</h5>
                          <h5 class="text-dark mb-0">$999</h5>
                        </div>
            
                        <div class="d-flex justify-content-between mb-2">
                          <p class="text-muted mb-0 ">Rates :</p>
                          <div class=" text-x ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class=" d-flex justify-content-between mt-3">
                            <button class="btnX"><i class=" fa-bookmark add_cart_btn my-auto class_chain fa-regular m-auto"></i></button>
                          <button class="btn bg-x1">Add tO Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!------product end------->

                    <!------product------->
                <div class="col">
                    <div class="card">
                      <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                          class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                          style="width: 35px; height: 35px;">
                          <p class="text-white mb-0 small">x4</p>
                        </div>
                      </div>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                        class="card-img-top" alt="Laptop" />
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                          <p class="small text-danger"><s>$1099</s></p>
                        </div>
            
                        <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0">HP Notebook</h5>
                          <h5 class="text-dark mb-0">$999</h5>
                        </div>
            
                        <div class="d-flex justify-content-between mb-2">
                          <p class="text-muted mb-0 ">Rates :</p>
                          <div class=" text-x ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class=" d-flex justify-content-between mt-3">
                            <button class="btnX"><i class=" fa-bookmark add_cart_btn my-auto class_chain fa-regular m-auto"></i></button>
                          <button class="btn bg-x1">Add tO Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!------product end------->

                    

                    

              </div>


         <!--------------------------------products end------------------------------------>
        </div>
    </div>

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
  <script src="../js/save_btn.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>