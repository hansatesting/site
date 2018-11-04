<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/site/home.php");
    exit;   
}

?>


<?php require_once('connection.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main/style.css">
    <link rel="stylesheet" href="./main/bootstrap.min.css">
    <title>KOTTU.LK</title>
</head>

<body>

    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <h3 class="cart-head">Update Or Delete Products</h3>
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
                            
                            $result = mysqli_query($conn,"SELECT * FROM product");
                            
                            echo '<table class="table table-hover table-dark">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Product ID</th>';
                            echo '<th>Name</th>';
                            echo '<th>Price</th>';
                            echo '<th>Image</th>';
                            echo '<th>Edit</th>';
                            echo '<th>Delete</th>';
                            echo '</tr>';
                            echo '</thead>';
                            
                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                            echo "<td>" . $row['productId'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['amount'] . "</td>";
                            echo "<td >" .'<img src="data:image/jpg;base64,'.base64_encode($row['image']).'" alt="" class="img-thumbnail promo-img"/>'. "</td>";
                            echo "<td>

                            <form action='adminupdateproduct.php' method='post'>
                            <input type='hidden' id='productid' name='productid' value=".$row['productId'].">
                            <input type='hidden' id='productname' name='productname' value=".$row['name'].">
                            <input type='hidden' id='productamount' name='productamount' value=".$row['amount'].">
                            
                            <input class='btn btn-primary' type='submit' value='Edit'/>
                            </form>
                            
                            </td>";
                            echo "";
                            echo "<td>
                            <form action='Delete.php' method='post'>
                            <input type='hidden' id='productid' name='productid' value=".$row['productId']."/>
                            <input class='btn btn-primary' type='submit' value='Delete'/>
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