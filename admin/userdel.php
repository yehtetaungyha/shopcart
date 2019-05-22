<?php 
include("confs/config.php");

$id=$_GET['id'];
$sql="DELETE FROM user WHERE id = $id";
mysqli_query($conn,$sql);

header("location:userlist.php");
?>
