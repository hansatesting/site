﻿
<?php require_once('connection.php'); ?>
<?php session_start();

if(isset($_SESSION['username'])){
    
}

?>
<?php

$product = "SELECT * FROM product";
$presults = $connection->query($product);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>KOTTU.LK</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" id="nav-color">
        <!-- <img src="" alt=""> -->
        <a class="navbar-brand" href="#">KOTTU.LK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto nav-list ">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./promotion.php">Promotion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pickuplocation.php">Pick Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Customize.php">Customize</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cart.php">CART</a>
                </li>

                <?php 
if(isset($_SESSION['username'])){
    echo "<li class='nav-item'>
    <a class='btn btn btn-warning' href='logout.php'>Logout</a>
    </li>";
}

?>
            </ul>
        </div>
    </nav>

    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <h3 class="menu-head2">Choose our signature kottu from here</h3>
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <form action="addcart.php" method="post">
			<div class="container">


                             <div class="row">
                             <?php while($products = mysqli_fetch_assoc($presults)):?>
                             <!-- fetch products -->
                               		<div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="container menu-con">
                                          <!-- <img src="data:image/jpeg;base64,'.base64_encode( $products['image'] ).'" alt="menu1" class="img-thumbnail menu-img"> -->
                                          <?php
                                            echo '<img src="data:image/jpg;base64,'.base64_encode($products['image']).'" alt="menu1" class="img-thumbnail menu-img"/>';
                                            // image encoding
                                          ?>
                                          <dt class="menu-text"><?=$products['name'];?></dt>
                                          <p class="text-light bg-dark menu-text2"><?=$products['amount'];?></p>
                                          <!-- add to cart form -->
                                          <form class="spacer-xs" method="post" action="addToCart.php">
                                            <div class="form-group text-pad">
                                                <input name="qty" type="text" class="form-control" id="menuquantity" placeholder="Enter the quantity">
                                                <?php
                                                echo "<input type='hidden' name='total' value=".$products['amount']." id='total'>";
                                                echo "<input type='hidden' name='selectedCarb' value=".$products['productId']." id='selectedCarb'>";
                                                ?>
                                                
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-danger menu-btn">ADD TO CART</button>
                                            </div>
                                          </form>
                                      </div>

                                    </div>
                                     <?php endwhile ;?>
                                     <!-- ending while loop -->
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
                <img class="d-block w-100" src="./Images/mencara1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">Enjoy the dish well with a sparkling beverage</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/mencara2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">Enjoy the dish well with a sparkling beverage</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/mencara3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">Enjoy the dish well with a sparkling beverage</h5>
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

    <!-- Footer -->

    <footer class="page-footer font-small indigo">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Kottu Vareities</h5>
                    <ul class="list-unstyled">
                        <li>
                            <h6>Chicken Kottu</h6>
                        </li>
                        <li>
                            <h6>Beef Kottu</h6>
                        </li>
                        <li>
                            <h6>Vegetable Kottu</h6>
                        </li>
                        <li>
                            <h6>Mutton Kottu</h6>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Menu</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="./menu.html">Signature Kottu</a>
                        </li>
                        <li>
                            <a href="./Customize.html">Customize your Kottu</a>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>
                    <ul class="list-unstyled">
                        <li>
                            <h6>Phone - 0112358778</h6>
                            <h6>Mobile - 0775688778</h6>
                        </li>
                        <li>
                            <h6>Email - kottulk@gmail.com</h6>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <h6>www.kottu.lk</h6>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>