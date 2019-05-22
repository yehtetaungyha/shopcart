
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Order List</title>
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
            <h3 class="header_title">Orders List</h3>
        </div>
    </div>
  </nav>
  <nav class="navbar navbar-default nav_top" role="navigation">
  <div class="container">
    <div class="navbar-header">
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
    <?php
      include("confs/config.php");
      $orders = mysqli_query($conn, "SELECT * FROM orders");
    ?>
    <ul class="orders">
      <?php while($order = mysqli_fetch_assoc($orders)): ?>
        <?php if($order['status']): ?>
          <li class="delivered">
        <?php else: ?>
          <li>
            <?php endif; ?>
              <div class="col-md-6 div_order">
                  <b><?php echo $order['name'] ?></b>
                  <i><?php echo $order['email'] ?></i>
                  <span><?php echo $order['phone'] ?></span>
                  <p>
                    <?php echo $order['address'] ?>
                  </p>

                  <?php if($order['status']): ?>
                    * <a href="orderstatus.php?id=<?php echo $order['id'] ?>&status=0">Undo</a>
                  <?php else: ?>
                    * <a href="orderstatus.php?id=<?php echo $order['id'] ?>&status=1">Mark as Delivered</a>
                  <?php endif; ?>
              </div>
              <div class="col-md-6 div_item">
                  <?php
                    $order_id = $order['id'];
                    $items = mysqli_query($conn, "SELECT order_items.*,items.itemname FROM order_items LEFT JOIN items ON order_items.items_id = items.id WHERE order_items.orders_id = $order_id") or die(mysqli_error());
                    while($item = mysqli_fetch_assoc($items)):
                  ?>
                  <b>
                    <a href="../detail.php?id=<?php echo $item['items_id'] ?>">
                      <?php echo $item['itemname'] ?>
                    </a>
                    (<?php echo $item['qty'] ?>)
                  </b>
                  <?php endwhile; ?>
              </div>
          </li>
      <?php endwhile; ?>
    </ul>
</div>
</body>
</html>

