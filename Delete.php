<?php

$productId = (int)($_POST["productid"]);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kottulk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM product WHERE productId =$productId";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: http://localhost/site/adminupdatedelete.php");
exit;


?>

        
               
