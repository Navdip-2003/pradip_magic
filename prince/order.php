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
  <title>my order</title>
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

<div class="container my-4">
  <div class=" ">
    <ul class="nav nav-tabs justify-content-center mb-3" id="ex1" role="tablist">
      <li class="nav-item " role="presentation">
        <button
          class="nav-link active"
          id="home-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#home0"
          type="button"
          role="tab"
          aria-controls="home"
          aria-selected="true"
        >
          Track Orders
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="profile-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#profile0"
          type="button"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
        >
          Orders History
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="contact-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#contact0"
          type="button"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
        >
          Cancel Orders
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent0">
      <div
        class="tab-pane fade show active"
        id="home0"
        role="tabpanel"
        aria-labelledby="home-tab0"
      >
      <!-------------------my orders---------------->
     
     
          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 m-3 g-3">

             <!-------order 1------------->
            <div class="col">
              <div class="card card-stepper" style="border-radius: 16px;">
                <div class="card-header p-4">
                  <div class="row">
                    <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                      <div class="m-auto m-xxl-0">
                      <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
                      <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
                    </div>
                    <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                      <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4">
              
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <span class="dot"></span>
                  <hr class="flex-fill track-line"><span class="dot"></span>
                  <hr class="flex-fill track-line"><span class="dot"></span>
                  
                  <hr class="flex-fill track-line"><span
                    class="d-flex justify-content-center align-items-center big-dot dot">
                    <i class="fa fa-check text-white"></i></span>
                </div>

                <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
                  <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
                    <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
                  </div>
                  <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
                      Shipped</span>
                      <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
                 
                  <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
                      delivery</span>
                      <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
                  <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
                    <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
                </div>

                </div>
                <div class="card-footer p-3 px-4">
                  <div class="d-flex justify-content-between">
                  
                   <p class="fw-bold my-auto"><span class="color-x1 ">Delivered !</span></p>
                 
                  </div>
                </div>
              </div>
            </div>

        <!-------order 1------------->
        <div class="col">
          <div class="card card-stepper" style="border-radius: 16px;">
            <div class="card-header p-4">
              <div class="row">
                <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                  <div class="m-auto m-xxl-0">
                  <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
                  <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
                </div>
                <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                  <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                </div>
              </div>
            </div>
            <div class="card-body p-4">
          
            <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
              <span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              
              <hr class="flex-fill "><span
                class="d-flex justify-content-center align-items-center big-dot dilX dot">
                <i class="fa fa-check text-white dilx-c"></i></span>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
              <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
                <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
              </div>
              <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
                  Shipped</span>
                  <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
             
              <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
                  delivery</span>
                  <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
              <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
                <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
            </div>

            </div>
            <div class="card-footer p-3 px-4">
              <div class="d-flex justify-content-between">
              
               <p class="fw-bold my-auto"><span class="color-x1 ">Delivered</span></p>
               <button class="btn-bg-x1 btn btn-sm">cancel</button>
              </div>
            </div>
          </div>
        </div>

         <!-------order 1------------->
         <div class="col">
          <div class="card card-stepper" style="border-radius: 16px;">
            <div class="card-header p-4">
              <div class="row">
                <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                  <div class="m-auto m-xxl-0">
                  <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
                  <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
                </div>
                <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                  <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                </div>
              </div>
            </div>
            <div class="card-body p-4">
          
            <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
              <span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              <hr class="flex-fill "><span class="dot dilX"></span>
              
              <hr class="flex-fill "><span
                class="d-flex justify-content-center align-items-center big-dot dilX dot">
                <i class="fa fa-check text-white dilx-c"></i></span>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
              <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
                <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
              </div>
              <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
                  Shipped</span>
                  <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
             
              <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
                  delivery</span>
                  <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
              <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
                <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
            </div>

            </div>
            <div class="card-footer p-3 px-4">
              <div class="d-flex justify-content-between">
              
               <p class="fw-bold my-auto"><span class="color-x1 ">Delivered</span></p>
               <button class="btn-bg-x1 btn btn-sm">cancel</button>
              </div>
            </div>
          </div>
        </div>

       
 <!-------order 1------------->
 <div class="col">
  <div class="card card-stepper" style="border-radius: 16px;">
    <div class="card-header p-4">
      <div class="row">
        <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
          <div class="m-auto m-xxl-0">
          <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
          <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
        </div>
        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
          <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
        </div>
      </div>
    </div>
    <div class="card-body p-4">
  
    <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
      <span class="dot"></span>
      <hr class="flex-fill track-line"><span class="dot"></span>
      <hr class="flex-fill track-line"><span class="dot"></span>
      
      <hr class="flex-fill track-line"><span
        class="d-flex justify-content-center align-items-center big-dot dot">
        <i class="fa fa-check text-white"></i></span>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
      <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
        <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
      </div>
      <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
          Shipped</span>
          <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
     
      <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
          delivery</span>
          <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
      <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
        <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
    </div>

    </div>
    <div class="card-footer p-3 px-4">
      <div class="d-flex justify-content-between">
      
       <p class="fw-bold my-auto"><span class="color-x1 ">Delivered !</span></p>
   
      </div>
    </div>
  </div>
