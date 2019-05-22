<?php
	session_start();
	$auth=(isset($_SESSION['auth']));
	if ($auth) {
	include("confs/config.php");
	$id=$_GET['id'];
	$result=mysqli_query($conn,"SELECT * FROM user WHERE id=$id");
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
	</style>
	
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid div_nav">
		    <div class="navbar-header">
		      <h3 class="header_title">User Edit</h3>
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
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="userlist.php">User</a></li>
      	<li><a href="itemlist.php">Items</a></li>
        <li><a href="catlist.php">Category</a></li>
        <li><a href="contactlist.php">Contact</a></li>
        <li><a href="orders.php">Order</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</div>
	</nav>
	<div class="container">
		<form action="userupdate.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
			<br>
			<div class="col-md-4">
			<label for="name">User Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
			</div>
			<div class="col-md-4">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
			</div>
			<div class="col-md-4">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>">
			</div>
			<div class="col-md-4">
			<label for="address">Address</label>
			<input type="address" class="form-control" name="address" value="<?php echo $row['address'] ?>">
			</div>
			<div class="col-md-4">
			<label for="phone">Phone</label>
			<input type="phone" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
			</div>
			<div class="col-md-4 add_btn">
			<input type="submit" class="btn btn-success" value="Add">
			</div>
		</form>
		<script>
			$(function() {
			$("form").validate({
			rules: {
			"name": "required",
			"email": "required",
			"password":"required",
			"address": "required",
			"phone": "required",
			},
			messages: {
			"name": "Please provide name",
			"email": "Please fill mail",
			"password": "Please fill Password",
			"address": "Please fill address",
			"phone":"Please fill  your phone no:",
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
