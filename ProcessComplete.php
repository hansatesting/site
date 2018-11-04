<?php 
session_start();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kottulk";

$order_orderId = (($_POST['orderDetailId']));
$order_user_userId = ($_SESSION['id']);
$statuss = (($_POST['statuss']));

echo $order_orderId;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO deliveryy (statuss, order_orderId, order_user_userId)
VALUES ('$statuss', '$order_orderId', '$order_user_userId')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $sql = "DELETE FROM orderdetail WHERE orderDetailId=$order_orderId";
    if($conn->query($sql) === TRUE){
        header("Location:  http://localhost/site/processorder.php");
        exit;
        echo "Deleted";
    }else{

    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();




?>