</div>
         
 <!-------order 1------------->
 <div class="col">
  <div class="card card-stepper" style="border-radius: 16px;">
    <div class="card-header p-4">
      <div class="row">
        <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
          <div class="m-auto m-xxl-0">
          <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
          <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
        </div>
        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
          <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
        </div>
      </div>
    </div>
    <div class="card-body p-4">
  
    <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
      <span class="dot"></span>
      <hr class="flex-fill track-line"><span class="dot"></span>
      <hr class="flex-fill track-line"><span class="dot"></span>
      
      <hr class="flex-fill track-line"><span
        class="d-flex justify-content-center align-items-center big-dot dot">
        <i class="fa fa-check text-white"></i></span>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
      <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
        <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
      </div>
      <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
          Shipped</span>
          <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
     
      <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
          delivery</span>
          <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
      <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
        <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
    </div>

    </div>
    <div class="card-footer p-3 px-4">
      <div class="d-flex justify-content-between">
      
       <p class="fw-bold my-auto"><span class="color-x1 ">Delivered !</span></p>
   
      </div>
    </div>
  </div>
</div>
 <!-------order 1------------->
 <div class="col">
  <div class="card card-stepper" style="border-radius: 16px;">
    <div class="card-header p-4">
      <div class="row">
        <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
          <div class="m-auto m-xxl-0">
          <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
          <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
        </div>
        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
          <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
        </div>
      </div>
    </div>
    <div class="card-body p-4">
  
    <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
      <span class="dot"></span>
      <hr class="flex-fill track-line"><span class="dot"></span>
      <hr class="flex-fill track-line"><span class="dot"></span>
      
      <hr class="flex-fill track-line"><span
        class="d-flex justify-content-center align-items-center big-dot dot">
        <i class="fa fa-check text-white"></i></span>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
      <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
        <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
      </div>
      <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
          Shipped</span>
          <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
     
      <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
          delivery</span>
          <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
      <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
        <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
    </div>

    </div>
    <div class="card-footer p-3 px-4">
      <div class="d-flex justify-content-between">
      
       <p class="fw-bold my-auto"><span class="color-x1 ">Delivered !</span></p>
   
      </div>
    </div>
  </div>
