<?php 
session_start();

if(isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_id']==2){
	include 'include/header.php';
 ?>

 <div class="container-fluid">
 	<h1 class="h3 mb-4 text-gray-800 text-center">Category Create</h1>
 	<div class="row">
 		<div class="offset-md-2 col-md-8">
 			<form method="POST" action="addCategories.php" enctype="multipart/form-data">
 				<div class="form-group">
 					<label>Category Name</label>
 					<input type="text" name="category_name" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Category Photo</label>
 					<input type="file" name="category_photo" class="form-control-file">
 				</div>
 				<input type="submit" class="btn btn-outline-primary float-right mb-3" value="Save">
 			</form>
 			
 		</div>
 		
 	</div>
 	
 </div>
 <?php 
}else{
    header("location:../index.php");
  }
  ?>