 <?php 

     require_once('connection.php'); 

    if(isset($_POST['productid'],$_POST["productname"],$_POST["productamount"])){

    $productId = ($_POST["productid"]);
    $productName = ($_POST["productname"]);
    $productAmount = ($_POST["productamount"]);
    

  
    
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
                   <h3 class="cart-head">UPDATE PRODUCTS</h3>
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
                           <h5 class="form-head head-pad">UPDATE YOUR PRODUCT FROM HERE</h5>
                           
                               
                                   <?php 
                                    //   echo $productId; echo '<br>';
                                    //   echo $productName; echo '<br>';
                                    //   echo $productAmount; echo '<br>';
                                    //   echo $productImage; echo '<br>'; echo '<br>';

                                      $productIdUpdated =(int)$productId;
                                    //   echo gettype($productIdUpdated);
                                     echo "

                                     <form action='adminupdateproductfinal.php' method='post'>
                                     <div class='form-group'>
                                         <label>Upload Image</label>
                                     </div>
                                     <div class='form-group'>
                                         <label for='exampleInputEmail1'>Product Name</label>



                                     <input type='hidden' id='productid' name='productid' value=".$productId.">

                                     <input type='text'  id='productname' name='productname' class='form-control' 
                                     placeholder=".$productName.">
                                     
                                     <div class='form-group'>
                                    <label for='productamount'>Product Price</label>
                                    <input type='text' name='productamount' class='form-control' id='productamount'
                                       placeholder=".$productAmount.">
                                    </div>

                                    

                                    <div class='form-group'>
                                    <button type='submit' class='btn btn-primary add-pdct-btn'>Save</button>
                                    </div>

                                   


                                    </div>
   
                               
                               
                                    <div class='form-group'>
                                        <a href='./adminpanel.php' type='button' class='btn btn-success add-pdct-btn'>Back
                                            to Admin Panel</a>
                                    </div>
                            </div>
                    
                        </div>
                        <br>
                    </div>
                    </form>

                                     
                                     ";
                                   ?>
                                   
                              
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

       <script src="main/bootstrap.min.js"></script>
        </body>

        </html>

