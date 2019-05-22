<?php
	session_start();
	$auth=(isset($_SESSION['auth']));
	if ($auth) {
include("confs/config.php");
 $result = mysqli_query( $conn,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src=" ../public/js/jquery.js"></script>
	<script type="text/javascript" src=" ../public/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid div_nav">
		    <div class="navbar-header">
		      	<h3 class="header_title">User List</h3>
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
		<div class="row">
			<a href="usernew.php" class="btn btn-success add_btn">User Created</a>
			<table class="table table-bordered tbl_list">
			    <thead>
				    <tr class="warning">
					    <th style="text-align: center">ID</th>
					    <th style="text-align: center">User Name</th>
					    <th style="text-align: center"> Email</th>
					    <th style="text-align: center">Password</th>
					    <th style="text-align: center">Address</th>
					    <th style="text-align: center">phone</th>
					    <th style="text-align: center">Option</th>
				    </tr>
				</thead>
				<tbody>
					<tr>
						<?php while($row = mysqli_fetch_assoc($result)): ?>
						<td style="text-align: center"><?php echo $row['id'] ?></td>
						<td style="text-align: center"><?php echo $row['name'] ?></td>
						<td style="text-align: center"><?php echo $row['email'] ?></td>
						<td style="text-align: center"><?php echo $row['password'] ?></td>
						<td style="text-align: center"><?php echo $row['address'] ?></td>
						<td style="text-align: center"><?php echo $row['phone'] ?></td>
						<td style="text-align: center">
						<a class="btn btn-warning" href="useredit.php?id=<?php echo $row ['id'] ?>" role="button">Edit</a>
						<a class="btn btn-danger" href="userdel.php?id=<?php echo $row ['id'] ?>" role="button">Delete</a>
						</td>
					</tr>
					<?php endwhile; ?>
				</tbody>
		  	</table>
		</div>
  	</div>
</body>
</html>
<?php 
}else{
echo "<script> alert('Oops you are not admin!'); window.location.href='index.php' </script>";
} ?>


