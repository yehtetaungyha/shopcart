<?php
session_start();
include("admin/confs/config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql="SELECT * FROM user WHERE  email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);
$ans = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)==1) {
$_SESSION['id'] = $ans['id'];
$_SESSION['name'] = $ans['name'];
$_SESSION['email'] = $ans['email'];
$_SESSION['auth'] = true;
header("location:myitems.php");
} else {
header("location: form.php?login=failed");
}


?>