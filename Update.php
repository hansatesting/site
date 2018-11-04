<?php require_once('connection.php'); ?>
<?php
  $query = mysql_query ("SELECT * FROM product WHERE username = 'root' ORDER BY id DESC");

  while ($row = mysql_fetch_array ($query)) 
  {
     
$name = $row['name'];
$amount = $row['amount']; 
$image = $row['image'];
  }
    ?>