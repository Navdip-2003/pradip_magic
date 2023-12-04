<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>User Profile</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->

  <div class="container  my-4">
    <section>
      <div class="py-3">
        
        <div class="row">
        <?php 
             if (isset($_SESSION['user_id'])) {
              $user_id = $_SESSION['user_id'];
           $Selectquery ="SELECT * FROM user_register WHERE user_id = $user_id";
           $query = mysqli_query($conn, $Selectquery);
           if($num = mysqli_num_rows($query)){
             
             while($row = mysqli_fetch_assoc($query)){
              $_SESSION['fname'] = $row['fname'];
              $_SESSION['lname'] = $row['lname'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['phone'] = $row['phone'];
        ?>
          <div class="col-xl-4">
          
        
            <div class="card mb-4">
            <!-- <form action="header.php" method="post"> -->
              <div class="card-body text-center">
                <?php
                if($row['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="rounded-circle img-fluid" style="width: 170px; height: 170px">';
                }else{
                  echo '<img src="uploaded_img/'.$row['user_image'].'" alt="avatar" class="rounded-circle img-fluid" style="width: 170px;  height: 170px">';
                }
                ?>
                
                <h5 class="my-3 color-x1"><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></h5>
                <p class="text-muted mb-1"><?php echo $row['email'] ?></p>
                <p class="text-muted mb-4"><?php echo $row['phone'] ?></p>
                <div class="d-flex justify-content-center mb-2">
                  <a  href="profile-image.php" class="btn bg-x1">Change Image</a>
                  <button type="button" class="btn btn-bg-x1 ms-1">Log Out</button>
                </div>
              </div>
             <!-- </form> -->
            
            </div>

            <div class="card mb-4 order-2 mt-4 d-xl-none">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0 color-x1">Full Name</p>
                  </div>
                  <div class="col-sm-9">
                    
                    <input class="text-muted mb-0" type="text" value="<?php echo $row['fname'] ?>">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0 color-x1">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $row['email'] ?></p>
                  </div>
                </div>
                <hr>
                <!-- <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0 color-x1">Gender</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">Male</p>
                  </div>
                </div>
                <hr> -->
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0 color-x1">Mobile</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $row['phone'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0 color-x1">Address</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $row['address'] ?></p>
                  </div>
                </div>
              </div>
            </div>
            


            <div class="card mb-4 mb-xl-0 d-xl-none">
              <div class="nav flex-column nav-tabs text-center card-body p-0" id="" role="tablist"
                aria-orientation="vertical">
                <ul class="list-group list-group-flush rounded-3">

                  <!-- <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover">
                    <img src="../../img/notification.png" height="22px" alt="">
                    <p class="mb-0">Notification </p>
                  </li> -->


                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/booking.png" height="25px" alt="">
                    <a href="order.php" class="mb-0">My Orders</a>

                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/bookmark.png" height="20px" alt="">
                    <a href="save_p.php" class="mb-0">Save Productss</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/positive-review.png" height="24px" alt="">
                    <a href="my review.php" class="mb-0">My Reviews</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/complain.png" height="22px" alt="">
                    <a href="compaint.php" class="mb-0">Complainant</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/terms-and-conditions.png" height="25px" alt="">
                    <a href="term&condition.php" class="mb-0">Terms & Conditions</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xl-8 ">
            <div class="">
              <div class="card mb-4  d-none d-xl-block">
                <div class="card-body">
                <!-- <form method="post" action="edit_profile.php" enctype="multipart/form-data"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <input class="text-muted mb-0" type="text" value="<?php echo $row['fname'] ?> <?php echo $row['lname'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row['email'] ?></p>
                    </div>
                  </div>
                  <hr>
                  <!-- <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Male</p>
                    </div>
                  </div>
                  <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row['phone'] ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0 color-x1">Address</p>
                    </div>
                    <div class="col-sm-9 d-flex justify-content-between">
                      <p class="text-muted mb-0"><?php echo $row['address'] ?></p>
                      <!-- <button class="btn btn-bg-x1 btn-sm" name="">Edit</button> -->
                      <a href="edit_profile.php?id=<?php echo $row['user_id'] ?>" class="btn btn-bg-x1 btn-sm">Edit</a>
                      
                    </div>
                  </div>
    
                </div>
              </div>
              <?php }}} ?>
<!--             
              <div>
                <div class=" bg-x1-light card"> 
                  <div class="d-flex justify-content-between p-2 px-4 ">
                    <span class="fw-bold my-auto ">Notifications</span>
                    <a href="notification.php" class="btn bg-x1 btn-sm">View All</a>
                  </div>
                </div> 
                <div class="not-fication mt-2 p-3 card">

               <div class="row  borx py-3">

    <div class="col-12 col-lg-9 p-0 d-flex">

        
      <div class="img-logo">
        <div class="border-rx ">
          <img src="../img/prince.jpg" class="img-logo" alt="">
        </div>
      </div>
         
    <div class="ps-3">
      <div class="py-0">
        <div class=""> <span class="fw-bold">nayka private limitade </span>
          <span class="">-January 2025</span>
          <div class="hide-xy d-none d-md-block"> <p class="pb-0 mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, totam.
          </p></div>
          
        </div>
      </div>
    </div>
    </div>

    <div class="col-12 col-lg-3  d-flex">
      
    <div class="d-flex btnx-w m-auto me-0">
      <a href="single-notification.php" class="btn btn-sm bg-x1  hei-x m-lg-auto m-1">
        <i class="fa-solid fa-eye"></i>
             </a>
      <a class="btn btn-sm btn-bg-x1  hei-x m-lg-auto m-1">
        <i class="fa-solid fa-trash"></i>
             </a>
    </div>

    </div>
    
  </div> -->

  <div class="card mb-4 mb-xl-0 d-none d-xl-block overflow-hidden">
              <div class="nav flex-column nav-tabs text-center card-body p-0" id="" role="tablist"
                aria-orientation="vertical">
                <ul class="list-group list-group-flush rounded-3">

                  <!-- <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover">
                    <img src="../../img/notification.png" height="22px" alt="">
                    <p class="mb-0">Notification </p>
                  </li> -->


                 <a href="order.php" class=""><li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/booking.png" height="25px" alt="">
                    <p class="mb-0">My Orders</p>

                  </li></a> 

                  <a href="save_p.php"><li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/bookmark.png" height="20px" alt="">
                    <p class="mb-0">Save Productss</p>
                  </li></a>

                <a href="my review.php" >   <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/positive-review.png" height="24px" alt="">
                    <p class="mb-0">My Reviews</p>
                  </li></a>

                 <a href="compaint.php" > <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/complain.png" height="22px" alt="">
                    <p class="mb-0">Complainant</p>
                  </li></a>

                 <a href="term&condition.php" >  <li class="list-group-item d-flex justify-content-between align-items-center p-3 li-hover-x">
                    <img src="../../img/terms-and-conditions.png" height="25px" alt="">
                    <p class="mb-0">Terms & Conditions</p>
                  </li></a>
                </ul>
              </div>
            </div>

    </div>
    
  </div>


                    <!---------notification------------>
                </div>
              </div>
              <!---------notification------------>
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
  <?php include 'footer.php' ?>
</body>

</html>