
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
		      <h2 class="header_title">Login</h2>
		    </div>
		  </div>
	</nav>
	<div class="col-md-5 div_login"  >
		<form role="form" action="login.php" method="post">
			<input class="form-control input-lg" type="hidden"   name="id" value="<?php $_SESSION['id']  ?>" >
			<br>
			<br>
			<label for="email">Email</label>
			<input class="form-control input-lg" type="email" placeholder="email"  name="email" >
			<br>
			<label for="password">Password</label>
			<input class="form-control input-lg" type="password" placeholder="password"  name="password" >
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
			<br>
			<br>
		</form>
	</div>
</div>
</body>
</html>