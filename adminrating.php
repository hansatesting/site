<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/site/home.php");
    exit;   
}

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
                
            </ul>
        </div>
    </nav>


    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <h3 class="cart-head">View Rating</h3>
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
            <div class="offset-lg-4 col-lg-4" style="background:black">
                    <form class="spacer-xs">
                        <div class="container ">
                            <div class="md-form">
                                <i class="fa fa-envelope prefix white-text active"></i>
                                <label for="form2" class="active">The Average Rating</label>
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

                                $sql = "SELECT AVG(rate) AS average FROM feedback";
                                $result = $conn->query($sql);

                                

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        $average = $row['average'];
                                        $average= number_format((float)$average, 2, '.', '');
                                        //echo ("This is the average: $average");
                                        echo "<input type='rating' name='rating' id='form2' class='form-control' placeholder='$average'>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();

                                
                                ?>
                                
                                
                            </div>
                        </div>
                    </form>
            </div>

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
        </div>
    </section>

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



























</body>

</html>