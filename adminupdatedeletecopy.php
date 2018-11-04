
<?php require_once('connection.php');
$connection = mysqli_connect('localhost', 'root', '', 'kottulk');


if(isset($_GET['delete'])){
    $productId = $_GET['delete'];
    $connection->query("DELETE FROM product WHERE productId = $productId");
    header('Location:adminupdatedeletecopy.php' );
}

?>


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
                <h3 class="cart-head">ADMIN UPDATE DELETE</h3>
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
                            
                            $result = mysqli_query($conn,"SELECT * FROM product");?>
                        <table class="table table-hover table-dark">
                        <thead><th>Product Id</th><th>Name</th><th>Price</th><th>Image</th><th>Edit</th><th>Delete</th></thead>
                          
                        <tbody>

                        <?php while($product = mysqli_fetch_assoc($result)):?>
                        <tr>

                            <td><?=$product['productId'];?></td>
                            <td><?=$product['name'];?></td>
                            <td><?=$product['amount'];?></td>
                            <td><?=$product['image'];?></td>
                            <td>edit</td>
                            
                            <td><a class="btn btn-xs" href="adminupdatedeletecopy.php?delete=<?php echo $product['productId'];?>"><span class="glyphicon glyphicon-edit"></span></td>
                        
                        
                            <?php endwhile;?>
                        
                        </tr>
                        
                        
                        </tbody>
                        
                        
                        </table>
                        
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