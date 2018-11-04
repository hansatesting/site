<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/site/home.php");
    exit;   
}

?>
<?php 

require_once('connection.php'); 

if (isset($_POST['submit'])) {

  echo $promoname = ($_POST["promoname"]);
  echo  $productName = ($_POST["productname"]);
  echo   $discountAmount = ($_POST["discount"]);
  echo   $promoContent = ($_POST["promocontent"]);
    //$promoImage = ($_POST["image"]);
    echo   $productId = (int)($_POST["promoid"]);

    $query = "UPDATE promo SET promo_name='$promoname',product_name='$productName',discount='$discountAmount',promotion_content='$promoContent' WHERE id=$productId";
					$result = mysqli_query($connection,$query);
			    if($result) {
            // echo "Done111111111111111.";
                    header("Location: http://localhost/site/adminupdatedeletepromo.php");
                    exit;
						
			    }else{
			       echo "Database query failed.";
			    }

  //   if ($_FILES['image']['error']>0) {
	// 	echo "Error: " . $_FILES["image"]["error"] . "<br>";
  //   }else {
	// 	$imageType = $_FILES['image']['type'];
	// 	if (substr($imageType,0,5)=="image") {
  //           $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            

			
	// 	}else{
	// 		echo "Plase select an Image!";
	// 	}
	// }

    echo $promoname; echo "<br/>";
    echo $productName; echo "<br/>";
    echo $discountAmount; echo "<br/>";
    echo $promoContent; echo "<br/>";
    //echo $promoImage; echo "<br/>";
    echo $productId; echo "<br/>";

    

  
    
}

?>