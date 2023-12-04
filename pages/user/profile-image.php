<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <link rel="stylesheet" href="../../css/ulogin.css">

  <style>
   .div-profile{
 
 width: 100%;
}

.card-bg{
 height: 200px;
 width: 100%;
background-image: url("../../img/7861225.jpg");
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
.card-cont{
 height: 300px;
 width: 100%;
 background-color: #ececec;
}
.image-pro{
 height: 270px;
 width: 270px;
 border-radius: 50%;
 overflow: hidden;
 z-index: 22;
 
}
.bx{
 box-sizing: border-box !important;
}
.hei-x{
 padding: 0% 25px;
 height: 43px;
 width: 170px;
 margin: 0% 7px;
}
/*crop guide */

.text-area{
   height: 250px;
}
.check-box{
  height: 1.1rem !important;
  width: 1.1rem !important;

}
  </style>
  <title>Profile image</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->
  <div class="container my-4">
  <form action="header.php" method="post" enctype="multipart/form-data" class="w-100">

    <div class="row justify-content-center align-items-center">
         <div class="col-11 col-md-10 col-lg-9 col-xl-8 user-card-i">
         <?php	
						$ids = $_SESSION['user_id'];

							$selectquery = "select * from user_register where user_id={$ids}";
							$querys = mysqli_query($conn, $selectquery);
							$num = mysqli_num_rows($querys);
							$data = mysqli_fetch_array($querys);

							
					?>
         <form action="header.php" method="post" enctype="multipart/form-data">
                <div class="div-profile  d-flex justify-content-center align-items-center ">
                        
                    <div class="row justify-content-center align-items-center w-100 ">
                        <div class="w-100 card  p-0">
                            <div class="">
                                <div>
                                    <div class="position-relative">
                                    <?php
                if($data ['user_image'] == ''){
                  echo '<img src="../../img/upload/user.png" alt="avtar" class="image-pro position-absolute top-100 mt-3 start-50 translate-middle">';
                }else{
                  echo '<img src="uploaded_img/'.$data['user_image'].'" alt="avatar" class="image-pro position-absolute top-100 mt-3 start-50 translate-middle">';
                }
                ?>
                                        <!-- <img src="uploaded_img/<?php // echo $data['user_image']; ?>" alt=""
                                            class="image-pro position-absolute top-100 mt-3 start-50 translate-middle" > -->

                                        <div class="card-bg card overflow-hidden">

                                            <div class="w-100 h-100 bg-black opacity-60">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-cont card shadow-0">
                                        <div class="h-50  w-100"></div>
                                        <div class="d-flex h-50 justify-content-center align-items-center">
                                            
                                            <button class="btn btn-lg bg-x1 hei-x position-relative">
                                                <span class="position-absolute top-50 start-50 translate-middle">Upload</span>
                                                <input type="file" name="new_image" class="w-100 opacity-0" >
                                                <input type="hidden" name="image" value="<?php echo $data['user_image']; ?>"><br>

                                            </button>
                                            <button class="btn btn-lg btn-bg-x1 bx hei-x" name="user_change_image" type="submit">Change</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
                </form>
         </div>
    </div>
               
                </form>
  </div>

  <?php include 'footer.php'; ?>
  <!-- <script defer src="https://cdn.crop.guide/loader/l.js?c=HSZQNN"></script> -->
  <script defer src="https://cdn.crop.guide/loader/l.js?c=LJMDXK"></script>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>