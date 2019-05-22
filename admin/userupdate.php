<?php

include("confs/config.php");

	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password = $_POST['password'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];

$sql="UPDATE user SET name='$name',email='$email',password='$password',address='$address',phone='$phone' WHERE id =$id";

mysqli_query($conn,$sql);

header("location: userlist.php");



?>