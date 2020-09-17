<?php 
session_start();
include 'backend/dbconnect.php';

$email=$_POST['email'];
$password=$_POST['password'];
//echo "$email and $password";

$sql="SELECT * FROM users WHERE email=:email AND password=:password";

$stmt=$pdo->prepare($sql);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':password',$password);
$stmt->execute();
$data=$stmt->fetch(PDO::FETCH_ASSOC);

if($data){
	$_SESSION['loginuser']=$data;
	//echo $_SESSION['loginuser']['role_id'];
	$role=$_SESSION['loginuser']['role_id'];
	//echo $role;
	if($_SESSION['loginuser']){
		if($role==1){
			//echo "Role ID:".$role;
			header("location:index.php");
		}else{
			//echo "Role ID:".$role;
			header("location:backend/index.php");
		}
	}
}else{
	header("location:login.php");
}

?>
