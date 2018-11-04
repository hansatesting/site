<?php session_start(); ?>
<?php require_once('connection.php'); ?>

<?php

if (isset($_POST['submit'])){

$rate = $_POST['range'];
$comment= $_POST['ratefeedback'];

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

$sql = "INSERT INTO feedback (comment, rate, user_userId)
VALUES ('$comment', '$rate', '10')";


// hadrcoded 10 should change from session from login


if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>
    <strong>Success!</strong> Indicates a successful or positive action.
  </div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://localhost/site/promotion.php");
exit;
}


?>
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
            </ul>
        </div>
    </nav>



    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <h3 class="cart-head">DRAG THE ICON AND RATE US</h3>
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
            <div class="container">
            <div class="jumbotron ratejumbo">

            <form action="rate.php" method="post">
                <input name="range" id="custom-range" class="custom-range" type="range"class="" min="1" max="10" step="1" onchange="showVal(this.value)" stwp>
                <div class="form-group text-pad">
                    <input name="ratefeedback" type="text" class="form-control" id="ratefeedback" placeholder="Enter your Comment">
                </div>
                <button type="submit" class="btn" name="submit">Rate</button><br>
            </form>
            <!-- <input id="custom-range" type="range" class="custom-range" id="customRange1" stwp> -->
            
            <script>
                function showVal(val){
                    console.log(val);
                }
            </script>
            
            </div>
            </div>
             

             
             <div class="container">
                            
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
    </section>


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
























































</body>

</html>