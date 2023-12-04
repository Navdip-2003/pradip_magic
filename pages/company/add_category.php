<?php
	include 'include/header.php';
	?>
<div class="d-flex">
	<div class="  hero-section-xr ms-auto">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Add Category</h4>
				</div>
				<div class="card-body">
					<form action="code.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
						   <label for="" mb-0>Name</label>
					       <input type="text" name="name" placeholder="Enter Category Name" class="form-control" mb-2 required>
						</div>
						<!-- <div class="col-md-6">
						   <label for="" mb-0>Slug</label>
					       <input type="text" name="slug" placeholder="Enter Slug" class="form-control" mb-2 required>
						</div> -->
						<div class="col-md-12">
						   <label for="" mb-0>Description</label>
					       <textarea rows="3" type="text" name="description" placeholder="Enter Description" class="form-control" mb-2 required></textarea>							
						</div>
						<div class="col-md-12">
						   <label for="" mb-0>Upload Image</label>
					       <input type="file" name="image" class="form-control" mb-2 required>
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
	</div>
</div>
</div>
<?php include 'include/footer.php'; ?>