</div>
          

          </div>
     
      
      <!-------------------my orders---------------->
      </div>


      <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
        <!------------------order history-------------->
        
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 m-3 g-3">

          <!-------order 1------------->
         <div class="col">
           <div class="card card-stepper" style="border-radius: 16px;">
             <div class="card-header p-4">
               <div class="row">
                 <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                   <div class="m-auto m-xxl-0">
                   <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
                   <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
                 </div>
                 <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                   <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                 </div>
               </div>
             </div>
             <div class="card-body p-4">
           
             <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
               <span class="dot"></span>
               <hr class="flex-fill track-line"><span class="dot"></span>
               <hr class="flex-fill track-line"><span class="dot"></span>
               
               <hr class="flex-fill track-line"><span
                 class="d-flex justify-content-center align-items-center big-dot dot">
                 <i class="fa fa-check text-white"></i></span>
             </div>

             <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
               <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
                 <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
               </div>
               <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
                   Shipped</span>
                   <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
              
               <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
                   delivery</span>
                   <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
               <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
                 <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
             </div>

             </div>
             <div class="card-footer p-3 px-4">
               <div class="d-flex justify-content-between">
               
                <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
                
               </div>
             </div>
           </div>
         </div>

     <!-------order 1------------->
     <div class="col">
       <div class="card card-stepper" style="border-radius: 16px;">
         <div class="card-header p-4">
           <div class="row">
             <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
               <div class="m-auto m-xxl-0">
               <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
               <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
             </div>
             <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
               <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
             </div>
           </div>
         </div>
         <div class="card-body p-4">
       
         <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
           <span class="dot"></span>
           <hr class="flex-fill track-line"><span class="dot"></span>
           <hr class="flex-fill track-line"><span class="dot"></span>
           
           <hr class="flex-fill "><span
             class="d-flex justify-content-center align-items-center big-dot dilX dot">
             <i class="fa fa-check text-white dilx-c"></i></span>
         </div>

         <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
           <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
             <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
           </div>
           <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
               Shipped</span>
               <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
          
           <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
               delivery</span>
               <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
           <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
             <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
         </div>

         </div>
         <div class="card-footer p-3 px-4">
           <div class="d-flex justify-content-between">
           
            <p class="fw-bold my-auto"><span class="color-x1 ">Delivered</span></p>
            <button class="btn-bg-x1 btn btn-sm">cancel</button>
           </div>
         </div>
       </div>
     </div>

      <!-------order 1------------->
      <div class="col">
       <div class="card card-stepper" style="border-radius: 16px;">
         <div class="card-header p-4">
           <div class="row">
             <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
               <div class="m-auto m-xxl-0">
               <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
               <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
             </div>
             <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
               <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
             </div>
           </div>
         </div>
         <div class="card-body p-4">
       
         <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
           <span class="dot"></span>
           <hr class="flex-fill track-line"><span class="dot"></span>
           <hr class="flex-fill "><span class="dot dilX"></span>
           
           <hr class="flex-fill "><span
             class="d-flex justify-content-center align-items-center big-dot dilX dot">
             <i class="fa fa-check text-white dilx-c"></i></span>
         </div>

         <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
           <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
             <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
           </div>
           <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
               Shipped</span>
               <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
          
           <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
               delivery</span>
               <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
           <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
             <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
         </div>

         </div>
         <div class="card-footer p-3 px-4">
           <div class="d-flex justify-content-between">
           
            <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
           </div>
         </div>
       </div>
     </div>

    
<!-------order 1------------->
<div class="col">
<div class="card card-stepper" style="border-radius: 16px;">
 <div class="card-header p-4">
   <div class="row">
     <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
       <div class="m-auto m-xxl-0">
       <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
       <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
     </div>
     <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
       <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
     </div>
   </div>
 </div>
 <div class="card-body p-4">

 <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
   <span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   
   <hr class="flex-fill track-line"><span
     class="d-flex justify-content-center align-items-center big-dot dot">
     <i class="fa fa-check text-white"></i></span>
 </div>

 <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
   <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
     <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
   </div>
   <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
       Shipped</span>
       <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
  
   <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
       delivery</span>
       <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
   <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
     <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
 </div>

 </div>
 <div class="card-footer p-3 px-4">
   <div class="d-flex justify-content-between">
   
    <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
   </div>
 </div>
</div>
</div>
      
<!-------order 1------------->
<div class="col">
<div class="card card-stepper" style="border-radius: 16px;">
 <div class="card-header p-4">
   <div class="row">
     <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
       <div class="m-auto m-xxl-0">
       <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
       <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
     </div>
     <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
       <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
     </div>
   </div>
 </div>
 <div class="card-body p-4">

 <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
   <span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   
   <hr class="flex-fill track-line"><span
     class="d-flex justify-content-center align-items-center big-dot dot">
     <i class="fa fa-check text-white"></i></span>
 </div>

 <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
   <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
     <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
   </div>
   <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
       Shipped</span>
       <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
  
   <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
       delivery</span>
       <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
   <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
     <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
 </div>

 </div>
 <div class="card-footer p-3 px-4">
   <div class="d-flex justify-content-between">
   
    <p class="fw-bold my-auto"><span class="color-x1 ">Delivered</span></p>
    <button class="btn-bg-x1 btn btn-sm">cancel</button>
   </div>
 </div>
