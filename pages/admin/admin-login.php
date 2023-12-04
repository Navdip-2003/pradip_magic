<?php include 'include/header copy.php';
// echo $_SESSION['admin_email'];
?>

    <!---------navbar for only registration------->

    <!-- Just an image -->
   

    <!---------navbar for only registration end--------->


    <!--------------main section------------>
<div class="">
    <div class=" ">
    <div class="container my-4"> 
  
        <section class=" ">
            <div class="container  ">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col">
                        <div class="card card-registration">
                            <div class="row g-0">
                                <div class="col-lg-6  d-flex ">
                                    <img src="assets/img/vectors/Login-pana.svg" alt="Sample photo"
                                        class="img-fluid w-100 ps-0 m-auto"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-lg-6 p-5 ps-lg-3 d-flex">
                                    <div class="my-auto w-100">
                                    <h3 class="mb-3 tit">Admin Login</h3>
                                    <?php  if (isset($_SESSION['msg'])) {
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    } ?>
                                    <form action="php_code.php" method="post">
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                          <input type="email" id="form1Example1" name="email" class="form-control" />
                                          <label class="form-label" for="form1Example1">Email address</label>
                                        </div>
                                      
                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                          <input type="password" id="form1Example2" name="password" class="form-control" />
                                          <label class="form-label" for="form1Example2">Password</label>
                                        </div>
                                      
                                        <!-- 2 column grid layout for inline styling -->
                                        <div class="row mb-4">
                                          <div class="col d-flex justify-content-center">
                                            <!-- Checkbox -->
                                            <div class="form-check d-flex align-items-center">
                                              <input class="check-box" type="checkbox" value="" id="form1Example3" checked />
                                              <label class="form-check-label mb-0" for="form1Example3"> Remember me </label>
                                            </div>
                                          </div>
                                      
                                          <div class="col">
                                            <!-- Simple link -->
                                            <a href="admin-forgot.php" class="color-x1">Forgot password?</a>
                                          </div>
                                        </div>
                                      
                                        <!-- Submit button -->
                                        <button type="submit" name="admin_submit" class="btn bg-x1 btn-block">Sign in</button>
                                      
                                      
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
</div>
</div>
   
<?php include 'include/footer.php' ?>