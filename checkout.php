<?php 
include 'include/header.php';
 ?>
 <style>
 	body{
 		background-image: url("images/order.png");
 		background-size: cover;
 	}
 </style>
 <body>
 <div class="container my-5">
 	<div class="row">
 		<div class="offset-md-2 col-md-8">
 			<h3>Check Out</h3>
 			<div class="table-responsive">
 				<table class="table">
 					<thead>
 						<tr>
 							<th>No.</th>
 							<th>Item name</th>
 							<th>Price</th>
 							<th>Qty</th>
 							<th>Sub Total</th>
 						</tr>
 					</thead>
 					<tbody>
 						
 					</tbody>
 					
 				</table>
 				
 			</div>
 			
 		</div> 
 		<div class="offset-md-2 col-md-8">
 			<div class="form-group">
 				<textarea class="form-control notes" placeholder="Notes"></textarea>
 				<input type="hidden" name="total" class="total">
 			</div>
 		</div>
 		<div class="offset-md-2 col-md-4">
 			<a href="product.php" class="btn btn-success">Continue Shopping</a>
 		</div>
 		<?php 
 			if(isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_id']==1){

 		 ?>
 		<div class="offset-md-2 col-md-4">
 			<button class="btn btn-success buy_now">Buy Now</button> 			
 		</div>
 	<?php }else{ ?>
 		<div class="offset-md-2 col-md-4">
 			<a class="btn btn-success" href="login.php">Login to Buy</a> 			
 		</div>
 	<?php } ?>
 	</div>
 	
 </div>
 </body>
 
 <?php include 'include/footer.php'; ?> 
 
 