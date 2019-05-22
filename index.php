<?php
session_start();
include("admin/confs/config.php");
$cart = 0;
  if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $qty) {
      $cart += $qty;
    }
  }


$total = mysqli_query($conn, "SELECT id FROM items");
$total = mysqli_num_rows ($total);

$start = isset($_GET['start']) ? $_GET['start'] : 0;




  if(isset($_GET['cat'])) {
	$cat_id = $_GET['cat'];
	$items = mysqli_query($conn, "SELECT * FROM items WHERE category_id = $cat_id");

} else {
    $items = mysqli_query($conn, "SELECT * FROM items LIMIT $start, 9"  );
}

	$cats = mysqli_query($conn, "SELECT * FROM categories");
	

	// $ans=mysqli_query($conn,"SELECT COUNT(*) AS total FROM items ");
	// $result = mysqli_fetch_assoc($ans);

	// $cnt = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM items"));
	// echo count($cnt);exit();
 ?>

<!DOCTYPE html>
<html style="background-image: url('images/bg.png')" >
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/jquery.min.js"></script>
</head>
<body>	
	<section>
		<div class="container">
			<br>
			<div class="col-md-12 div_uponreg">
				<ul class="nav nav-pills nav_list pull-right">
					<li><a href="viewcart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart(<?php echo $cart ?>)</a>
						</li>
					<li><a href="form.php"><span class="glyphicon glyphicon-lock"></span>Login</a></li>
					<li><a href="admin/usernew.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
				</ul>
			</div>
		</div>
		<nav class="navbar navbar-default" role="navigation">
				<div class="col-md-3">
					<a class="navbar-brand pull-left" href="index.php" style="margin-bottom: 10px"><img src="images/logo.png"></a>
				</div>
				<div class="col-md-9">
			  	<div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
		    	</div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				   	<ul class="nav navbar-nav navbar-right">
				      <li><a href="index.php">Home</a></li>
				      <li><a href="about.php">About Us</a></li>
				      <li><a href="contact.php">Contact</a></li>
				        
				    </ul>
				</div>
			</div>
		</nav>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				<ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				  <!-- Wrapper for slides -->
				<div class="carousel-inner">
				    <div class="item active">
				      	<img src="images/shop1.jpg" alt="">
					    <div class="carousel-caption">
					        ...
					    </div>
				    </div>
				   	<div class="item ">
				      	<img src="images/shop2.jpg" alt="">
					     <div class="carousel-caption">
					        ...
					    </div>
				    </div>
				</div>
				  <!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<br><br>			
		<div class="container">
			<div class="col-md-3">
				<div class="list-group">
  					<?php while($row = mysqli_fetch_assoc($cats)): ?>
        				<a href="index.php?cat=<?php echo $row['id'] ?>" class="list-group-item">
          				<?php echo $row['catname'] ?>
        				</a>
      				<?php endwhile; ?>
				</div>
				<img src="images/shipping.jpg" class="img-responsive">
				<br><br>
			</div>
			<div class="col-md-9" >
				<?php while ($row=mysqli_fetch_assoc($items)):?>
					<div class="col-sm-4 col-md-4">
						<div class="thumbnail">
							<img src="admin/covers/<?php echo $row['cover']  ?>" class="img-responsive">
							<div class="caption">
								<b><a href="detail.php?id=<?php echo $row['id']  ?>"><?php echo $row['itemname'] ?></a></b>
								<h3><?php echo $row['price'] ?></h3>
								<a href="addtocart.php?id=<?php echo $row['id']  ?>" class="btn btn-default cart_btn" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div style="text-align: center;margin-left:25%;">
		  			<?php
	            		$prev = $start - 9;
	            		if($prev < 0) $prev = 0;
	        		?>
	        		<a class="btn btn-success" href="index.php?start=<?php echo $prev ?>">&laquo; Prev</a>
	       			<?php
	           			 $pages = ceil($total / 9);
	            		for($i=0; $i<$pages; $i++) {
	                	$page = $i * 9;
	                	echo "<a class='btn btn-default'  href='index.php?start=$page'>" . ($i + 1) . "</a> ";
	            		}
	       			?>
	        
	       			<?php
	            	$next = $start +9;
	        		?>
	        		<a class="btn btn-danger" href="index.php?start=<?php echo $next ?>">Next &raquo;</a>
	        	</div>
		</div>
	</section>
	<br><br>
	 <footer class="div_footer">
      <div class="row ">
          <div class="col-md-4">
              <h3  class="footer_h3">Get in touch with us</h3>
              <address class="footer_address" >
              <strong>Shopper company Inc</strong><br>
               Someplace 71745 Earth </address>
              <p class="footer_address">
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
          </div>
          <div class="col-md-4">
            <h3 class="footer_h3">Navigation</h3>
            <ul class="nav_footer">
              <li><a href="index.php">Homepage</a></li>  
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="login.php">Login</a></li>              
            </ul>         
          </div>
          <div class="col-md-4">
            <br>
            <p class="logo"><img src="images/logo.png"  alt=""></p>
            <p class="footer_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
            <br/>
          </div>          
      </div>  
  </footer>
</body>
</html>
