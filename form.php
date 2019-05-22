
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-md-5 div_login"  >
		<? if( isset($_GET['login']) and $_GET['login'] == "failed"): ?>
  		<div class="error">Login failed! User email or password incorrect.</div>
		<? endif; ?>
		<form role="form" action="login.php" method="post">
			<input class="form-control input-lg" type="hidden"   name="id" value="<?php $_SESSION['id']  ?>" >
			<br>
			<br>
			<label for="email">Email</label>
			<input class="form-control input-lg" type="email" placeholder="email"  name="email" >
			<br>
			<label for="password">Password</label>
			<input class="form-control input-lg" type="password" placeholder="password"  name="password"  >
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-lg btn-block" >Login</button>
			<br>
			<br>
		</form>
	</div>
</body>
</html>