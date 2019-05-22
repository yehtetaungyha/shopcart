<?php 

include("confs/config.php");
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
$sql="INSERT INTO items (id,itemname,price,category_id,cover,user_id,detail) VALUES ('','$itemname','$price','$category_id','$cover','$user_id','$detail') ";
mysqli_query($conn,$sql);
header("location:../myitems.php");

 ?>