</div>
</div>
<!-------order 1------------->
<div class="col">
<div class="card card-stepper" style="border-radius: 16px;">
 <div class="card-header p-4">
   <div class="row">
     <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
       <div class="m-auto m-xxl-0">
       <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
       <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
     </div>
     <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
       <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
     </div>
   </div>
 </div>
 <div class="card-body p-4">

 <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
   <span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   
   <hr class="flex-fill track-line"><span
     class="d-flex justify-content-center align-items-center big-dot dot">
     <i class="fa fa-check text-white"></i></span>
 </div>

 <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
   <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
     <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
   </div>
   <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
       Shipped</span>
       <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
  
   <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
       delivery</span>
       <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
   <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
     <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
 </div>

 </div>
 <div class="card-footer p-3 px-4">
   <div class="d-flex justify-content-between">
   
    <p class="fw-bold my-auto"><span class="color-x1 ">Delivered</span></p>
    <button class="btn-bg-x1 btn btn-sm">cancel</button>
   </div>
 </div>
</div>
</div>
       

       </div>
        <!------------------order history-------------->
      </div>


      <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
        <!-------------------cancel order--------------->
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 m-3 g-3">

          <!-------order 1------------->
         <div class="col">
           <div class="card card-stepper" style="border-radius: 16px;">
             <div class="card-header p-4">
               <div class="row">
                 <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                   <div class="m-auto m-xxl-0">
                   <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
                   <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
                 </div>
                 <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                   <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                 </div>
               </div>
             </div>
             <div class="card-body p-4">
           
             <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
               <span class="dot"></span>
               <hr class="flex-fill track-line"><span class="dot"></span>
               <hr class="flex-fill track-line"><span class="dot"></span>
               
               <hr class="flex-fill track-line"><span
                 class="d-flex justify-content-center align-items-center big-dot dot">
                 <i class="fa fa-check text-white"></i></span>
             </div>

             <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
               <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
                 <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
               </div>
               <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
                   Shipped</span>
                   <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
              
               <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
                   delivery</span>
                   <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
               <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
                 <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
             </div>

             </div>
             <div class="card-footer p-3 px-4">
               <div class="d-flex justify-content-between">
               
                <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
                
               </div>
             </div>
           </div>
         </div>

  <!-------order 1------------->
<div class="col">
  <div class="card card-stepper" style="border-radius: 16px;">
   <div class="card-header p-4">
     <div class="row">
       <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
         <div class="m-auto m-xxl-0">
         <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
         <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
       </div>
       <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
         <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
       </div>
     </div>
   </div>
   <div class="card-body p-4">
  
   <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
     <span class="dot"></span>
     <hr class="flex-fill track-line"><span class="dot"></span>
     <hr class="flex-fill track-line"><span class="dot"></span>
     
     <hr class="flex-fill track-line"><span
       class="d-flex justify-content-center align-items-center big-dot dot">
       <i class="fa fa-check text-white"></i></span>
   </div>
  
   <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
     <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
       <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
     </div>
     <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
         Shipped</span>
         <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
    
     <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
         delivery</span>
         <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
     <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
       <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
   </div>
  
   </div>
   <div class="card-footer p-3 px-4">
     <div class="d-flex justify-content-between">
     
      <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
     </div>
   </div>
  </div>
  </div>

      <!-------order 1------------->
      <div class="col">
       <div class="card card-stepper" style="border-radius: 16px;">
         <div class="card-header p-4">
           <div class="row">
             <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
               <div class="m-auto m-xxl-0">
               <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
               <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
             </div>
             <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
               <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
             </div>
           </div>
         </div>
         <div class="card-body p-4">
       
         <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
           <span class="dot"></span>
           <hr class="flex-fill track-line"><span class="dot"></span>
           <hr class="flex-fill "><span class="dot dilX"></span>
           
           <hr class="flex-fill "><span
             class="d-flex justify-content-center align-items-center big-dot dilX dot">
             <i class="fa fa-check text-white dilx-c"></i></span>
         </div>

         <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
           <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
             <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
           </div>
           <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
               Shipped</span>
               <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
          
           <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
               delivery</span>
               <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
           <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
             <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
         </div>

         </div>
         <div class="card-footer p-3 px-4">
           <div class="d-flex justify-content-between">
           
            <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
           </div>
         </div>
       </div>
     </div>

    
