<?php
	session_start();
	$auth=(isset($_SESSION['auth']));
	if ($auth) {
	include("confs/config.php");
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src=" ../public/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid div_nav">
		    <div class="navbar-header">
		      	<h3 class="header_title">Items New</h3>
		    </div>
		</div>
	</nav>
	<nav class="navbar navbar-default nav_top" role="navigation">
	<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>SHOP</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
</div>
	</nav>
	<div class="container">
		<form role="form" action="itemadd.php" method="post" enctype="multipart/form-data">
			<div class="col-md-5 div_login">
				<input type="hidden" name="user_id" value="<?php echo $id;  ?>">
				<label for="itemname">Items Name</label>
				<input class="form-control input-lg" type="text" name="itemname" >
				<br>
				<label for="category_id">Categories Items</label>
				<select name="category_id" class="form-control input-lg">
					<option value="">Choose</option>
					<?php
					$category=mysqli_query($conn,"SELECT * FROM categories");
					while ($row =mysqli_fetch_assoc($category)):
					?>
				  <option value="<?php echo $row['id']  ?>">
				  	<?php echo $row['catname']  ?>
				  </option>
					<?php endwhile; ?>
				</select>
				<br>
				<label for="price">Price</label>
				<input class="form-control input-lg" type="text" name="price" >
				<br>
				<label for="cover">Cover</label>
				<input class="form-control input-lg" type="file" name="cover" >
				<br>
				<label for="detail">Detail</label>
				<textarea class="form-control input-lg" type="text" name="detail"></textarea> 
				<br>
				<br>
				<input type="submit"  class="btn btn-success" value="Add">
				<a href="../myitems.php" class="btn btn-primary pull-right">Back</a>
				<br><br>
			</div>
		</form>
		<script type="text/javascript" src=" ../public/js/jquery.js"></script>
		<script type="text/javascript" src="../public/js/jquery.validate.min.js"></script>
		<script>
			$(function() {
			$("form").validate({
			rules: {
			"itemname": "required",
			"category_id": "required",
			"price": "required",
			"cover":"required",
			"detail":"required",
			},
			messages: {
			"itemname": "Please provide name",
			"category_id": "Please choose a category",
			"price": "Please provide  price",
			"cover":"Please choose a coverphoto",
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

