<?php 
	include("confs/config.php");

	$id=$_GET['id'];
	$sql="DELETE FROM items WHERE id=$id";
	mysqli_query($conn,$sql);
	header("location:itemlist.php");
?>