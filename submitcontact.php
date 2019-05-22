<?php
		include("admin/confs/config.php");
		$name = $_POST['name'];
		$email = $_POST['email']; 
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message=$_POST['message'];
		$sql="INSERT INTO contact (name, email, phone, subject, message) VALUES ('$name','$email','$phone','$subject','$message')";
		mysqli_query($conn, $sql);
		header("location:contact.php");
?>