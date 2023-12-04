<?php
	include 'include/header.php';
	$multipleImageArr=[];
	if(isset($_GET['pi']) && $_GET['pi']>0){
		$pi=$_GET['pi'];
		$delete_sql="delete from product_images where id='$pi'";
		mysqli_query($conn,$delete_sql);
	}
	?>
	
<div class="d-flex justify-content-end">
	<div class="  hero-section-xr me-3 bx">
		
	<div class="row">
		<div class="">
		<div class="col-md-12">
			<?php
			
					if(isset($_GET['id'])){
							$id  = $_GET['id'];
							$selectquery = mysqli_query($conn, "SELECT * FROM product_page WHERE product_id=$id");
							if(mysqli_num_rows($selectquery) > 0){
							$data = mysqli_fetch_array($selectquery);
							// $cat_name = $data['cat_name'];
                    $date = $data['expiry_date'];
                    $date_input = date('Y-m-d', strtotime($date));
							$resMultipleImage=mysqli_query($conn,"select id,product_images from product_images where product_id='$id'");
			if(mysqli_num_rows($resMultipleImage)>0){
				$jj=0;
				while($rowMultipleImage=mysqli_fetch_assoc($resMultipleImage)){
					$multipleImageArr[$jj]['product_images']=$rowMultipleImage['product_images'];
					$multipleImageArr[$jj]['id']=$rowMultipleImage['id'];
					$jj++;
				}
			}
						?>
			<div class="p-4 pe-1">
				<div class="card-header d-flex justify-content-center p-3">
					<h4>Edit Products</h4>
				</div>
				<div class="card-body ps-2">
					<form action="code.php" method="post" enctype="multipart/form-data">
					<div class="row mt-3 px-4">
					<div class="col-md-6">
						   <label for="">Select Category</label>
						   <input type="hidden" name="product_id" value="<?= $data['product_id']; ?>">
						   <select name="category_id" class="form-control">
						   <option selected>--Select Category--</option>
							<?php	
							$ids = $_SESSION['id'];
								$selectquery =mysqli_query($conn, "SELECT * FROM category WHERE company_id = '$ids'");
								if(mysqli_num_rows($selectquery) > 0){
									foreach($selectquery as $item)
									{
										?>
										<option value="<?= $item['cat_id']; ?>" <?= $data['cat_id'] == $item['cat_id']?'selected':'' ?>><?= $item['cat_name']; ?></option>
										<?php
									}
							}else{
								echo 'no records found';
							} ?>
							
							</select>						
						</div>
						
						<div class="col-md-6">
						   <label for="" mb-0>Name</label>
					       <input type="text" name="name" value="<?= $data['product_name']; ?>" placeholder="Enter Product Name" class="form-control " mb-2>
						</div>
						
						<div class="col-md-12 mt-2">
						   <label for="" mb-0>description</label>
					       <textarea rows="3" type="text" name="description" placeholder="Enter Description" class="form-control" mb-2><?= $data['description']; ?></textarea>							
						</div>
						<div class="form-group mt-3">
							<div class="row"  id="image_box">
						<div class="col-md-10 ">
								<label for="">Upload Image</label>
								<input type="file" name="image" class="form-control"><br>
								<label for="">Current Image</label>
								<input type="hidden" name="old_image" value="<?= $data['img']; ?>">
								<img src="multi_images/<?= $data['img'];?>" height="100px" width="100px" class="border ms-2" alt="<?= $data['product_name']; ?>" srcset="">
						</div>
						<div class="col-md-2 mt-2 ">
										<label for="categories" class=" form-control-label"></label><br>
										<button id="" type="button" class="btn bg-x1 btn-block" onclick="add_more_images()">
											<span id="payment-button-amount">Add Image</span>
										</button>
									 </div>
									 <?php
									 $pathh = "multi_images/";
									 if(isset($multipleImageArr[0])){
foreach($multipleImageArr as $list){
	echo '<div class="col-lg-6" style="margin-top:20px;" id="add_image_box_'.$list['id'].'"><label for="categories" class=" form-control-label">Image</label>
	<input type="file" name="product_images[]" class="form-control" ><a href="edit-product.php?id='.$id.'&pi='.$list['id'].'" style="color:white;">
	<button type="button" class="btn btn-bg-x1 btn-block mt-3"><span id="payment-button-amount">
	<a href="edit-product.php?id='.$id.'&pi='.$list['id'].'" style="color:#D10024;">Remove</span></button></a>';
	echo "<a target='_blank' href='".$pathh.$list['product_images']."'><img width='70px' height='70px' src='".$pathh.$list['product_images']."'/></a>";
	echo '<input type="hidden" name="product_images_id[]" value="'.$list['id'].'"/><input type="hidden" name="old_product_images[]" value="'.$list['product_images'].'"/></div>';
	
}	

									 }
									 ?>
							</div>
						</div>
						<div class="col-md-6 mt-2">
						   <label for="" mb-0>Origanal Price</label>
					       <input type="text" name="origanal_price" value="<?= $data['dis_price']; ?>" placeholder="Enter Origanal Price" class="form-control" mb-2>
						</div>
						<div class="col-md-6 mt-2">
						   <label for="" mb-0>Selling Price</label>
					       <input type="text" name="selling_price" value="<?= $data['price']; ?>" placeholder="Enter Selling Price" class="form-control" mb-2>
						</div>
						<div class="col-md-6 mt-2">
						   <label for="" mb-0>Country</label>
					       <input type="text" name="country" value="<?= $data['country']; ?>" placeholder="Enter your Offer" class="form-control" mb-2>
						</div>
						<div class="col-md-6 mt-2">
						   <label for="" mb-0>Expiry date</label>
						   <input type="date" name="edate" class="form-control p-1" value="<?php echo $date_input; ?>" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">						</div>
						<div class="col-md-6 mt-2">
						   <label for="" mb-0>sub title</label>
						   <textarea name="subtitle" id="" cols="" rows=""  placeholder="Title..."
                                    class="w-100 form-control mt-2 title-dis"><?= $data['subtitle']; ?></textarea>						</div>
						
						<div class="col-md-6 mt-2">
						   <label for="" mb-0>Ingredients</label>
						   <textarea name="ingredients" id="" cols="" rows=""  placeholder="Write..."
                                    class="w-100 form-control mt-2 title-dis"><?= $data['Ingredients']; ?></textarea>
									</div>
									<div class="col-md-12 mt-2">
						   <label for="" >Address</label>
						   <textarea name="address" id="" cols="" rows="" placeholder="Write..."
                                    class="w-100 form-control mt-2 title-dis"><?= $data['Address']; ?></textarea>						</div>
						<div class="col-md-6 mt-3">
								<label>Status</label>
								<input type="checkbox"  name="status" <?= $data['status'] ? "checked":"" ?> />
							</div>
							<div class="col-md-6 mt-3">
								<label>Trending</label>
								<input type="checkbox" name="trending" <?= $data['trending'] ? "checked":"" ?> >
							</div>
						<div class="col-md-12 mt-2 d-flex justify-content-center">
							<button type="submit" class="btn btn-block w-50 bg-x1" name="update_product_btn">Update</button>
						</div>
					</div>
					</form>
				</div>
			</div>
			<?php
			}else{
				echo 'category not found';
			}
				}else{
					echo 'id missing from url';
				}
			?>
		</div>
			</div>
		
	</div>
	
</div>

</div>
<?php include 'include/footer.php'; ?>
<script>
	var total_image=1;
			function add_more_images(){
				total_image++;
				var html='<div class="col-lg-6" style="margin-top:20px;" id="add_image_box_'+total_image+'"><label for="categories" class=" form-control-label">Image</label><input type="file" name="product_images[]" class="form-control" required><button type="button" class="btn btn-lg btn-danger btn-block" onclick=remove_image("'+total_image+'")><span id="payment-button-amount">Remove</span></button></div>';
				jQuery('#image_box').append(html);
			}
			
			function remove_image(id){
				jQuery('#add_image_box_'+id).remove();
			}
</script>