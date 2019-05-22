<?php 
	session_start();
	$auth=(isset($_SESSION['auth']));
	if ($auth) {
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
		      <h3 class="header_title">Items Edit</h3>
		    </div>
		</div>
	</nav>
	<nav class="navbar navbar-default nav_top" role="navigation">
		<div class="container">
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    </button>
		       	<a class="navbar-brand" href="#"><b>SHOP</b></a>
		    </div>
		</div>
	</nav>
	<div class="container">
	 	<form role="form" action="itemupdate.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
			<div class="col-md-5 ">
				<label for="itemname">Items Name</label>
				<input type="text" class="form-control input-lg" name="itemname" value="<?php echo $row['itemname'] ?>">
				<br>
				<label for="category_id">Categories</label>
				<select name="category_id" class="form-control input-lg">
					<option value="">Choose</option>
					<?php
					$category = mysqli_query($conn, "SELECT * FROM categories");
			      	while($cat = mysqli_fetch_assoc($category)):
					?>
					<option value="<?php echo $cat['id'] ?>"
			          	<?php if($cat['id'] == $row['category_id']) echo "selected" ?> >
			          	<?php echo $cat['catname'] ?>
			    	</option>
					<?php endwhile; ?>
				</select>
				<label for="price">price</label>
				<input type="text" class="form-control input-lg" name="price" value="<?php echo $row['price'] ?>">
				<br>
				<label for="cover">Cover</label>
				<input class="form-control input-lg" type="file" name="cover" >
				<br>
				<label for="detail">Detail</label>
				<textarea type="text" class="form-control input-lg" name="detail"><?php echo $row['detail'] ?></textarea>
				<br>
				<input type="submit" name="list">
			</div>
		</form>
		<script>
			$(function() {
			$("form").validate({
			rules: {
			"itemname": "required",
			"category_id":"required",
			"cover":"required",
			"user_id": "required",
			"price": "required",
			"detail":"required",
			},
			messages: {
			"itemname":"Please provide name",
			"cover":"Please choose a coverphoto",
			"category_id": "Please choose a category",
			"user_id": "Please choose a userdetail",
			"price": "Please provide  price",
			"detail":"Please fill detail",
			}
			});
				});
		</script>
	</div>
</body>
</html>
<?php 
}else{
echo "<script> alert('Oops you are not admin!'); window.location.href='index.php' </script>";
} ?>
