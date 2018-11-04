<?php  require_once ('connection.php'); ?>

<?php

$sql = "SELECT id, promo_name, product_name, discount, promotion_content, image FROM promo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    <div class="jumbotron promo-jumbo">
                            <div class="row">
                            <div class="col-lg-12">
                            echo .$row["promo_name"]
                            </div>
                            <div class="col-lg-6">
                            <p class="abt-p">
                            echo .$row["product_name"]
                        </div>
                    <div class="col-lg-6">
                echo .$row["image"]
            </div>
        </div>
    </div>
   
   
    }
} else {
    echo "0 results";
}

$conn->close();

?> 

