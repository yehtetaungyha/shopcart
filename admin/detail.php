<?php 
	include("confs/config.php");
	$id =$_GET['id'];
	$result=mysqli_query($conn,"SELECT * FROM items WHERE id=$id");
	$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src=" ../public/js/jquery.js"></script>
	<script type="text/javascript" src="../public/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src=" ../public/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid div_nav">
		    <div class="navbar-header">
		      <h3 class="header_title">Items detail</h3>
		    </div>
		</div>
	</nav>
	<nav class="navbar navbar-default nav_top" role="navigation">
		<div class="container">
		    <div class="navbar-header">
		       	<a class="navbar-brand" href="#"><b>SHOP</b></a>
		    </div>
		</div>
	</nav>
	<div class="container">
			<label for="detail">Detail</label>
			<textarea type="text" class="form-control input-lg" name="detail" disabled><?php echo $row['detail'] ?></textarea>
			<br>
	</div>
</body>
</html>