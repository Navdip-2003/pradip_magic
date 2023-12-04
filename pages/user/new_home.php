<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home.css"> -->
    
		<!-- Google font -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        -->
		  <!-- Bootstrap -->
		  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
		  <!-- MDB -->
		  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" /> -->
    
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <!-- Slick -->
		<!-- <link type="text/css" rel="stylesheet" href="../../css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="../../css/slick-theme.css"/> -->
        <!-- Custom stlylesheet -->
		<!-- <link type="text/css" rel="stylesheet" href="../../css/style.css"/> -->
        		<!-- Font Awesome Icon -->
                <!-- <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->


				<?php
include 'links.php';
  ?>
    <title>Document</title>
	
<script type="text/javascript">
   window.onpageshow = function(evt) {
      if (evt.persisted) {
         window.location.reload();
      }
   };
</script>
</head>
<body onload="noback();" onpageshow="if(event.persisted) ;" onunload="">
    
    <!----------------------------------header section----------------------------------->
	<?php
	include 'home_header.php';
	?>

    <!-------------------------------end of hedaer section------------------------------->

    <!--------------------------------this is the nevigation----------------------------->


		<!-- /NAVIGATION -->

    <!--------------------------------this is the end of the nevigation ----------------->

    <!--------------------------------this is the slider section-------------------------->
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 xv" src="../../img/slide-01.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 xv" src="../../img/slide-02.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 xv" src="../../img/slide-03.jpg" alt="Third slide">
          </div>	
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
	  
    <!--------------------------------this is the end of the section----------------------->
	<!--------------------------------catagory--------------------------------------------->
	<section >
		<div class="container py-5 px-5 px-sm-3 px-xl-5">
		  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-2 g-sm-3 g-lg-4">
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
					<p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
					<div class="ms-auto text-x">
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
			  <div class="card">
				<div class="d-flex justify-content-between p-3">
				  <p class="lead mb-0">Today's Combo Offer</p>
				  <div
					class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
					style="width: 35px; height: 35px;">
					<p class="text-white mb-0 small">x2</p>
				  </div>
				</div>
				<img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/7.webp"
				  class="card-img-top" alt="Laptop" />
				<div class="card-body">
				  <div class="d-flex justify-content-between">
					<p class="small"><a href="#!" class="text-muted">Laptops</a></p>
					<p class="small text-danger"><s>$1199</s></p>
				  </div>
	  
				  <div class="d-flex justify-content-between mb-3">
					<h5 class="mb-0">HP Envy</h5>
					<h5 class="text-dark mb-0">$1099</h5>
				  </div>
	  
				  <div class="d-flex justify-content-between mb-2">
					<p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
					<div class="ms-auto text-x">
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="far fa-star"></i>
					</div>
				  </div>
				</div>
			  </div>
			</div>
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
					  <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
					  <div class="ms-auto text-x">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
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
					  <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
					  <div class="ms-auto text-x">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
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
					  <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
					  <div class="ms-auto text-x">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
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
					  <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
					  <div class="ms-auto text-x">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
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
					  <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
					  <div class="ms-auto text-x">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			<div class="col">
			  <div class="card">
				<div class="d-flex justify-content-between p-3">
				  <p class="lead mb-0">Today's Combo Offer</p>
				  <div
					class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
					style="width: 35px; height: 35px;">
					<p class="text-white mb-0 small">x3</p>
				  </div>
				</div>
				<img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/5.webp"
				  class="card-img-top" alt="Gaming Laptop" />
				<div class="card-body">
				  <div class="d-flex justify-content-between">
					<p class="small"><a href="#!" class="text-muted">Laptops</a></p>
					<p class="small text-danger"><s>$1399</s></p>
				  </div>
	  
				  <div class="d-flex justify-content-between mb-3">
					<h5 class="mb-0">Toshiba B77</h5>
					<h5 class="text-dark mb-0">$1299</h5>
				  </div>
	  
				  <div class="d-flex justify-content-between mb-2">
					<p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
					<div class="ms-auto text-x">
					  <i class="fa fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star-half-alt"></i>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	<!--------------------------------catagory--------------------------------------------->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
				<div class="col">
					<div class="section-title">
						<h4 class="title">Top selling</h4>
						<div class="section-nav">
							<div id="slick-nav-3" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-3">
						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product07.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product08.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product09.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>

						<div>
							
						</div>
					</div>
				</div>

				<div class="col">
					<div class="section-title">
						<h4 class="title">Top selling</h4>
						<div class="section-nav">
							<div id="slick-nav-4" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-4">
						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product04.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product05.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product06.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>

						<div>
						
						</div>
					</div>
				</div>

				

				<div class="col">
					<div class="section-title">
						<h4 class="title">Top selling</h4>
						<div class="section-nav">
							<div id="slick-nav-5" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-5">
						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product01.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product02.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="../../img/product03.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>

						<div>
					
						</div>
					</div>
				</div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
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
	<!--------------------------------this is the footer----------------------------------->
		<!-- FOOTER -->
		<?php
  include 'footer.php';
  ?>
		<!-- /FOOTER -->
	<!--------------------------------end of the footer------------------------------------>
    <!--------------------------------add to cart page------------------------------------->
	

