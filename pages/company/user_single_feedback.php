
<?php
    include 'include/header.php';
    
    ?>


    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
                <div class="d-flex">
                    <a href="./FeedBack.php" class="color-x1"><p><span class="me-2"><i class="fa-solid fa-arrow-left"></i></span>Back to FeedBack</p></a>
                 </div>
                <div class="py-3">
 <?php 
        
          if (isset($_GET['complaint_id'])) {
            $id = $_GET['complaint_id'];
            
         
    
          $sql = "SELECT * " . 
            "FROM user_register, use_complaint " .
            "WHERE user_register.user_id = use_complaint.user_id AND complaint_id = $id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
                    <div class="row">
                        <div class="col-xl-4 d-md-flex d-xl-block">


                            <div class="card mb-4 col-12 col-md-5 col-xl-12 m-auto">
                                <div class="card-body text-center">
                                <?php
                if($row['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="rounded-circle img-fluid" style="width: 150px; height:150px;">';
                }else{
                  echo '<img src="../user/uploaded_img/'.$row['user_image'].'" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:150px;">';
                }
                ?>
                                    <h5 class="my-3 ">From : <span class="text-x"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></span></h5>
                                    <p class="text-muted mb-1"><?php echo $row['email']; ?></p>

                                </div>
                            </div>
                            <?php
                            
                                    $com_id = $_SESSION['id'];
         
          $sql = "SELECT * " .
          "FROM admin_register " .
          "WHERE  id = $com_id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($data = mysqli_fetch_assoc($result)) {
         ?>
                            <div class="card mb-4 col-12 col-md-5 col-xl-12 m-auto">
                                <div class="card-body text-center">
                                <img src="company_logo/<?php echo $data['Image']; ?>" alt="avatar" class="rounded-circle img-fluid"
                                        style="width: 150px;">
                                    <h5 class="my-3 ">To : <span class="text-x"><?php echo $data['company_name']; ?></span></h5>
                                    <p class="text-muted mb-1"><?php echo $data['email']; ?></p>

                                </div>
                            </div>
<?php }} ?>
                        </div>

                        <div class="col-xl-8 ">

                            <div class="">
                                <div class="card mb-4  mt-4 ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Subject</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['subject']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Date</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['create_at']; ?></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class=" card">

                                <div class="py-1 border-bottom mx-3">
                                    <h5 class="my-2 color-x1">Complaint</h5>
                                </div>

                                <div class="notX py-2 ms-3">

                                    <div class="mt-1">

                                        <p>
                                        <?php echo $row['description']; ?>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}

                    }elseif(isset($_GET['replay_id'])){
                        
                        $replay_id = $_GET['replay_id'];
                        
                        // echo $replay_id;
                        $sql = "SELECT * " . 
            "FROM admin_login, admin_replay_complaint " .
            "WHERE admin_replay_complaint.areplay_id = $replay_id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
                    <div class="row">
                        <div class="col-xl-4 d-md-flex d-xl-block">


                            <div class="card mb-4 col-12 col-md-5 col-xl-12 m-auto">
                                <div class="card-body text-center">
                                
              
                  <img src="assets/img/admin.png" alt="avtar" class="rounded-circle img-fluid" style="width: 150px;">;
              
                                    <h5 class="my-3 ">From : <span class="text-x"><?php echo $row['admin_name']; ?></span></h5>
                                    <p class="text-muted mb-1"><?php echo $row['admin_email']; ?></p>

                                </div>
                            </div>
                            <?php
                            
                                    $com_id = $_SESSION['id'];
         
          $sql = "SELECT * " .
          "FROM admin_register " .
          "WHERE  id = $com_id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($data = mysqli_fetch_assoc($result)) {
         ?>
                            <div class="card mb-4 col-12 col-md-5 col-xl-12 m-auto">
                                <div class="card-body text-center">
                                <img src="company_logo/<?php echo $data['Image']; ?>" alt="avatar" class="rounded-circle img-fluid"
                                        style="width: 150px;">
                                    <h5 class="my-3 ">To : <span class="text-x"><?php echo $data['company_name']; ?></span></h5>
                                    <p class="text-muted mb-1"><?php echo $data['email']; ?></p>

                                </div>
                            </div>
<?php }} ?>
                        </div>

                        <div class="col-xl-8 ">

                            <div class="">
                                <div class="card mb-4  mt-4 ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Subject</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['subject']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Date</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['create_at']; ?></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class=" card">

                                <div class="py-1 border-bottom mx-3">
                                    <h5 class="my-2 color-x1">Complaint</h5>
                                </div>

                                <div class="notX py-2 ms-3">

                                    <div class="mt-1">

                                        <p>
                                        <?php echo $row['description']; ?>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php    }}}
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!------------left nevbar ---------------------->


    <!----------small screen nevbar--------------->


    <div class="offcanvas offcanvas-start wide-x" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">


        <!---------smaller left nevbar----------->
        <div class="left-x-nev header d-lg-none">

            <div class="offcanvas-header d-flex ">
                <div class="close-cx ms-auto">
                    <button type="button" class="btn bg-x1 btn-sm button-cx p-0 " data-mdb-dismiss="offcanvas"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
            <div class="p-4 pt-0">
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
            </div>
        </div>

    </div>


    <!-------------------------------------------------------------------------------------------->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="../js/margin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/sales.js"></script>

</body>

</html>