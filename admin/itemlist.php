<?php
	session_start();
	$auth=(isset($_SESSION['auth']));
	if ($auth) {
	include("confs/config.php");
 	$result = mysqli_query( $conn,"SELECT items.*, categories.catname,user.name,user.email,user.address,user.phone FROM items 
 	LEFT JOIN categories ON  items.category_id=categories.id
 	LEFT JOIN user ON  items.user_id=user.id");
?>
<!DOCTYPE html>
<html>
<head>
	<title>country</title>
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
		      	<h3 class="header_title">Items List</h3>
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
      	<li><a href="userlist.php">Items</a></li>
      	<li><a href="catlist.php">Category</a></li>
        <li><a href="contactlist.php">Contact</a></li>
        <li><a href="orders.php">Order</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</div>
	</nav>
	<div class="container">
		<a class="btn btn-success" href="itemnew.php" role="button">Add</a>
			<br><br>
			<div class="row">
	  			<table class="table table-bordered">
			    	<thead>
				    		<tr class="active">
					          	<th style="text-align: center">ID</th>
					        	<th style="text-align: center">Items Name</th>
					        	<th style="text-align: center">price</th>
					        	<th style="text-align: center">Category</th>
					        	<th style="text-align: center">User Detail</th>
					          	<th style="text-align: center">cover</th>
					          	<th style="text-align: center">Detail</th>
					        	<th style="text-align: center">Option</th>
				        	</tr>
					</thead>
					<tbody>
						<?php while($row = mysqli_fetch_assoc($result)): ?>
						<tr>
							
							<td style="text-align: center"><?php echo $row['id'] ?></td>
							<td style="text-align: center"><?php echo $row['itemname'] ?></td>
							<td style="text-align: center"><?php echo $row['price'] ?></td>
							<td style="text-align: center"><?php echo $row['catname'] ?></td>
							<td style="text-align: center">
								<?php echo $row['name'] ?><br>
								<?php echo $row['email'] ?><br>
								<?php echo $row['phone'] ?><br>
								<?php echo $row['address'] ?>
							</td>
							<td style="text-align: center">
							<img src="covers/<?php echo $row['cover'] ?>" alt="" height="90">
							</td>
							<td style="text-align: center">
								<a class="btn btn-warning" href="detail.php?id=<?php echo $row ['id'] ?>" role="button">Detail</a>
								
							</td>
							<td style="text-align: center">
							<a class="btn btn-warning" href="itemedit.php?id=<?php echo $row ['id'] ?>" role="button">edit</a>
							<a class="btn btn-danger" href="itemdel.php?id=<?php echo $row ['id'] ?>" role="button">del</a>
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
