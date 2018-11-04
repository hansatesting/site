
<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/site/home.php");
    exit;   
}

?>



<!DOCTYPE html>
<?php   
 include("connection.php"); //include the config
?>
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
                <h3 class="cart-head">ADMIN PANEL</h3>
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
                <div class="offset-lg-4 col-lg-4">
                    <table class="table table-hover table-dark adm-tbl">
                        <thead>
                            <tr>
                                <th scope="col">NUMBER</th>
                                <th scope="col">ADMIN ACTIVITY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                <!-- <form action="./adminaddproduct.php">
                                <input type="button" class="btn btn-primary ad-btn" style="line-height: 3em;" value="Add Products">
                                </form> -->
                                    <a href="./adminaddproduct.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Add Products</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <a href="./adminupdatedelete.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Update / Delete Products</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <a href="./adminrating.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">View
                                        Ratings</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <a href="./export.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Report
                                        generation</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>
                                    <a href="" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Print
                                        reciepts</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">6</th>
                                <td>
                                    <a href="./processorder.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Orders</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">7</th>
                                <td>
                                    <a href="./addpromotion.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Add Promotions</a>
                                </td>
                            </tr>

                             <tr>
                                <th scope="row">8</th>
                                <td>
                                    <a href="./adminupdatedeletepromo.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Delete / Update Promotions</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">8</th>
                                <td>
                                    <a href="./xlgen.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">XL REPORT</a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
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
    </section>
















































</body>

</html>