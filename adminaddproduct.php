


<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/site/home.php");
    exit;   
}

?>
<?php require_once('connection.php');?>
<?php
  if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
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
                <h3 class="cart-head">ADD PRODUCTS</h3>
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
                <div class="offset-lg-4 col-lg-4">
                    <div class="jumbotron jumbo-addpct">
                        <h5 class="form-head head-pad">ADD YOUR PRODUCT FROM HERE</h5>

                            <form action="Item.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input name="image" type="file" id="imgInp">
                                        </span>
                                    </span>

                                </div>
                                <img id='img-upload' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter the Product name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="text" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter the Product Price">
                            </div>



                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary add-pdct-btn">Save</button>
                            </div>
                            </form>

                            <div class="form-group">
                                <a href="./adminpanel.php" type="button" class="btn btn-success add-pdct-btn">Back
                                    to Admin Panel</a>
                            </div>
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

    <div class="modal fade" role="dialog" id="modal-message">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h4 class="modal-title">Message</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p><?php echo $message; ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main/bootstrap.min.js"></script>
    <?php
    if (isset($message)) {
      echo "<script type='text/javascript'>
        $(document).ready(function () {
          $('#modal-message').modal('show');
        })
      </script>";
    }
    ?>

</body>

</html>