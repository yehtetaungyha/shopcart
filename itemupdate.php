<?php

include("admin/confs/config.php");

$id=$_POST['id'];
$itemname=$_POST['itemname'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];
if($cover) {
move_uploaded_file($tmp, "covers/$cover");
} 
$sql="UPDATE items SET itemname='$itemname',price='$price',cover='$cover',detail='$detail' WHERE id =$id";


mysqli_query($conn,$sql);
header("location:myitems.php");
?>