<?php
include 'home_header.php';
// include 'userregi_email.php';

// data insert code
if (isset($_POST['submit'])) {

	if (isset($_GET['token'])) {

		$token = $_GET['token'];
		$newpassword = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

		$pass = password_hash($newpassword, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);





		if ($newpassword === $cpassword) {

			$updatequery = "update user_register set password='$pass' where token='$token'";
			$iquery = mysqli_query($conn, $updatequery);

			if ($iquery) {
				// Email verify code
				$_SESSION['msg'] = "Your Password has been updated";
				header('location:ulogin.php');
			} else {
				header("Location:ulogin.php?error=Your password is not updated.");
				exit();
			}
		} else {
			header("Location:reset_pass.php?error=Password Is Not Matching");
			exit();
		}
	} else {
		header("Location:ulogin.php?error=Not Token Found");
		exit();
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> -->


	<!-- Google font -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"> -->



	<!-- Bootstrap -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
	<!-- MDB -->
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="./home.css">
	<link type="text/css" rel="stylesheet" href="../../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../../css/slick-theme.css" />

	<link type="text/css" rel="stylesheet" href="../../css/style.css" /> -->

	<!-- Font Awesome Icon -->
	<!-- <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

	<?php
include 'links.php';
  ?>


	<!-- <link rel="stylesheet" href="../../css/ulogin.css"> -->
	<title>forgot password</title>
</head>

<body>
	<!----------------------------------header section----------------------------------->
	<?php
	
	?>

	<!-----------------end of hedaer section------------------------------->


	<div class="container">

		<section class=" my-4">
			<div class="container  ">
				<div class="row d-flex justify-content-center align-items-center ">
					<div class="col">
						<div class="card card-registration my-1">
							<div class="row g-0">
								<div class="col-lg-6  d-flex">
									<img src="../../img/lo&rg/Secure login-pana.svg" alt="Sample photo" class="img-fluid w-100 ps-0 m-auto" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
								</div>
								<div class="col-lg-6 p-5 d-flex">
									<div class="m-auto w-100">
										<h3 class="mb-3 text-uppercase tit">Recover Your Account</h3>
										<form class="my-auto" method="post" action="">
											<?php
											if (isset($_GET['error'])) { ?>
												<p class="error"><?php echo $_GET['error']; ?></p>

											<?php }
											?>
											<!-- Email input -->
											<div class="form-outline mb-4">
												<input type="password" name="password" id="form5Example2" class="form-control" />
												<label class="form-label" for="form5Example2">New Password</label>
											</div>
											<div class="form-outline mb-4">
												<input type="password" name="cpassword" id="form5Example2" class="form-control" />
												<label class="form-label" for="form5Example2">Confirm Password</label>
											</div>
											<!-- Submit button -->
											<button type="submit" name="submit" class="btn bg-x1 text-light btn-block mb-4">Update Password</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
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