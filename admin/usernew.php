
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
		      <h3 class="header_title">Register</h3>
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
	</div>
	</nav>
	<div class="col-md-4 div_login" >
		<form role="form" action="useradd.php" method="post" >
			<label for="name">Name</label>
			<input class="form-control input-lg" type="text" placeholder="name"  name="name" >
			<br>
			<label for="email">Email</label>
			<input class="form-control input-lg" type="email" placeholder="email"  name="email" >
			<br>
			<label for="password">Password</label>
			<input class="form-control input-lg" type="password" name="password" >
			<br>
			<label for="address">Address</label>
			<input class="form-control input-lg" type="address" name="address" >
			<br>
			<label for="phone">Phone</label>
			<input class="form-control input-lg" type="text" name="phone" >
			<br>
			<button type="submit" class="btn btn-success">Created</button>
			<br><br>
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


