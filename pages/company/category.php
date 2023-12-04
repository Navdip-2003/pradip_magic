
<?php

	// if(!isset($_SESSION['fname'])){
	// 	$_SESSION['msg'] = "please login";
	// 	header('location:../user/ulogin.php');
	// }
	include '../../php/config.php';
	include 'include/header.php';
	?>
<div class="d-flex">
<div class=" hero-section-xr ms-auto">
            <div class="p-4">
                <div class=" ">
                    <ul class="nav nav-tabs justify-content-center mb-3" id="ex1" role="tablist">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link active" id="home-tab0" data-mdb-toggle="tab"
                                data-mdb-target="#home0" type="button" role="tab" aria-controls="home"
                                aria-selected="true">
                                All catagory
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">
                              Add catagory
                            </button>
                        </li>
                      
                    </ul>
                    <div class="tab-content" id="myTabContent0">
                        <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                            <!-------------------All catagory page---------------->
                         <div>

						 <div class="row mt-4">
		<div class="col-md-12">
			<div class="card">

				<table class="table table-bordered mb-0 text-center" id="mytable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="blue-star-2">Id</th>
                            <th class="blue-star-2">Name</th>
                            <th class="blue-star-2">Image</th>
                          
                            <th class="blue-star-2">Edit</th>
                            <th class="blue-star-2">Delete</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class=" ">Order Id</th>
                            <th class=" ">Name</th>
                            <th class=" ">Image</th>
                            
                            <th class=" ">Edit</th>
                            <th class=" ">Delete</th>
                            
                        </tr>
                    </tfoot>
                <tbody id="mytable">
				<?php
						$ids = $_SESSION['id'];
							$selectquery =mysqli_query($conn, "SELECT * FROM category WHERE company_id = '$ids'");
							if(mysqli_num_rows($selectquery) > 0){
									foreach($selectquery as $item)
									{
										?>
									
                    <tr>
                        <td id="tds1"><?= $item['cat_id']; ?></td>
                        <td  id="tds2"><?= $item['cat_name']; ?></td>
                        <td  id="tds3">
						<img src="uploads/<?= $item['image']; ?>" height="50px" width="50px" alt="<?= $item['cat_name']; ?>" srcset="">
						</td>
                        
                        <td  id="tds7">
						<a href="edit-category.php?id=<?= $item['cat_id']; ?>" class="btn btn-bg-x1">Edit</a>		
					</td>
                        <td class="">
						<button type="submit" class="btn bg-x1 border-1 delete_category_btn" value="<?= $item['cat_id']; ?>">Delete</button>

						</td>
                    </tr>
					<?php
									}
							}
							
						?>
						
                   
                   
                   <tr class="d-none"><td></td></tr>
                </tbody>
            </table>
			</div>
		</div>
	</div>
						 </div>
                            <!-------------------my complaints---------------->
                        </div>


                        <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                            <!------------------add cotagory page-------------->
							<div>

							<section class="card p-0">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center  ">
      <div class="col-md-8 col-lg-7 col-xl-6 ">
        <img src="assets/img/vectors/Scrum board-amico.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-6 p-2 p-md-3 p-xl-5">
	  <form action="code.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<!-- <div class="col-md-12">
						   <label for="" mb-0>Name</label>
					       <input type="text" name="name" placeholder="Enter Category Name" class="form-control" mb-2 required>
						</div> -->
						<div class="form-outline mb-4">
                          <input type="text" id="form1Example13" name="name" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form1Example13">Enter Category Name</label>
                         </div>
						<!-- <div class="col-md-6">
						   <label for="" mb-0>Slug</label>
					       <input type="text" name="slug" placeholder="Enter Slug" class="form-control" mb-2 required>
						</div> -->


						<!-- <div class="col-md-12">
						   <label for="" mb-0>Description</label>
					       <textarea rows="3" type="text" name="description" placeholder="Enter Description" class="form-control" mb-2 required></textarea>							
						</div> -->

                        <div class="form-outline mb-4">
                       <textarea class="form-control form-control-lg" id="form4Example3" name="description" rows="4" required></textarea>
                       <label class="form-label" for="form4Example3">Enter the description</label>
                         </div>


						<div class="col-md-12">
						   <label for="" mb-0>Upload Image</label>
					       <input type="file" name="image" class="form-control form-control-lg" mb-2 required>
						</div>
						<!-- <div class="col-md-12">
						   <label for="" mb-0>Meta Title</label>
					       <input type="text" name="meta_title" placeholder="Enter Meta Title" class="form-control" mb-2 required>
						</div>
						<div class="col-md-12">
						   <label for="" mb-0>Meta Description</label>
					       <input type="text" name="meta_description" placeholder="Enter Meta Description" class="form-control" mb-2 required>
						</div><div class="col-md-12">
						   <label for="" mb-0>Meta Keywords</label>
					       <input type="text" name="meta_keywords" placeholder="Enter Meta Keywords" class="form-control" mb-2 required>
						</div>
						<div class="col-md-6">
						   <label for="" mb-0>Status</label> -->
					       <!-- <input type="checkbox" name="status"  class="form-control" mb-2> -->
						   <!-- <input type="checkbox" name="status"  >
						</div>
						<div class="col-md-6">
						   <label for="" mb-0>Popular</label>
					       <input type="checkbox" name="popular">
						</div> -->
						<!-- <div class="col-md-12">
							<button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
						</div> -->
										<div class="d-flex my-4 justify-content-center">

<input type="reset" class="btn btn-bg-x1 p-2 px-4 mx-2" value="Reset">
<input type="submit" class="btn bg-x1 mx-2" name="add_category_btn" value="Add Category">
</div>
					</div>
					</form>
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
		<?php include 'include/footer.php'; ?>
</div>
