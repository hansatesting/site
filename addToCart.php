<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php
  // if (isset($_POST['submit'])) {
    $qty = $_POST['qty'];
    $total = $_POST['total'];
    $productId = $_POST['selectedCarb'];
    //$userId=3;
    if (isset($_SESSION['id'])) {
      $userId = $_SESSION['id'];
      $address=$_SESSION['address'];
    }
    $query1 = "SELECT * FROM userr WHERE id='{$userId}'";
    $result1 = mysqli_query($connection, $query1);
    $user = mysqli_fetch_array($result1);
   
  
    if ($qty == 0) {
      $qty = 1;
    } else if ($qty>1){
      $total*=$qty;
    }
    $date = date('Y/m/d H:i:s');

    $orderQuery = "SELECT orderId FROM orderr ORDER BY orderId DESC LIMIT 1";
    $orderResults = mysqli_query($connection, $orderQuery);
    if ($orderResults) {
      $lastOrderId = mysqli_fetch_array($orderResults)['orderId'];
      $orderId =$lastOrderId+1;
    }

    $query3 = "INSERT INTO orderr(orderId,date, subTotal, user_userId)
                VALUES ('{$orderId}','{$date}','{$total}','{$userId}')";
    $result3 = mysqli_query($connection, $query3);
    if ($result3) {
      $query4 = "INSERT INTO orderdetail(quantity, amount,order_orderId,order_user_userId,order_address, product_productId)
                  VALUES ('{$qty}','{$total}','{$orderId}','{$userId}','{$address}','{$productId}')";
      $result4 = mysqli_query($connection, $query4);
      if ($result4) {
        $_SESSION['message'] = 'Item added Successfully';
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'Customize.php';
        header("Location: http://$host$uri/$extra");
        exit;
      }else{
        echo "error ocurred!";
      }
    }else {
      echo "error";
    }
  // }
?>
