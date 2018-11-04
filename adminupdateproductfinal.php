<?php 

require_once('connection.php'); 

if(isset($_POST['productid'],$_POST["productname"],$_POST["productamount"])){

$productId = ($_POST["productid"]);
$productName = ($_POST["productname"]);
$productAmount = ($_POST["productamount"]);


// echo $productId;
// echo $productName;
// echo $productAmount;
// echo $productImage;


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'kottulk';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE product SET name='$productName',amount='$productAmount' WHERE productId=$productId";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();




}

header("Location: http://localhost/site/adminupdatedelete.php");
exit;     
?>