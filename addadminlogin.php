<?php require_once('connection.php'); ?>


<?php

//first get the post variable on the page

$first_name = (($_POST['first']));
$last_name = (($_POST['last']));
$email = (($_POST['email']));
$password = (($_POST['password']));

echo $first_name;



$query = "INSERT INTO adminlogin(first_name, last_name, email, password ) 
		  VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$password}')";


//echo $query; die;

		$result = mysqli_query($connection,$query);

       if($result) {
           
          echo "Item added Successfully";
          
       }else{
           
          echo "Database query failed.";
       }
        
 ?>
 
<?php mysqli_close($connection); ?>