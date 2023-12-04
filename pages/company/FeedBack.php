 <?php
    include 'include/header.php';
    
    ?>


    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
                <div class=" ">
                    <ul class="nav nav-tabs justify-content-center mb-3" id="ex1" role="tablist">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link active" id="home-tab0" data-mdb-toggle="tab"
                                data-mdb-target="#home0" type="button" role="tab" aria-controls="home"
                                aria-selected="true">
                                My Replays
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">
                                Customer Feedbacks
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#contact0"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">
                                Admin Replays
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent0">
                        <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                            <!-------------------my complaints---------------->

                            <div class="mx-2 my-4">
                                <div class="card px-4  pb-3">

                                   
                                      <?php 
                                      $ids = $_SESSION['id'];
         
          $sql = "SELECT * " .
            "FROM admin_register, replay_complaint " .
            "WHERE  admin_register.id = replay_complaint.company_id AND admin_register.id = '$ids'";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
                $compaint_id = $row['compaint_id']; 
                $ids = $row['compaint_id']; 
         ?>
                                     <div class="row  borx py-4 ps-2 border-bottom">
                                       
                                        <div class="col-12 col-lg-9 p-0 d-flex">

                                            <!---company logo----->
                                            <div class=" my-auto">
                                                <img src="company_logo/<?php echo $row['Image']; ?>" class="hig-image" alt="">
                                            </div>
                                            <!----message------->
                                            <div class="ps-3">
                                                <div class="py-0">
                                                    <div class=""> <span class="fw-bold"><?php echo $row['company_name']; ?> </span>
                                                        <span class=""><?php echo $row['create_at']; ?></span>
                                                        <div>
                                                            <span class="fw-bold">to-</span>
                                                            <span class=""><?php echo $row['customer_name']; ?> </span>
                                                        </div>
                                                        <div class="hide-xy d-none d-md-block">
                                                            <p class="pb-0 mb-0"><?php echo $row['re_description']; ?>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                        <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
                                            <!------buttons------>
                                            <div class="d-flex btnx-w m-auto me-0">
                                                <a href="./singal-feedback.php?order=<?php echo urlencode ($compaint_id); ?>&id=<?php echo urlencode ($compaint_id); ?>">
                                                    <button class="btn  bg-x1 m-1">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                                <form action="code.php" method="post">
                                                    <input type="hidden" name="complaint_replay_id" value=<?php echo $row['replay_id']; ?>>
                                                <button class="btn btn-bg-x1 p-2 px-4 m-1" name="delete_complaint_replay">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                                            </div>

                                        </div>
                                        
                                    </div>
                                     <?php }} ?>
                                    
                                </div>
                            </div>
                            <!-------------------my complaints---------------->
                        </div>


                        <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                            <!------------------complaints replay-------------->
                            <div class="mx-2 my-4">
                                <div class="card px-4  pb-3">

                                    <!-----1 complain----->
                                    <?php
                                    $com_id = $_SESSION['id'];
                                    $company_name = $_SESSION['company_name'];
         
          $sql = "SELECT * " .
            "FROM user_register, use_complaint " .
            "WHERE  user_register.user_id = use_complaint.user_id AND use_complaint.company_name = '$company_name'";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
                $complaint_id = $row['complaint_id'];
                $user_id = $row['user_id'];
         ?>
                                    <div class="row  borx py-4 ps-2 border-bottom">

                                        <div class="col-12 col-lg-9 p-0 d-flex">

                                            <!---company logo----->
                                            <div class=" my-auto">
                                                <?php
                if($row['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="hig-image" style="width: 100px;">';
                }else{
                  echo '<img src="../user/uploaded_img/'.$row['user_image'].'" alt="avatar" class="hig-image" img-fluid" style="width: 100px;">';
                }
                ?>
                                                <!-- <img src="../user/uploaded_img/<?php echo $row['user_image']; ?>" class="hig-image" alt=""> -->
                                            </div>
                                            <!----message------->
                                            <div class="ps-3">
                                                <div class="py-0">
                                                    <div class=""> <span class="fw-bold"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?> </span>
                                                        <span class="">-<?php echo $row['create_at']; ?></span>
                                                        <div>
                                                            <span class="fw-bold">to-</span>
                                                            <span class=""><?php echo $row['company_name']; ?></span>
                                                        </div>
                                                        <div class="hide-xy d-none d-md-block">
                                                            <p class="pb-0 mb-0"><?php echo $row['description']; ?>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
                                            <!------buttons------>
                                            <div class="d-flex btnx-w m-auto me-0">
                                                <a href="./replay_complaint.php?id=<?php echo urlencode ($complaint_id); ?>&user_id=<?php echo urlencode ($user_id); ?>">
                                                    <button class="btn  btn-bg-x1 m-1">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                                <a href="./user_single_feedback.php?complaint_id=<?php echo $row['complaint_id']; ?>">
                                                    <button class="btn border-1 bg-x1 m-1">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }} ?>
                                     <!-----1 complain----->
                                </div>
                            </div>

                            <!------------------complaints replay-------------->
                        </div>


                        <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
                            <!-------------------write complaint--------------->
                            <div class="mx-2 my-4">
                                <div class="card px-4  pb-3">

                                    <!-----1 complain----->
                                    <?php
                                    $com_id = $_SESSION['id'];
                                    $company_name = $_SESSION['company_name'];
         
          $sql = "SELECT * " .
            "FROM admin_login,  admin_replay_complaint " .
            "WHERE admin_replay_complaint.company_name = '$company_name' ";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
                                    <div class="row  borx py-4 ps-2 border-bottom">

                                        <div class="col-12 col-lg-9 p-0 d-flex">

                                            <!---company logo----->
                                            <div class=" my-auto">
                  <img src="assets/img/admin.png" alt="avtar" class="hig-image" style="width: 100px;">;
                                            </div>
                                            <!----message------->
                                            <div class="ps-3">
                                                <div class="py-0">
                                                    <div class=""> <span class="fw-bold"><?php echo $row['admin_name']; ?> </span>
                                                        <span class="">-<?php echo $row['create_at']; ?></span>
                                                        <div>
                                                            <span class="fw-bold">to-</span>
                                                            <span class=""><?php echo $row['company_name']; ?></span>
                                                        </div>
                                                        <div class="hide-xy d-none d-md-block">
                                                            <p class="pb-0 mb-0"><?php echo $row['description']; ?>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
                                            <!------buttons------>
                                            <div class="d-flex btnx-w m-auto me-0">
                                                <!-- <a href="./replay_complaint.php?id=<?php // echo $row['complaint_id']; ?>">
                                                    <button class="btn  bg-x1 m-1">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a> -->
                                                <a href="./user_single_feedback.php?replay_id=<?php echo $row['areplay_id']; ?>">
                                                    <button class="btn  bg-x1 m-1">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }} ?>

                        <!-------------------write complaint--------------->
                    </div>
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
    <?php include 'include/footer.php'; ?>
    <script src="../js/sales.js"></script>

</body>

</html>