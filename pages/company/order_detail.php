
<?php
	include '../../php/config.php';
	include 'include/header.php';
	?>
<div class="d-flex" id="container">
	<div class="  hero-section-xr ms-auto">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Order Detail</h4>
				</div>
				<div class="card-body" id="products_table"></div>
				<table class="table table-bordered table-striped text-center">
					<thead>
						<tr>
							<th>ID</th>
							<th>Full Name</th>
							<th>Transection Id</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$selectquery =mysqli_query($conn, "SELECT * FROM payments");
							if(mysqli_num_rows($selectquery) > 0){
										
									foreach($selectquery as $item){
									
										?>
											<tr>
												<td><?= $item['payid']; ?></td>
												<td><?= $item['firstname']; ?> <?= $item['lastname']; ?></td>
												<td><?= $item['txnid']; ?></td>
												<td><?= $item['payer_email']; ?></td>

												
												<form action="update_order.php" method="post">
												<td>
												
													<a  class="btn btn-primary" name="update_button"><?= $item['track_order']; ?></a>
													
													<!-- <input class="btn btn-primary" type="button" name="update_button" value=""/> -->
												
													</td>
													</form>
											</tr>
											

										<?php
										
									}
							}else{
								echo 'no records found';
							} 
							
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<?php include 'include/footer.php'; ?>
<script>
    function test(){ 
      var elem = document.getElementById("button2");
      if (elem.value=="Panding") elem.value="Complete";
      else elem.value = "Panding";
      }

</script>