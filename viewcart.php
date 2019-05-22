<?php
  session_start();
  if(!isset($_SESSION['cart'])) {
    header("location: index.php");
    exit();
  }

  include("admin/confs/config.php");
?>
<!DOCTYPE HTML>
<html style="background-image: url('images/bg.png')">
<head>
  <meta charset="UTF-8">
  <title>View Cart</title>
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="public/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="public/bootstrap/js/jquery.min.js"></script>
</head>
<body>
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
    <img src="images/shop.jpg" class="img-responsive">
  <div class="container">
        <h1>Your Cart</h1>
        <div class="col-md-9">
          <a href="index.php" class="btn btn-success ">Continue Shopping</a>
          <a href="clearcart.php" class="btn btn-danger pull-right">Clear Cart</a>
              <table class="table table-striped">
                 <br><br>
                    <thead>
                        <tr class="success table_text">
                            <th style="text-align: center">Image</th>
                            <th style="text-align: center">Item Name</th>
                            <th style="text-align: center">Quantity</th>
                            <th style="text-align: center">Unit Price</th>
                            <th style="text-align: center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $total = 0;
                          foreach($_SESSION['cart'] as $id => $qty):
                          $result = mysqli_query($conn, "SELECT cover, itemname, price FROM items WHERE id=$id");
                          $row = mysqli_fetch_assoc($result);
                          $total += $row['price'] * $qty;
                        ?>
                          <tr class="table_text" >
                              <td style="text-align: center">
                                <img src="admin/covers/<?php echo $row['cover'] ?>" alt="">
                              </td>
                              <td style="text-align: center"><?php echo $row['itemname'] ?></td>
                              <td >
                                <input style="text-align: center" type="text" class="form-control" value="<?php echo $qty ?>" disabled></td>
                              <td style="text-align: center"><?php echo $row['price'] ?></td>
                              <td style="text-align: center"><?php echo $row['price'] * $qty ?>ks</td> 
                          </tr>
                        <?php endforeach; ?>   
                          <tr class="table_text">
                              <td colspan="4" align="right"><b>Total:</b></td>
                              <td><?php echo $total; ?>ks</td>
                          </tr>
                    </tbody>
                </table>
          </div>
          <div class="col-md-3" >
            <form action="submitorder.php" method="post" >
                <label for="name">Name</label>
                <input class="form-control input-lg" type="text" placeholder="name"  name="name" >
                <br>
                <label for="email">Email</label>
                <input class="form-control input-lg" type="email" placeholder="email"  name="email" >
                <br>
                <label for="phone">Phone</label>
                <input class="form-control input-lg" type="text" name="phone" >
                <br>
                <label for="address">Address</label>
                <textarea class="form-control input-lg" name="address"></textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit Order">
                <br><br>
            </form>
        </div>
    </div>
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
  <script type="text/javascript" src="public/js/jquery.js"></script>
  <script type="text/javascript" src="public/js/jquery.validate.min.js"></script>
  <script>
    $(function() {
      $("form").validate({
        rules: {
          "name": "required",
          "email": {
            required: true,
            email: true
          },
          "phone": "required",
          "address": "required"
        },
        messages: {
          "name": "Please provide your name",
          "email": {
            required: "Please provide your email",
            email: "Email should be a valid email address"
          },
          "phone": "Please provide your phone no.",
          "address": "Please provide your address"
        }
      });
    });
  </script>
</body>
</html>
