<?php
  session_start();
  include("admin/confs/config.php");
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  mysqli_query($conn, "INSERT INTO orders (name, email, phone, address, status) VALUES ('$name','$email','$phone','$address',0)");
  $orders_id = mysqli_insert_id($conn);

  foreach($_SESSION['cart'] as $id => $qty) {
    mysqli_query($conn, "INSERT INTO order_items (orders_id,items_id,qty) VALUES ($orders_id,$id,$qty)");
  }

  unset($_SESSION['cart']);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Order Submitted</title>
</head>
<body>
  <h1>Order Submitted</h1>
  <div >
    Your order has been submitted. We'll deliver the items soon.
    <a href="index.php" class="done">Shopping Home</a>
  </div>
</body>
</html>
