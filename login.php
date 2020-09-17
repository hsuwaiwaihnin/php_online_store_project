<?php 
include 'include/header.php';
if(!isset($_SESSION['loginuser'])){
 ?>
<style>
	body{
		background-image: url("images/loginbg.gif");
	}
</style>

<body>
 <div class="container-fluid mt-5">
 	<div class="row">
 		<div class="offset-md-5 col-md-4">
 			<img src="images/loginuser.png" style="width: 150px; height: 150px;">
 		</div>
 		<div class="offset-md-3 col-md-6 mt-3">
 			<form method="POST" action="signin.php">
 				<div class="form-group">
 					<input type="email" name="email" class="form-control" placeholder="Your Email">
 				</div>
 				<div class="form-group">
 					<input type="password" name="password" class="form-control" placeholder="Your Password">
 				</div>
 				<input type="submit" value="Login" class="btn btn-outline-success mb-3 text-dark">
 			</form>
 			
 		</div>
 		
 	</div>
 	
 </div>
 </body>


 <?php
}
 else{
 	header("location:index.php");
 }

  ?>

 