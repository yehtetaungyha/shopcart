<?php 
	include("confs/config.php");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
$sql = "INSERT INTO user (id,name,email,password,address,phone) VALUES ('$id','$name','$email','$password','$address','$phone')";
mysqli_query($conn, $sql);
header("location: ../index.php");
 ?>
 