<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="../css/single_p.css">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/home.css">
  <link type="text/css" rel="stylesheet" href="..css/slick.css" />
  <link type="text/css" rel="stylesheet" href="..css/slick-theme.css" />

  <link type="text/css" rel="stylesheet" href="../css/style.css" />

  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>



  <link rel="stylesheet" href="../css/ulogin.css">
  <title>Product View</title>
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

  <!--------------------product view----------------->
  <!-- <div class="card container my-4">
      <div class="row">
        <div class="col-2 bg-danger p-5"></div>
        <div class="col-4 bg-primary p-2"></div>
        <div class="col-6 bg-success p-2"></div>
      </div>
    </div> -->

  <div class="container my-4">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-6 border-end">
          <div class="d-flex flex-column justify-content-center">
            <div class="main_image"> <img src="../img/product/p1.avif" id="main_product_image" width="350">
            </div>
            <div class="thumbnail_images">
              <ul id="thumbnail">
                <li><img onclick="changeImage(this)" src="../img/product/p2.avif" width="70"></li>
                <li><img onclick="changeImage(this)" src="../img/product/p3.avif" width="70"></li>
                <li><img onclick="changeImage(this)" src="../img/product/p4.avif" width="70"></li>
                <li><img onclick="changeImage(this)" src="../img/product/p5.avif" width="70"></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="p-3 mt-1 right-side">
            <div class="d-flex justify-content-between align-items-center">
              <h3>IIlana</h3> <span class="heart btnX "><i class=" fa-bookmark saveX class_chain fa-regular"></i></span>
            </div>
            <div class="mt-2 pr-3 ">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua</p>
            </div>
            <h3>$430.99</h3>
            <div class="ratings d-flex flex-row align-items-center">
              <div class="d-flex flex-row text-x ">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

              </div> <span>441
                reviews</span>
            </div>
            <div class="mt-3"> <span class="fw-bold">Available :</span>
              <span class="text-success">In Stack</span>
            </div>
            <div class="mt-2"> <span class="fw-bold">Sold by :</span>
              <span class="">Nayka private limitade</span>
            </div>
            <div class="colors mt-3">
              <div class="alert alert-primary p-2" role="alert">
                Get Flat 10% Discount on first order.
              </div>
            </div>
            <div class=" d-flex flex-row mt-4 gap-3"> <button class="btn btn-bg-x1 btn-lg">Buy Now</button>
              <button class="btn bg-x1 btn-lg">Add to Cart</button>
            </div>

          </div>

          <div class="row mt-2 mb-3 px-4">
            <div class="col-12 col-lg-6 d-flex m-2 m-lg-0">
              <img src="../img/genuine.png" alt="" width="40px" height="40px">
              <p class="m-auto ms-3 color-x">100% Genuine Products</p>
            </div>
            <div class="col-12 col-lg-6 d-flex m-2 m-lg-0">
              <img src="../img/return-box.png" alt="" width="38px" height="38px">
              <p class="m-auto ms-3 color-x">Easy Return Policy</p>
            </div>

          </div>

        </div>
      </div>
      <!--------------------here product section complete----------------------->
      <!--------------------here discription------------------>
      <!-- Tabs navs -->
      <ul class="nav nav-tabs nav-fill mt-3 px-4" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
            aria-controls="ex2-tabs-1" aria-selected="true">Description</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
            aria-controls="ex2-tabs-2" aria-selected="false">Ingredients</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab"
            aria-controls="ex2-tabs-3" aria-selected="false"> Reviews</a>
        </li>
      </ul>
      <!-- Tabs navs -->

      <!-- Tabs content -->
      <div class="tab-content" id="ex2-content">
        <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
          <!-----------------------description----------------------->
          <div class="px-4">
            <div class="des-sec mb-4">
              <div class="mb-4">
                <span class="fw-bold">Description : </span>
                <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>Lancome Advanced
                  Genifique Face Serum is Lancome's #1 serum for all women, all ages, all skin types and tones. This
                  serum strengthens the skin's moisture barrier in one drop. A strong skin moisture barrier helps to
                  lock in hydration and defend against external aggressors including pollution, cold, and dry weather.
                  Formulated with 10% Bifidus Prebiotic, Hyaluronic Acid, and Vitamin Cg this anti-aging serum helps to
                  improve the look of dull skin and the signs of aging for visibly glowing skin.</p>
                <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>Lancome Advanced
                  Genifique Face Serum is Lancome's #1 serum for all women, all ages, all skin types and tones. This
                  serum strengthens the skin's moisture barrier in one drop. A strong skin moisture barrier helps to
                  lock in hydration and defend against external aggressors including pollution, cold, and dry weather.
                  Formulated with 10% Bifidus Prebiotic, Hyaluronic Acid, and Vitamin Cg this anti-aging serum helps to
                  improve the look of dull skin and the signs of aging for visibly glowing skin.</p>
              </div>

              <div class="mt-2"> <span class="fw-bold">Expiry Date : </span>
                <span class="">January 2025</span>
              </div>
              <div class="mt-1"> <span class="fw-bold">Country of Origin :</span>
                <span class=""> France</span>
              </div>
              <div class="mt-1"> <span class="fw-bold">Sold by :</span>
                <span class="">Nayka private limitade</span>
              </div>
              <div class="mt-2"> <span class="fw-bold">Address :</span>
                <span class="">Fapagau Et Compagnie 4, Rue Jules Vercruysse Fr-02430 Gauchy, France</span>
              </div>

            </div>
          </div>
          <!-----------------------description----------------------->
        </div>

        <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
          <!-----------------------ing----------------------->
          <div class="px-4">
            <div class="des-sec mb-4">
              <div>
                <span class="fw-bold"> Ingredients : </span>
                <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>Water/Aqua/Eau, Sodium
                  Lauryl Sulfate, Sodium Laureth Sulfate, Sodium Chloride, Cocamidopropyl Betaine, Glycol Distearate,
                  Dimethicone, Sodium Citrate, Citric Acid, Cocamide MEA, Sodium Xylenesulfonate, Fragrance/Parfum,
                  Sodium Benzoate, Panthenol, Glycerin, Salicylic Acid, Tetrasodium EDTA, Trisodium Ethylenediamine
                  Disuccinate, Guar Hydroxypropyltrimonium Chloride, Methylparaben, Sodium Hydroxide, Limonene, Benzyl
                  Salicylate, Hexyl Cinnamal, Linalool, Lycium Barbarum Fruit Extract, Oleic Acid, Lactic Acid,
                  Potassium Sorbate, Magnesium Nitrate, Methylchloroisothiazolinone, Magnesium Chloride,
                  Methylisothiazolinone</p>
              </div>
            </div>
          </div>
          <!-----------------------ing----------------------->
        </div>

        <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
          <!-----------------------review----------------------->
          <div class="">
            <div class="des-sec1 mb-4">
              <div>


                <div class="row w-100 mb-3  g-4">
                  <div class="col-xl-7 ">
                    <span class="fw-bold ms-2">Reviews : </span>
                    <div class="scroll-x">

                      <!----review-1------->
                      <div class="card shadow-0 border rounded-3 ms-2 mt-2">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex">
                              <div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                  class="w-100" />
                                <a href="#!">
                                  <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                              <div class="mt-2"> <span class="fw-bold">Prince desai -</span>
                                <span class="">January 2025</span>
                              </div>
                              <div class="d-flex flex-row">
                                <div class="color-x mb-1 me-2">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>

                              </div>


                              <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                              </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">


                              <div class="d-flex h-100">
                                <button class="btn bg-x1 m-auto" type="button">Details</button>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!----review-1------->
                      <div class="card shadow-0 border rounded-3 ms-2 mt-2">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex">
                              <div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                  class="w-100" />
                                <a href="#!">
                                  <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                              <div class="mt-2"> <span class="fw-bold">Prince desai -</span>
                                <span class="">January 2025</span>
                              </div>
                              <div class="d-flex flex-row">
                                <div class="color-x mb-1 me-2">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>

                              </div>


                              <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                              </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">


                              <div class="d-flex h-100">
                                <button class="btn bg-x1 m-auto" type="button">Details</button>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!----review-1------->
                      <div class="card shadow-0 border rounded-3 ms-2 mt-2">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex">
                              <div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                  class="w-100" />
                                <a href="#!">
                                  <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                              <div class="mt-2"> <span class="fw-bold">Prince desai -</span>
                                <span class="">January 2025</span>
                              </div>
                              <div class="d-flex flex-row">
                                <div class="color-x mb-1 me-2">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>

                              </div>


                              <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                              </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">


                              <div class="d-flex h-100">
                                <button class="btn bg-x1 m-auto" type="button">Details</button>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!----review-1------->
                      <div class="card shadow-0 border rounded-3 ms-2 mt-2">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex">
                              <div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                  class="w-100" />
                                <a href="#!">
                                  <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                              <div class="mt-2"> <span class="fw-bold">Prince desai -</span>
                                <span class="">January 2025</span>
                              </div>
                              <div class="d-flex flex-row">
                                <div class="color-x mb-1 me-2">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>

                              </div>


                              <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                              </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">


                              <div class="d-flex h-100">
                                <button class="btn bg-x1 m-auto" type="button">Details</button>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!----review-1------->
                      <div class="card shadow-0 border rounded-3 ms-2 mt-2">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex">
                              <div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                  class="w-100" />
                                <a href="#!">
                                  <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                              <div class="mt-2"> <span class="fw-bold">Prince desai -</span>
                                <span class="">January 2025</span>
                              </div>
                              <div class="d-flex flex-row">
                                <div class="color-x mb-1 me-2">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>

                              </div>


                              <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                              </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">


                              <div class="d-flex h-100">
                                <button class="btn bg-x1 m-auto" type="button">Details</button>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                  <div class="col-md-12 col-xl-5">
                    <span class="fw-bold ">Your Review : </span>
                    <form>
                      <!-- Name input -->
                      <div class="form-outline mb-4 mt-2">
                        <input type="text" id="form4Example1" class="form-control" />
                        <label class="form-label" for="form4Example1">Name</label>
                      </div>

                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input type="email" id="form4Example2" class="form-control" />
                        <label class="form-label" for="form4Example2">Email address</label>
                      </div>

                      <!-- Message input -->
                      <div class="form-outline mb-4">
                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                        <label class="form-label" for="form4Example3">Message</label>
                      </div>

                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-center mb-4">

                        <label class="form-check-label mt-1" for="form4Example4">
                          Rates :

                        </label>
                        <select class="form-select ms-1" aria-label=".form-select-lg example">
                          <option selected disabled>SELECT</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                          <option value="5">Five</option>
                        </select>
                      </div>

                      <!-- Submit button -->
                      <button type="submit" class="btn bg-x1 btn-block mb-0">Send</button>
                    </form>
                  </div>
                </div>



              </div>
            </div>
          </div>
          <!-----------------------review----------------------->
        </div>
      </div>
      <!-- Tabs content -->
      <!--------------------here discription end-------------->
      <div class="d-flex mt-1">
          <h4 class="m-auto">Suggested products </h4>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 p-5 p-lg-3 g-2 g-md-4">
        
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

    </div>
  </div>
  <!--------------------product view end-------------->

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
  <!--------------------------------end of the footer------------------------------------>




  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <!-- MDB -->
  <link rel="stylesheet" href="./js/single_p.js">
  <script src="../js/save_btn.js"></script>
  <script src="../js/single_p.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>