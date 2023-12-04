<?php
	include 'include/header.php';
	
	?>
	<style>
		label{
			color: #D10024;
		}
	</style>
<div class="d-flex">
	<div class="  hero-section-xr ms-auto">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Add Products</h4>
				</div>
				<div class="card-body">
					<form action="code.php" method="post" enctype="multipart/form-data">
					<div class="row">
					<div class="col-md-6">
						   <label for="">Select Category</label>
						   <select name="category_id" class="form-select">
						   <option selected>--Select Category--</option>
							<?php	
									
								$selectquery =mysqli_query($conn, "SELECT * FROM category");
								if(mysqli_num_rows($selectquery) > 0){
									foreach($selectquery as $item)
									{
										?>
										<option value="<?= $item['cat_id']; ?>"><?= $item['cat_name']; ?></option>
										<?php
									}
							}else{
								echo 'no records found';
							} ?>
							
							</select>						
						</div>
						<div class="col-md-6"></div>
						<div class="col-md-6">
						   <label for="" mb-0>Name</label>
					       <input type="text" name="name" placeholder="Enter Product Name" class="form-control" mb-2>
						</div>
						<div class="col-md-6">
						   <label for="" mb-0>Company</label>
					       <input type="text" name="company" placeholder="Enter Company name" class="form-control" mb-2>
						</div>
						<div class="col-md-12">
						   <label for="" mb-0>description</label>
					       <textarea rows="3" type="text" name="description" placeholder="Enter Description" class="form-control" mb-2></textarea>							
						</div>
						<div class="form-group">
							<div class="row"  id="image_box">
							<div class="col-md-10">
						   <label for="" mb-0>Upload Image</label><br>
					       <input type="file" name="image" class="form-control" mb-2>
						</div>
						<div class="col-md-2">
										<label for="categories" class=" form-control-label"></label><br>
										<button id="" type="button" class="btn btn-lg btn-bg-x1 btn-block" onclick="add_more_images()">
											<span id="payment-button-amount">Add Image</span>
										</button>
									 </div>
							</div>
						</div>
						
						<div class="col-md-12">
						   <label for="" mb-0>Origanal Price</label>
					       <input type="text" name="origanal_price" placeholder="Enter Origanal Price" class="form-control" mb-2>
						</div>
						<div class="col-md-12">
						   <label for="" mb-0>Selling Price</label>
					       <input type="text" name="selling_price" placeholder="Enter Selling Price" class="form-control" mb-2>
						</div><div class="col-md-12">
						   <label for="" mb-0>offer</label>
					       <input type="text" name="offer" placeholder="Enter your Offer" class="form-control" mb-2>
						</div>
						<div class="col-md-6">
						   <label for="" mb-0>Status</label>
					       <!-- <input type="checkbox" name="status"  class="form-control" mb-2> -->
						   <input type="checkbox" name="status">
						</div>
						<div class="col-md-6">
						   <label for="" mb-0>Trending</label> 
					       <input type="checkbox" name="trending">
						</div>
						<!-- <div class="col-md-12">
							<button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
						</div> -->
						<div class="d-flex my-4 justify-content-center">

<input type="reset" class="btn btn-bg-x1 p-2 px-4 mx-2" value="Reset">
<input type="submit" class="btn bg-x1 mx-2"  name="add_product_btn" value="Add Product">
</div>
					</div>
					</form>
				</div>
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