<!doctype html>
<html lang="en">

<head>
 
  <?php
include 'links.php';
  ?>
  <title>forgot password</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <?php
	include 'home_header.php';
	?>
 <!--------------end of hedaer section------------------------------->


  <div class="container"> 
  
    <section class="my-4 ">
        <div class="container  ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col">
                    <div class="card card-registration my-1">
                        <div class="row g-0">
                            <div class="col-lg-6  d-flex">
                                <img src="../../img/lo&rg/Two factor authentication-pana.svg" alt="Sample photo"
                                    class="img-fluid w-100 ps-0 m-auto"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-lg-6 p-5 d-flex">
                              <div class="m-auto w-100">
                                <h3 class="mb-3 text-uppercase"><span class="tit">Recover Account</span></h3>
                              <form class="my-auto" method="post" action="../../php/forgot_password.php">
                        
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                  <input type="email" name="email" id="form5Example2" class="form-control" />
                                  <label class="form-label" for="form5Example2">Email address</label>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" name="submit" class="btn bg-x1 text-light btn-block mb-4">Send Mail</button>
                                <div class="mt-4 d-flex"><span class="m-auto">Sing In? <a href="ulogin.php">Click Here..</a> </span></div>
                              </form></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

