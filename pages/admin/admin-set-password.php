<?php include 'include/header.php';

if (isset($_POST['submit'])) {

	if (isset($_GET['token'])) {

		$token = $_GET['token'];
		$newpassword = mysqli_real_escape_string($conn, $_POST['password']);
		// $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

		$pass = password_hash($newpassword, PASSWORD_BCRYPT);
		// $cpass = password_hash($cpassword, PASSWORD_BCRYPT);






			$updatequery = "update admin_login set password='$pass' where token='$token'";
			$iquery = mysqli_query($conn, $updatequery);

			if ($iquery) {
				// Email verify code
				$_SESSION['msg'] = "Your Password has been updated";
				header('location:admin-login.php');
			} else {
        $_SESSION['msg'] = "Your password is not updated.";
				header("Location:admin-login.php");
				exit();
			}
		
	} else {
    $_SESSION['msg'] = "Not Token Found";
		header("Location:admin-login.php");
		exit();
	}
}
?>

    <!--------------main section------------>

    <div class="container my-4"> 
  
        <section class=" ">
            <div class="container  ">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col">
                        <div class="card card-registration">
                            <div class="row g-0">
                                <div class="col-lg-6  d-flex ">
                                    <img src="assets/img/vectors/My password-pana.svg" alt="Sample photo"
                                        class="img-fluid w-100 ps-0 m-auto"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-lg-6 p-5 ps-lg-3 d-flex">
                                    <div class="my-auto w-100">
                                    <h3 class="mb-3 tit">Reset Password</h3>
                                    <form method="post" action="">
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                          <input type="password" name="password" id="form1Example1" class="form-control" />
                                          <label class="form-label" for="form1Example1">New Password</label>
                                        </div>
                                      
                                        <!-- Password input -->
                                        <!-- <div class="form-outline mb-4">
                                          <input type="password" id="form1Example2" class="form-control" />
                                          <label class="form-label" for="form1Example2">Conform Password</label>
                                        </div> -->
                                      
                                        <!-- 2 column grid layout for inline styling -->
                                        <div class="row mb-4">
                                          <div class="col d-flex justify-content-center">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                              <label class="form-check-label" for="form1Example3"> Remember me </label>
                                            </div>
                                          </div>
                                      
                                        </div>
                                      
                                        <!-- Submit button -->
                                        <button type="submit" name="submit" class="btn bg-x1 btn-block">SET PASSWORD</button>
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

    <?php include 'include/footer.php' ?>