<?php session_start();

if(isset($_SESSION['username'])){
    // echo "Welcome ".$_SESSION['username'];
    // echo "Welcome ".$_SESSION['id'];
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./main/bootstrap.min.css">
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
            <a href="./rate.php" type="button" class="btn btn btn-warning" >RATE US</a>
            </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./menu.php">Menu</a>
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
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="col-md-6 text-center text-md-left mb-5">
                            <div class="jumbotron jumbo1">
                                <div class="white-text">
                                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">WELCOME
                                        TO KOTTU.LK</h1>
                                    <BR>
                                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign
                                        in
                                        right now to order your KOTTU! </h1>
                                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                    <h6 class="wow fadeInLeft" data-wow-delay="0.3s">If there's one thing that every
                                        Sri
                                        Lankan would agree on, it’s that a yummy plate of
                                        Kottu can uplift your mood any day!</h6>
                                </div>
                            </div>
                        </div>

                       
                        <!--Main Layout-->

                        <div class="container">
                            <div class="row py-5">
                                <div class="col-md-12 text-center ">
                                    <p class="home-text">With KOTTU.LK<br> you can create your own plate of Kottu by
                                        selecting your choice
                                        of carb,
                                        veggies and protein. You can also choose from our signature Kottu dishes, if
                                        being a
                                        chef is not your thing. </p>
                                </div>
                                <div class="container">
                                    <div class="jumbotron">
                                        <a href="./menu.php" type="button" class="btn btn-danger btn-lg" style="line-height: 6em;">OUR
                                            SIGNATURE DISHES</a>
                                        <a href="#" type="button" class="btn btn-danger btn-lg" style="line-height: 6em;">OUR
                                            SIGNATURE DISHES</a>
                                    </div>
                                </div>
                                <!-- image line -->
                                <div class="row" id="row1">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </header>
    <!--Main Navigation-->



    <!-- Modal -->
    <div class="modal fade" id="#registrationform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <form action="User.php" method="post">
                <div class="modal-header">
                
                    <h5 class="modal-title" id="exampleModalLongTitle">Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="md-form">
                        <i class="fa fa-envelope prefix white-text active"></i>
                        <input type="email" name="email" id="form2" class="form-control" placeholder="Enter your Email"><br>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input type="password" name="password" id="form4" class="form-control" placeholder="Enter a Password">
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <br><input type="fname" name="first" id="form4" class="form-control" placeholder="Enter your first name">
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <br><input type="lname" name="last" id="form4" class="form-control" placeholder="Enter your last name">
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <br><input type="mobile" name="mobile" id="form4" class="form-control" placeholder="Enter your Mobile number">
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <br> <input type="Address" name="address" id="form4" class="form-control" placeholder="Enter your Address">
                    </div>
                </div>
                <div class="modal-footer">
                
                    <input type="submit" class="btn btn-secondary">
                </div>
            </form>
                
            </div>
        </div>
    </div>



</div>

    <!-- image caersoul -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./Images/close-up-cold-color-372882.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">OUR DELICIOUS FOOS MADE WITH FRESH VEGETABLES</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/cooking-cookware-cuisine-175754.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">OUR CHEFS ARE WORLDS BEST CHEFS</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/chopped-chopping-board-cooking-8446.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="cara-text">WE HAVE THE BEST CUISINES</h5>
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
    </footer>











































  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>