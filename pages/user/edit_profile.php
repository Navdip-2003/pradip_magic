
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>edit profile</title>
</head>
<style>
	.form-outline img{
		width: 70px;
	}
</style>
<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->


  <div class="container my-4 my-lg-0">
    <section class=" ">
      <div class="container  h-100 my-4 card card-registration">
        <div class="row d-flex align-items-center justify-content-center h-100 ">

          <div class="col-md-9 col-lg-6 col-xl-6 col-xxl-6 ">
            <img src="../../img/lo&rg/Profile Interface-rafiki.svg" class="img-fluid " alt="Phone image">
          </div>

          <div class=" col-lg-5 col-xl-6 col-xxl-6 mb-4 mb-xxl-0 px-5 px-md-0 px-xxl-5">

<?php	
						$ids = $_SESSION['user_id'];

							$selectquery = "select * from user_register where user_id={$ids}";
							$querys = mysqli_query($conn, $selectquery);
							$num = mysqli_num_rows($querys);
							$data = mysqli_fetch_array($querys);

							
					?>

            <!--------------------------------------------+ login form +------------------------------------>
            <form action="header.php" method="post" class="mt-4 mt-md-0 " enctype="multipart/form-data">
              <p class="mb-4 tit">Edit Profile</Em></p>
              <!-- Email input -->
			<?php 
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
              <div class="form-outline mb-4">
				
                <input type="text" id="form1Example13" class="form-control form-control-lg" value="<?php echo $data['fname'] ?>" disabled/>
                <label class="form-label" for="form1Example13">Full Name</label>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email"  value="<?php echo $data['email']; ?>"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter valid email"+
				  class="form-control form-control-lg"  >
                <label class="form-label" for="form1Example13">Email address</label>
              </div>

              <!-- <div class="d-flex mb-4">
                <div class="m-auto me-1"><input type="radio" disabled name="gender">&nbsp;male</div>
                <div class="m-auto ms-1"><input type="radio" disabled name="gender">&nbsp;female</div>
              </div> -->
               <!-- Email input -->
               <div class="form-outline mb-4">
                <input type="number" id="form1Example13" name="mobile" class="form-control form-control-lg"  value="<?php echo $data['phone'] ?>" >
                <label class="form-label" for="form1Example13">Mobile Number</label>
              </div>
               <!-- Email input -->
               <div class="form-outline mb-4">
                <textarea name="address" id="form1Example13" class=" mb-4 h-textarea p-2 form-control" ><?php echo $data['address']; ?></textarea>
                <label class="form-label" for="form1Example13">Home Address...</label>
              </div>
              
			

              <!-- Submit button -->
              <button type="submit" class="btn bg-x1 btn-lg btn-block" name="edit_profile">EDIT Profile</button>
			  <!-- <input type="submit" class="btn bg-x1 btn-lg btn-block" name="edit_profile" value="EDIT Profile" >/ -->
			  <!-- <a href="header.php?id=<?php // echo $row['user_id'] ?>" class="btn bg-x1 btn-lg btn-block" name="edit_profile">EDIT Profile</a> -->


              

            </form>
		
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
<?php include 'footer.php' ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>