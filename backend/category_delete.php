<?php 
include 'dbconnect.php';
$id=$_GET['id'];
$sql="DELETE FROM categories WHERE id=:id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
if($stmt->rowCount())
{
	header("location:categories_list.php");
}
else
{
	echo "ERROR!!";
}

?>

