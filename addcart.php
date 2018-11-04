
<?php  require_once ('connection.php');


//first get the post variable on the page
echo "<script>console.log( 'Debug Objects: " . $quantity . "' );</script>";

$quantity = (($_POST['quantity']));



$query = "INSERT INTO menu(quantity) 
		  VALUES ('{$quantity}')";


//echo $query; die;

		$result = mysqli_query($connection,$query);

       if($result) {
           
         //redirecting to menu.php
         header ('Location: menu.php');
          
       }else{
           
          echo "Database query failed.";
       }
        
 ?>
 
 <?php mysqli_close($connection); ?>
				