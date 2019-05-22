<?php

	include("confs/config.php");
	$catname= $_POST['catname'];
	mysqli_query($conn,"INSERT INTO categories (catname, created_date,modified_date) VALUES ('$catname',now(),now())");
	header("location:catlist.php");
	?>
	