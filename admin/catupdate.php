<?php
include("confs/config.php");


$id=$_POST['id'];
$catname=$_POST['catname'];
$sql="UPDATE categories SET catname='$catname',modified_date=now() WHERE id =$id";

mysqli_query($conn,$sql);

header("location: catlist.php");



?>