<!-- <div
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
   <a href="addtocart.php" type="button" name="submit" class="btn bg-x1 btn-lg btn-block">Continue</a>
</div> -->
	<!--------------------------------end of add to cart page------------------------------>
	
	<script
	type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
  ></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




<?php require('razorpay-php/Razorpay.php'); require_once("../../php/config.php");
      if(!isset($_SESSION['email'])) 
      {
      	 header('location:index.php');
      	 exit();
      }
      else 
      {
        $pid=$_SESSION['product_id'];
      }
      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment - Techno Smarter </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 form-container">
				<h1>Payment</h1>
<hr>
<?php 
include("gateway-config.php");
//Razorpay//
use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);
// $firstname=$_SESSION['fname']; 
// $lastname=$_SESSION['lname'];
//  $email=$_SESSION['email'];
// $mobile=$_SESSION['mobile'];
// $address=$_SESSION['address'];
// $note=$_SESSION['note'];
// $sql="SELECT * from products WHERE pid=:pid"; 
//          $stmt = $db->prepare($sql);
//            $stmt->bindParam(':pid',$pid,PDO::PARAM_INT);
//             $stmt->execute();
//            $row=$stmt->fetch();
//            $price=$row['price'];
//            $_SESSION['price']=$price;
//            $title=$row['title'];  
$webtitle='Techno Smarter'; // Change web title
$displayCurrency='INR';
$imageurl='https://technosmarter.com/assets/images/Avatar.png'; //change logo from here
$orderData = [
    'receipt'         => 3456,
    'amount'          => 1 * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => 1,
    "name"              => pradeep,
    "description"       => davra,
    "image"             => https://uploads-ssl.webflow.com/607e8cbd01f3b870369731b1/60a3bde8b448d74ac95641a8_Magicsure%201-p-800.png,
    "prefill"           => [
    "name"              => pradip davra,
    "email"             => davarapradeep@gmail.com,
    "contact"           => 7567159902,
    ],
    "notes"             => [
    "address"           => dipmala,
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


 ?>
				<!-- <div class="row"> 
					<div class="col-8"> 
            <h4>(Payer Details)</h4>
  <div class="mb-3">
    <label  class="label">First Name :- </label>
     <?php //echo $firstname; ?>
  </div>
  <div class="mb-3">
    <label class="label">Last Name:- </label>
      <?php// echo $lastname; ?>
  </div>

  <div class="mb-3">
    <label class="label">Email:- </label>
      <?php //echo $email; ?>
  </div>
  <div class="mb-3">
    <label class="label">Mobile:- </label>
      <?php// echo $mobile; ?>
  </div>
  <div class="mb-3">
    <label class="label">Address:- </label>
    <?php //echo $address; ?>
  </div>
  <div class="mb-3">
    <label class="label">Note:- </label>
    <?php //echo $note; ?>
  </div> -->


				<!-- //	</div>
					//<div class="col-4 text-center">-->
				
		<!-- // 			 $sql="SELECT * from products WHERE pid=:pid"; 
        //  $stmt = $db->prepare($sql);
        //    $stmt->bindParam(':pid',$pid,PDO::PARAM_INT);
        //     $stmt->execute();
        //    $row=$stmt->fetch();
     // '<div class="card" style="width: 18rem;">
  //<img class="card-img-top" src="uploads/'//.$row['image'].'" alt="Card image cap">
 // <div class="card-body">
  //  <h5 class="card-title">'.$row['title'].'</h5>
  //  <p class="card-text">'.$row['price'].' INR</p>
//</div>
//</div>';  -->
				
				<br>
				  <center>
   <form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="<?php echo $pid;?>"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="<?php echo $pid;?>">
</form>
</center>

				</div>
				</div>
		</div>
	</div>
</div>
</body>
</html>