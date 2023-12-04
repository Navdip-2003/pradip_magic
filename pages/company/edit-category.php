
<?php
include '../../php/config.php';
	include 'include/header.php';
	?>
<div class="d-flex">
	<div class="  hero-section-xr ms-auto">
	<div class="row">
		<div class="col-md-12">
			<?php
				if(isset($_GET['id'])){
						$id  = $_GET['id'];
						$selectquery = mysqli_query($conn, "SELECT * FROM category WHERE cat_id=$id");
						if(mysqli_num_rows($selectquery) > 0){
						$data = mysqli_fetch_array($selectquery);
						
					?>
			<div class="card">
				<div class="card-header">
					<h4>Edit Category</h4>
				</div>
				<div class="card-body">
					<form action="code.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<label for="">Name</label>
								<input type="hidden" name="category_id" value="<?= $data['cat_id']; ?>">
								<input type="text" name="name" value="<?= $data['cat_name']; ?>" placeholder="Enter Category Name" class="form-control">
							</div>
							
							<div class="col-md-12">
								<label for="">Description</label>
								<textarea rows="3" type="text" name="description"  placeholder="Enter Description"
									class="form-control"><?= $data['description']; ?></textarea>
							</div>
							<div class="col-md-12 mt-3">
								<label for="">Upload Image</label>
								<input type="file" name="image"><br>
								<label for="">Current Image</label>
								<input type="hidden" name="old_image" value="<?= $data['image']; ?>">
								<img src="uploads/<?= $data['image'];?>" height="50px" width="50px" alt="<?= $data['cat_name']; ?>" srcset="">
							</div>
							
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
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
<?php include 'include/footer.php'; ?>