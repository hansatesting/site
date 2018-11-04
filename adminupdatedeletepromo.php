<?php require_once('connection.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <link rel="stylesheet" href="./main/bootstrap.min.css">

    <title>KOTTU.LK</title>
</head>

<body>

    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <h3 class="cart-head">DELETE / UPDATE PROMOTIONS</h3>
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container con-addpdct">
                <div class="col-lg-12">
                <?php
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

                            $result = mysqli_query($conn,"SELECT * FROM promo");


                            echo '<table class="table table-hover table-dark">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Promotion ID</th>';
                            echo '<th>Promotion Name</th>';
                            echo '<th>Product</th>';
                            echo '<th>Discount Percentage</th>';
                            echo '<th>Promotion Content</th>';
                            echo '<th>Image</th>';
                            echo '<th>Edit</th>';
                            echo '<th>Delete</th>';
                            echo '</tr>';
                            echo '</thead>';

                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                            echo "<td >" . $row['id'] . "</td>";
                            echo "<td >" . $row['promo_name'] . "</td>";
                            echo "<td >" . $row['product_name'] . "</td>";
                            echo "<td>" . $row['discount'] . "</td>";
                            echo "<td >" . $row['promotion_content'] . "</td>";
                            echo "<td >" .'<img src="data:image/jpg;base64,'.base64_encode($row['image']).'" alt="" class="img-thumbnail promo-img"/>'. "</td>";
                            echo "<td>

                            <form action='adminupdatepromofinal.php' method='post'>
                            <input type='hidden' id='productid' name='productid' value=".$row['id'].">
                            <input type='hidden' id='promo_name' name='promo_name' value=".$row['promo_name'].">
                            <input type='hidden' id='product_name' name='product_name' value=".$row['product_name'].">
                            <input type='hidden' id='discount' name='discount' value=".$row['discount'].">
                            <input type='hidden' id='promotion_content' name='promotion_content' value=".$row['promotion_content'].">
                            <input class='btn btn-success' type='submit' value='EDIT'/>
                            </form>
                            </td>";
                            echo "<td>

                            <form action='admindeletepromofinal.php' method='post'>
                            <input type='hidden' id='productid' name='productid' value=".$row['id'].">
                            <input class='btn btn-primary' type='submit' value='DELETE'/>
                            </form>
                            </td>";
                            echo "</tr>";


                            }
                            echo "</table>";

                            mysqli_close($conn);
                            ?>
                    <div class="form-group">
                                <a href="./adminpanel.php" type="button" class="btn btn-success add-pdct-btn">Back
                                    to Admin Panel</a>
                            </div>
                </div>
                <br>
            </div>
            </form>
            <div class="row img-row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/Kottu Roti 1.jpg" alt="Kottu1" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/kottu2.jpg" alt="Kottu2" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/kottu3.jpg" alt="Kottu3" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/kottu4.jpg" alt="Kottu4" class="img-thumbnail">
                </div>
            </div>
        </div>
    </section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./Images/cara-1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">YOU MAKE IT THE WAY YOU WANT</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/cara-2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">YOU MAKE IT THE WAY YOU WANT</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/cara-3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">YOU MAKE IT THE WAY YOU WANT</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




















































<script src="main/bootstrap.min.js"></script>
</body>

</html>
