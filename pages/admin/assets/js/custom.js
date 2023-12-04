$(document).ready(function () {
	$('.delete_product_btn').click(function (e) { 
		e.preventDefault();
		
		var product_id = $(this).val();

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		  })
		  .then((willDelete) => {
			if (willDelete) {
			  $.ajax({
					method: "POST",
					url: "code.php",
					data: {
						'product_id': product_id,
						'delete_product_btn' : true
					},
					// dataType: "dataType",
					success: function (response) {
						console.log(response);
						if(response == 200)
						{
							 swal("Success!", "Product Deleted Successfully!", "success");
							 $("button").click(function () {
								// location.reload(true);
								window.location = 'http://localhost/pro_magic/pages/admin/Total-pro.php';
							});
						}
						else if(response == 500){
							swal("Error!", "Something Went Wrong!", "error");
						}
				}
			  });
			}
		  });
	});
});

$(document).ready(function () {
	$('.delete_category_btn').click(function (e) { 
		e.preventDefault();
		
		var cat_id = $(this).val();

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		  })
		  .then((willDelete) => {
			if (willDelete) {
			  $.ajax({
					method: "POST",
					url: "code.php",
					data: {
						'cat_id': cat_id,
						'delete_category_btn' : true
					},
					// dataType: "dataType",
					success: function (response) {
						console.log(response);
						if(response == 200)
						{
							 swal("Success!", "Category Deleted Successfully!", "success");
							//  $("#html").load("category.php");
							$("button").click(function () {
								location.reload(true);
								// alert('Reloading Page');
							});							
							}
						else if(response == 500){
							swal("Error!", "Something Went Wrong!", "error");
						}
				}
			  });
			}
		  });
	});
});

var total_image=1;
			function add_more_images(){
				total_image++;
				var html='<div class="col-lg-6" style="margin-top:20px;" id="add_image_box_'+total_image+'"><label for="categories" class=" form-control-label">Image</label><input type="file" name="product_images[]" class="form-control" required><button type="button" class="btn btn-lg btn-danger btn-block" onclick=remove_image("'+total_image+'")><span id="payment-button-amount">Remove</span></button></div>';
				jQuery('#image_box').append(html);
			}
			
			function remove_image(id){
				jQuery('#add_image_box_'+id).remove();
			}