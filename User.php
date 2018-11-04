
<?php  require_once ('connection.php'); ?>


<?php

//first get the post variable on the page

$email = (($_POST['email']));
$password = (($_POST['password']));
$first_name = (($_POST['first']));
$last_name = (($_POST['last']));
$mobile = (($_POST['mobile']));
$address = (($_POST['address']));

$hashed_password = `sha1`($password);

$query = "INSERT INTO user(email, password, firstName, lastName, mobile, address ) 
		  VALUES ('{$email}', '{$hashed_password}', '{$first_name}', '{$last_name}', '{$mobile}', '{$address}')";


//echo $query; die;

		$result = mysqli_query($connection,$query);

       if($result) {
           
          echo "User Created Successfully";
          
       }else{
           
          echo "Database query failed.";
       }
        
 ?>
 
 <?php mysqli_close($connection); ?>
				