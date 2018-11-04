<?php session_start(); ?>
<?php require_once('connection.php'); ?>

<?php

$promotion = "SELECT * FROM promo";
$presults = $connection->query($promotion);
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
        <img src="" alt="">
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
                <h3 class="promo-head">Get to know about our promotions from here </h3>
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="jumbotron promo-jumbo">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="abt-h4">20% Discount on all the products</h4>
                                </div>
                                <div class="col-lg-6">
                                    <p class="abt-p">
                                        KOTTU.LK was founded by four guys this year to introduce a
                                        place where you have
                                        a
                                        plate of Kottu just the way you like it. Our Chef, Yatta, likes to hero
                                        fresh
                                        produce
                                        in Kottu so he uses minimal sauces and more Lankan curry to add flavour.
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <img src="./Images/menu3.jpg" alt="" class="img-thumbnail promo-img">
                                </div>
                            </div>
                        </div>

                        <div class="jumbotron promo-jumbo">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="abt-h4">20% Discount on all the products</h4>
                                </div>
                                <div class="col-lg-6">
                                    <p class="abt-p">
                                        KOTTU.LK was founded by four guys this year to introduce a
                                        place where you have
                                        a
                                        plate of Kottu just the way you like it. Our Chef, Yatta, likes to hero
                                        fresh
                                        produce
                                        in Kottu so he uses minimal sauces and more Lankan curry to add flavour.
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <img src="./Images/menu3.jpg" alt="" class="img-thumbnail promo-img">
                                </div>
                            </div>
                        </div>
                        <?php while($promotions = mysqli_fetch_assoc($presults)):?>
                          <div class="jumbotron promo-jumbo">
                            <div class="row">
                              <div class="col-lg-12">
                                <h4 class="abt-h4"><?=$promotions['promo_name'];?></h4>
                              </div>
                              <div class="col-lg-6">
                                <p class="abt-p"><?=$promotions['product_name'];?></p>
                                <p class="abt-p"><?=$promotions['promotion_content'];?></p>
                              </div>
                              <div class="col-lg-6">
                                <?php
                                  echo '<img src="data:image/jpg;base64,'.base64_encode($promotions['image']).'" alt="" class="img-thumbnail promo-img"/>';
                                ?>
                              </div>
                            </div>
                          </div>
                        <?php endwhile ;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>



</body>

</html>
<?php mysqli_close($connection); ?>