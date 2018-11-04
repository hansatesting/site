<?php require_once('connection.php'); ?>
<?php

    $result = mysqli_query($con, "SELECT * FROM product
    WHERE name LIKE '%{$name}%' OR amount LIKE '%{$amount}%' OR image LIKE '%{$image}%'");

    while ($row = mysqli_fetch_array($result))
    {
        echo $row['name'] . " " . $row['amount']. " " . $row['image'];
        echo "<br>";
    }
    mysqli_close($con);
?>