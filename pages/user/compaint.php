<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>complaint </title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->

<div class="container my-4">
  <div class=" ">
    <ul class="nav nav-tabs justify-content-center mb-3" id="ex1" role="tablist">
      <li class="nav-item " role="presentation">
        <button
          class="nav-link active"
          id="home-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#home0"
          type="button"
          role="tab"
          aria-controls="home"
          aria-selected="true"
        >
          My Complaints
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="profile-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#profile0"
          type="button"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
        >
          Complain Replays
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="contact-tab0"
          data-mdb-toggle="tab"
          data-mdb-target="#contact0"
          type="button"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
        >
          Write Complain
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent0">
      <div
        class="tab-pane fade show active"
        id="home0"
        role="tabpanel"
        aria-labelledby="home-tab0"
      >
      <!-------------------my complaints---------------->
             

     
     <div class="container my-4">
      <div class="card px-4 pb-3">
            
         <!-----1 complain----->
         <?php 
         if (isset($_SESSION['user_id'])) {
          $user_id = $_SESSION['user_id'];
    
      
          $sql = "SELECT * " .
            "FROM user_register, use_complaint " .
            "WHERE use_complaint.user_id = $user_id AND user_register.user_id = use_complaint.user_id";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($row = mysqli_fetch_assoc($result)) {
              $ids = $row['complaint_id'];
         ?>
        <div class="row  borx py-4 ps-2">

          <div class="col-12 col-lg-9 p-0 d-flex">

          <!---company logo----->
      <div class="img-logo2 my-auto">
        <div class="border-rx ">
          <?php
                if($row['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="img-logo2"  style="height: 100px;">';
                }else{
                  echo '<img src="uploaded_img/'.$row['user_image'].'" alt="avatar" class="img-logo2"  style="height: 100px;">';
                }
                ?>
        </div>
      </div>
         <!----message------->
    <div class="ps-3">
      <div class="py-0">
        <div class=""> <span class="fw-bold"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?> </span>
          <span class=""><?php echo $row['create_at']; ?></span>
          <div> 
            <span class="fw-bold">to-</span>
            <span class=""><?php echo $row['company_name']; ?></span>
          </div>
          <div class="hide-xy d-none d-md-block"> <p class="pb-0 mb-0"><?php echo $row['description']; ?>
          </p></div>
          
        </div>
      </div>
    </div>
    </div>

    <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
           <!------buttons------>
    <div class="d-flex btnx-w m-auto me-0">
      <a href="single-complain.php?id=<?php echo $row['complaint_id']; ?>" class="btn btn-sm bg-x1  hei-x m-lg-auto m-1 d-flex">
        <i class="fa-solid fa-eye m-auto"></i>
      </a >
      <form action="header.php" method="post">
      <input type="hidden" name="complaint_replay_id" value=<?php echo $row['complaint_id']; ?>>

      <button class="btn btn-sm btn-bg-x1  hei-x m-lg-auto m-1"  name="delete_complaint_replay">
        <i class="fa-solid fa-trash"></i>
      </button>
      </form>
    </div>

    </div>
    
        </div>

   <?php }}}?>
           <!-----1 complain----->
          

      </div>
     </div>
     
      
      <!-------------------my complaints---------------->
      </div>


      <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
        <!------------------complaints replay-------------->
        
    
        <div class="container my-4">
       
          <div class="card px-4 pb-3">
          <?php 
         if (isset($_SESSION['user_id'])) {
          $user_id = $_SESSION['user_id'];
    
          // $total = 0;
    
          $sql = "SELECT * " .
            "FROM admin_register, replay_complaint " .
            "WHERE admin_register.id = replay_complaint.company_id AND replay_complaint.user_id = '$user_id'";
          $result = mysqli_query($conn, $sql);
    
          if (mysqli_num_rows($result)) {
    
            while ($data = mysqli_fetch_assoc($result)) {
         ?>
         
             <!-----1 complain----->
            <div class="row  borx py-4 ps-2">
    
              <div class="col-12 col-lg-9 p-0 d-flex">
          
              <!---company logo----->
          <div class="img-logo2 my-auto">
            <div class="border-rx ">
              <img src="../company/company_logo/<?php echo $data['Image']; ?>" class="img-logo2" style="width:100px" alt="">
            </div>
          </div>
             <!----message------->
        <div class="ps-3">
          <div class="py-0">
            <div class=""> <span class="fw-bold"><?php echo $data['company_name']; ?></span>
              <span class="">-<?php echo $data['create_at']; ?></span>
              <div> 
                <span class="fw-bold">to-</span>
                <span class=""><?php echo $data['customer_name']; ?>  </span>
              </div>
              <div class="hide-xy d-none d-md-block"> <p class="pb-0 mb-0"><?php echo $data['re_description']; ?>
              </p></div>
              
            </div>
          </div>
        </div>
        </div>
    
    <div class="col-12 col-lg-3  d-flex mt-md-2 mt-lg-3">
           <!------buttons------>
    <div class="d-flex btnx-w m-auto me-0">
      <a href="single-complain.php?replay_id=<?php echo $data['replay_id']; ?>" class="btn btn-sm bg-x1  hei-x m-lg-auto m-1">
        <i class="fa-solid fa-eye"></i>
      </a>
    
    </div>
   
    </div>
    
        </div>
            
           <?php }}} ?>
              <!-----1 complain----->
             
        
          </div>
         
         </div>
      
        <!------------------complaints replay-------------->
      </div>


      <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
        <!-------------------write complaint--------------->
        <div class="container my-4 my-lg-0">
          <section class=" ">
            <div class="container  h-100 my-2  card card-registration">
              <div class="row d-flex align-items-center justify-content-center h-100 ">
                <div class="col-md-9 col-lg-7 col-xl-6 pt-lg-0">
                  <img src="../../img/lo&rg/Call center-pana.svg" class="img-fluid " alt="Phone image">
                </div>
                <div class="col-md-8 col-lg-5 col-xl-5 mt-3 mt-xl-0 p-4">
      
      
                  <!--------------------------------------------+ cancel form +------------------------------------>
                  <?php 
                  if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                  }
                  ?>
                  <p class="mb-3 tit">Write complain</p>
                  <form class="w-100" action="header.php" method="post">
                  
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="order" id="form4Example1" class="form-control" />
                      <label class="form-label" for="form4Example1">Your Order Id</label>
                    </div>
                  
                    <!-- Email input -->
                  

                    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="subject" id="form4Example2" class="form-control" />
                      <label class="form-label" for="form4Example2">Complaint subject</label>
                    </div>
                  
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea class="form-control" name="complain" id="form4Example3" rows="4"></textarea>
                      <label class="form-label"  for="form4Example3">Complain Description</label>
                    </div>

                    
                    <div class=" mb-4">
                      <!-- <input type="text" name="company" id="form4Example2" class="form-control" /> -->
                      <select name="company" class="form-control">
                        <option value="">--Select company--</option>
                      <?php
                        $sql = "SELECT * FROM admin_register";
                        $result=mysqli_query($conn,$sql);
                        foreach ($result as $data){
                      ?>
                       <option value="<?= $data['company_name']; ?>"><?= $data['company_name']; ?></option>
                        <?php  } ?>
                      </select>
                      <!-- <label class="form-label" for="form4Example2">Company Name</label> -->
                    </div>
                    
                   <!-- file input-->
                   <!-- <div class="row"  id="image_box"> -->
							<!-- <div class="">
						   <label for="" mb-0>Upload Image</label><br>
					       <input type="file" name="image" class="form-control d-block" mb-2>
						</div> -->
						<!-- <div class="col-md-2">
										<label for="categories" class=" form-control-label"></label><br>
										<button id="" type="button" class="btn btn-sm btn-info btn-block" onclick="add_more_images()">
											<span id="payment-button-amount">Add Image</span>
										</button>
									 </div>
							</div> -->
                     <!-- Submit button -->
                     <button type="submit" name="complain_submit" class="btn bg-x1 btn-block my-4">Report</button>
                     </form>
                  </div>
                  
                  
                 
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-------------------write complaint--------------->
      </div>
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
<!--------------------------------------------------------------------------------------------->
<?php include 'footer.php' ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>