<!-------order 1------------->
<div class="col">
<div class="card card-stepper" style="border-radius: 16px;">
 <div class="card-header p-4">
   <div class="row">
     <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
       <div class="m-auto m-xxl-0">
       <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
       <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
     </div>
     <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
       <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
     </div>
   </div>
 </div>
 <div class="card-body p-4">

 <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
   <span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   <hr class="flex-fill track-line"><span class="dot"></span>
   
   <hr class="flex-fill track-line"><span
     class="d-flex justify-content-center align-items-center big-dot dot">
     <i class="fa fa-check text-white"></i></span>
 </div>

 <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
   <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
     <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
   </div>
   <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
       Shipped</span>
       <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
  
   <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
       delivery</span>
       <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
   <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
     <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
 </div>

 </div>
 <div class="card-footer p-3 px-4">
   <div class="d-flex justify-content-between">
   
    <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
   </div>
 </div>
</div>
</div>
      
<!-------order 1------------->
<div class="col">
  <div class="card card-stepper" style="border-radius: 16px;">
   <div class="card-header p-4">
     <div class="row">
       <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
         <div class="m-auto m-xxl-0">
         <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
         <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
       </div>
       <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
         <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
       </div>
     </div>
   </div>
   <div class="card-body p-4">
  
   <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
     <span class="dot"></span>
     <hr class="flex-fill track-line"><span class="dot"></span>
     <hr class="flex-fill track-line"><span class="dot"></span>
     
     <hr class="flex-fill track-line"><span
       class="d-flex justify-content-center align-items-center big-dot dot">
       <i class="fa fa-check text-white"></i></span>
   </div>
  
   <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
     <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
       <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
     </div>
     <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
         Shipped</span>
         <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
    
     <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
         delivery</span>
         <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
     <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
       <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
   </div>
  
   </div>
   <div class="card-footer p-3 px-4">
     <div class="d-flex justify-content-between">
     
      <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
     </div>
   </div>
  </div>
  </div>

  <!-------order 1------------->
<div class="col">
  <div class="card card-stepper" style="border-radius: 16px;">
   <div class="card-header p-4">
     <div class="row">
       <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
         <div class="m-auto m-xxl-0">
         <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">1222528743</span></p>
         <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March 2019</span> </p></div>
       </div>
       <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
         <a href="#" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
       </div>
     </div>
   </div>
   <div class="card-body p-4">
  
   <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
     <span class="dot"></span>
     <hr class="flex-fill track-line"><span class="dot"></span>
     <hr class="flex-fill track-line"><span class="dot"></span>
     
     <hr class="flex-fill track-line"><span
       class="d-flex justify-content-center align-items-center big-dot dot">
       <i class="fa fa-check text-white"></i></span>
   </div>
  
   <div class="d-flex flex-row justify-content-between align-items-center mt-2 mt-sm-none">
     <div class="d-flex flex-column align-items-start"><span class="d-none d-sm-inline">Order placed</span>
       <i class="fas fa-clipboard-list color-x1 fs-4 d-block d-sm-none"></i>
     </div>
     <div class="d-flex flex-column justify-content-center"><span class="d-none d-sm-inline">Order
         Shipped</span>
         <i class="fas fa-box-open fs-4 color-x1 d-block d-sm-none"></i></div>
    
     <div class="d-flex flex-column align-items-center"><span class="d-none d-sm-inline">Out for
         delivery</span>
         <i class="fas fa-shipping-fast  fs-4 color-x1 d-block d-sm-none"></i></div>
     <div class="d-flex flex-column align-items-end"><span class="d-none d-sm-inline">Delivered</span>
       <i class="fas fa-home fs-4 color-x1 d-block d-sm-none"></i></div>
   </div>
  
   </div>
   <div class="card-footer p-3 px-4">
     <div class="d-flex justify-content-between">
     
      <p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>
     </div>
   </div>
  </div>
  </div>

       </div>
        <!-------------------cancel order--------------->
      </div>
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