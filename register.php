<?php 
include 'include/header.php';
if(!isset($_SESSION['loginuser'])){

?> 
<style>
	body{
		background-image: url("images/reg.gif");
		background-size: cover;
	}
</style>
<body>
<div class="container-fluid mt-1">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<form method="POST" action="addUsers.php" enctype="multipart/form-data">
				<div class="form-group">
					<label class="text-white">Name: </label>
					<input type="text" name="reg_name" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-white">Profile: </label>
					<input type="file" name="reg_profile" class="form-control-file text-white">
				</div>
				<div class="form-group">
					<label class="text-white">Email: </label>
					<input type="email" name="reg_email" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-white">Password: </label>
					<input type="Password" name="reg_password" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-white">Phone: </label>
					<input type="text" name="reg_phone" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-white">Address: </label>
					<textarea class="form-control" name="reg_address">
					</textarea>
				</div>
				<input type="submit" class="btn btn-outline-dark float-right mb-3 text-white" value="Register">
			</form>
		</div>
	</div>
</div>
</body>
<?php  
}else{
 	header("location:index.php");
 }


?>

