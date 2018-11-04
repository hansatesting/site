<?php session_start(); ?>
<?php require_once('connection.php'); ?>


<?php

//first get the post variable on the page
if (isset($_POST['submit'])) {
	$promo_name = (($_POST['promoname']));
	$product_name = (($_POST['productname']));
	$discount = (($_POST['discount']));
	$promotion_content = (($_POST['promocontent']));
	//$image = (($_POST['image']));

	if ($_FILES['image']['error']>0) {
		echo "Error: " . $_FILES["image"]["error"] . "<br>";
	}else {
		$imageType = $_FILES['image']['type'];
		if (substr($imageType,0,5)=="image") {
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$query = "INSERT INTO promo(promo_name, product_name, discount, promotion_content, image )
					  VALUES ('{$promo_name}', '{$product_name}', '{$discount}', '{$promotion_content}', '{$image}')";
					$result = mysqli_query($connection,$query);
			    if($result) {
			    // redirect to promotion.php
						 $_SESSION['message'] = 'Item added Successfully';
						 $host  = $_SERVER['HTTP_HOST'];
						 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
						 $extra = 'addpromotion.php';
						 header("Location: http://$host$uri/$extra");
						 exit;
			    }else{
			       echo "Database query failed.";
			    }
		}else{
			echo "Plase select an Image!";
		}
	}
}

 ?>

<?php mysqli_close($connection); ?>