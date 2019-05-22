<?php

include("confs/config.php");

$id=$_POST['id'];
$itemname=$_POST['itemname'];
$price=$_POST['price'];
$category_id=$_POST['category_id'];
$user_id=$_POST['user_id'];
$detail=$_POST['detail'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];
if($cover) {
move_uploaded_file($tmp, "covers/$cover");
} 
$sql="UPDATE items SET itemname='$itemname',price='$price',category_id='$category_id',cover='$cover',user_id='$user_id',detail='$detail' WHERE id =$id";


mysqli_query($conn,$sql);
header("location:itemlist.php");
?>