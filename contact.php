
<!DOCTYPE html>
<html style="background-image: url('images/bg.png')">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
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
				      <li><a href="logout.php"><span class="glyphicon glyphicon-lock"></span>Logout</a></li>
				    </ul>
				</div>
			</div>
		</nav>
	</header>
	<img src="images/shop.jpg" class="img-responsive">
	<section>
		<div class="container">
				<h1><b>Contact Us</b></h1>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
							<br>
							<h4><b>ADDITIONAL INFORMATION</b></h4>
							<p><b>PHONE:</b> (123) 456-7890</p>
							<p><b>EMAIL:</b><i class="email_p">email@domainname.com</i></p>
							<p><b>FAX:</b>+04 (123) 456-7890</p>
							</div>
						</div>	
						<div class="row">
							<br><br><br>
							<div class="col-md-6">
							<h4><b>SECONDARY OFFICE</b></h4>
							<p><b>PHONE:</b> (123) 456-7890</p>
							<p><b>EMAIL:</b><i class="email_p">email@domainname.com</i></p>
							<p><b>FAX:</b>+04 (123) 456-7890</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h2><b>Your Message</b></h2>
								<p>Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>	
							</div>
						</div>
						<form role="form" action="submitcontact.php" method="post">
							<div class="row">
								<div class="col-md-12">
									<label class="label_title">Name</label>
									<input type="text" class="form-control" placeholder="Your name" name="name">
								</div>			
							</div>
							<div class="row">
								<br>
								<div class="col-md-6">
									<label class="label_title">Email</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="email address" name="email">
								</div>
								<div class="col-md-6">
									<label class="label_title">Phone Number</label>
									<input type="text" class="form-control" placeholder="Phone number" name="phone">
								</div>	
							</div>
							<div class="row">
								<br>
								<div class="col-md-12">
									<label class="label_title">Subjects</label>
									<input type="text" class="form-control" placeholder="Subject" name="subject">
								</div>	
							</div>
							<div class="row">
								<div class="col-md-12">
									<br>
									<label class="label_title">Messages</label>
									<textarea name="message" class="form-control" rows="6"></textarea>
									<br>
								<input type="submit"  class="btn btn-success" value="send">
								</div>
							</div>
						</form>
					</div>
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