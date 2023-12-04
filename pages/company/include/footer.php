<!-- </main> -->
<footer id="footer">
<div class="header d-flex p-4">
        <p class="m-auto text-light">Welcome the megicpin family. Grow your business with us.</p>
    </div>
</footer>
   
	 <!-- MDB -->
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
	crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
	integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
	integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
	crossorigin="anonymous"></script>

<script src="assets/js/margin.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="assets/js/sales.js"></script> -->
<script src="assets/js/sales-data.js"></script>

<script src="assets/js/jquery-3.6.3.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/perfect-scrollbar.min.js"></script>
  <script src="assets/js/smooth-scrollbar.min.js"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="assets/js/custom.js"></script>
  <script src="assets/js/tables.js"></script>
  <script src="assets/js/single_p.js"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="assets/js/textarea.js"></script>
  
  <!-- alertifyjs -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  <?php if(isset($_SESSION['msg'])) 
  {
     ?>
          alertify.set('notifier','position', 'top-right');
        alertify.success('<?php echo $_SESSION['msg']; ?>');
      <?php
           unset($_SESSION['msg']);
 } ?>
</script>
<script type="text/javascript">
        $(document).ready(function () {
            $("#search").on("keyup",function(){
                var search_term = $(this).val();

                $.ajex({
                    url:"search_product_code.php",
                    type:"POST",
                    data:{search:search_term},
                    success: function(data){
                        console.log(data);
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>
 

  </body>

</html>