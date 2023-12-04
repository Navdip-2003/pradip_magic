
<!doctype html>
<html lang="en">

<head>
 
  <?php
include 'links.php';
  ?>
  <title>contact</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
<?php
include 'home_header.php';
// include '../../php/config.php';
// $con = $_SESSION['con'];
?>
  <!-------------------------------end of hedaer section------------------------------->


  <div class="container my-3 my-lg-4 "> 
  
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238133.15238271494!2d72.68220938081429!3d21.15914250142786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1675575681988!5m2!1sen!2sin" class="map shadow" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-2 ">


    <div class="col p-4">
      <div class="d-flex mb-3">
        <p class="m-auto tit">Contact Us</p>
      </div>

      <div class="mb-1 mt-2">
      <div class="d-flex">
        <div class="co-icon d-flex"><i class="fa-solid fa-location-dot iconX m-auto"></i></div>
        <div class="h-100 my-auto d-flex"><p class="m-auto px-4 textX">Address</p></div>
      </div>
      <div class="addX"><div class=" d-flex"><p class="mb-0 px-4">Nana Varachha,Near Sarthana Neture Park,Surat-395006</p></div></div>
    </div>

    <div class="mb-1">
      <div class="d-flex">
        <div class="co-icon d-flex"><i class="fa-solid fa-phone iconX m-auto"></i></div>
        <div class="h-100 my-auto d-flex"><p class="m-auto px-4 textX">Contact</p></div>
      </div>
      <div class="addX mb-1"><div class=" d-flex"><p class="mb-0 px-4">+(91)99788 47345</p></div></div>
      <div class="addX mb-1"><div class=" d-flex"><p class="mb-0 px-4">+(91)75671 59902</p></div></div>
      <div class="addX mb-1"><div class=" d-flex"><p class="mb-0 px-4">+(91)97248 92950</p></div></div>
    </div>

    <div class="">
      <div class="d-flex">
        <div class="co-icon d-flex"><i class="fa-solid fa-envelope iconX m-auto"></i></div>
        <div class="h-100 my-auto d-flex"><p class="m-auto px-4 textX">Sales Support</p></div>
      </div>
      <div class="addX"><div class=" d-flex"><p class="mb-0 px-4">princedesai635@gmail.com</p></div></div>
    </div>
    </div>


    <div class="col p-4">
      <div class="d-flex mb-3">
        <p class="m-auto tit">Send The Message</p>
      </div>
      <?php
                      if (isset($_GET['succ'])) { ?>
                        <p class="succ"><?php echo $_GET['succ']; ?></p>

                      <?php }
                      if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>

                      <?php } ?>
                      
      <form action="../../php/d_contact.php" method="post">
        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="form4Example1" name="name" class="form-control" />
          <label class="form-label" for="form4Example1">Name</label>
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form4Example2" name="email" class="form-control" />
          <label class="form-label" for="form4Example2">Email address</label>
        </div>

            <!-- phone  input -->
            <div class="form-outline mb-4">
          <input type="number" id="form4Example2" name="phone" class="form-control" />
          <label class="form-label" for="form4Example2">mobile numaber</label>
        </div>
      
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" name="message" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Message</label>
        </div>
      
      
        <!-- Submit button -->
        <button type="submit" name="send" class="btn bg-x1 btn-block mb-4">Send</button>
      </form>
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
                <form class="row " action="header.php" method="post">
							<input class="input col-8" name="email" type="email" placeholder="Enter Your Email">
							<button class="newsletter-btn col-4" name="subscribe_btn"><i class="fa fa-envelope"></i> Subscribe</button>
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