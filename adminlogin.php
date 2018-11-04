<?php session_start(); ?>
<?php require_once('connection.php'); ?>

<?php
// Check for form submission
if (isset($_POST['submit'])){
    
    $errors = array();
// check if the username and password has been enetered
if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ){
 $errors[] = 'Username is Missing/ Invalid';    
}

if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ){
 $errors[] = 'Password is Missing/ Invalid';
}  
// check if there are any errors in the form
if (empty($errors)){
    
// save username and password into variables
$email 		= mysqli_real_escape_string($connection, $_POST['email']);
$password 	= mysqli_real_escape_string($connection, $_POST['password']);

// prepare database query
$query = "SELECT * FROM adminlogin
        WHERE email = '{$email}'
        AND password = '{$password}'
        LIMIT 1";
        
$result_set = mysqli_query($connection, $query);

if ($result_set){
    //query successful

    if ($result_set->num_rows == 1){
       //valid user found    
       $user = mysqli_fetch_assoc($result_set);
       $_SESSION['userId'] = $user['userId'];
       $_SESSION['firstname'] = $user['firstname'];
       //updating last login
       $query = "UPDATE adminlogin SET last_login = NOW()";
       $query = "WHERE id = {$_SESSION['userId']} LIMIT 1";
       
       $result_set = mysqli_query($connection, $query);
       
       if (!result_set){
           die ("Database query failed");
           
       }

        // redirect to adminhomepage.php
       header('Location: adminhomepage.php');
    }else{
        // user name and password invalid
        $errors[] = 'invalid Username / Password';
        
    }
    }else {
    $errors[] = 'Database query failed';
    
		}
	}
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
                <h3 class="cart-head">ADMIN LOGIN</h3>
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
                <div class="offset-lg-3 col-lg-6">
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <div class="card-body">
                            <!--Header-->
                            <div class="text-center">
                                <h3 class="white-text"><i class="fa fa-user white-text"></i> SIGN IN</h3>
                                <hr class="hr-light">
                            </div>

                            <!--Body-->
                            <form action="adminpanel.php" method="post">
                            <div class="md-form">
                                <i class="fa fa-envelope prefix white-text active"></i>
                                <input type="email" name="email" id="form2" class="form-control" placeholder="Email">
                                <label for="form2" class="active">Your email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix white-text active"></i>
                                <input type="password" name="password" id="form4" class="form-control" placeholder="Password">
                                <label for="form4" class="active">Your password</label>
                            </div>

                            <div class="text-center">
                                <button type="submit class="btn btn-danger">Sign In</button><br>
                                <hr class="hr-light mb-3 mt-4">
                            </div>
                            </form>
                        </div>
                    </div>
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