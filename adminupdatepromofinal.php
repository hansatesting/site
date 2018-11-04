<?php session_start(); ?>
<?php require_once('connection.php');?>
<?php
  if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
  }
?>
<?php
  $promoid = ($_POST["productid"]);
  $promoname = ($_POST["promo_name"]);
  $productname = ($_POST["product_name"]);
  $discount = ($_POST["discount"]);
  $promotionContent = ($_POST["promotion_content"]);

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

    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <h3 class="cart-head">UPDATE PROMOTIONS</h3>
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
                        <h5 class="form-head head-pad">UPDATE YOUR PROMOTION FROM HERE</h5>

                        <form action="adminupdatepromo.php" method="post" class="spacer-xs" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Promotion Name</label>
                                <?php 
                                echo "<input name='promoname' type='promotion' class='form-control' id='promoname' aria-describedby='emailHelp'
                                placeholder=".$promoname." required>";
                                ?>
                
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product</label>
                                <select name="productname" id="productname" class="form-control">
                                  <option value="" disabled selected>Select Product</option>
                                  <?php while($products = mysqli_fetch_assoc($presults)):?>
                                    <option value='<?=$products['name'];?>'><?=$products['name'];?></option>
                                  <?php endwhile ;?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Discount Percentage</label>

                                <?php
                                echo "
                                <input name='discount' type='discount' class='form-control' id='discount' aria-describedby='emailHelp'
                                    placeholder=".$discount." required>
                                ";
                                ?>
                                
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Promotion Content</label>

                                <?php
                                echo "
                                <input name='promocontent' type='content' class='form-control' id='promocontent' aria-describedby='emailHelp'
                                    placeholder=".$promotionContent." required>
                                ";                               
                                ?>
                                
                            </div>

                           <!-- <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" name="image" id="imgInp">
                                        </span>
                                    </span> -->
                                    <!-- <input name="image" type="text" class="form-control" readonly> -->
                                <!-- </div>
                                <img id='img-upload' />
                            </div> -->

                            <div class="form-group">
                            <?php 
                            echo "<input type='hidden' id='promoid' name='promoid' value=".$promoid.">";
                            ?>
                            
                                <button type="submit" name="submit" class="btn btn-primary add-pdct-btn">Apply</button>
                            </div>
                            </form>

                            <div class="form-group">
                                <a href="./adminpanel.php" type="button" class="btn btn-success add-pdct-btn">Back
                                    to Admin Panel</a>
                            </div>
                    </div>
                    </form>
                </div>
                <br>
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