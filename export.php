<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/site/home.php");
    exit;   
}

?>


<?php  

//index.php

$connect = new PDO("mysql:host=localhost;dbname=kottulk", "root", "");

$query = "SELECT SUM(subTotal) as number, DAY(date) as date, MONTH(date) as month, YEAR(date) as year FROM orderr GROUP BY YEAR(date), MONTH(date), DAY(date)";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?> 


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./main/bootstrap.min.css">
    <title>KOTTU.LK</title>
	<style>
body {
    background-color: lightblue;
}
</style>
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
				</nav>
	<!-- 
	content of this area will be the content of your PDF file 
	-->
	<div id="HTMLtoPDF">
 <h1>Genarated Report</h1>

<div id="piechart"></div>

	</div>

   

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {

    var data = google.visualization.arrayToDataTable([
     ['date', 'salse'],
     <?php
     foreach($result as $row)
     {
      echo "['".$row["date"].'-'.$row["month"].'-'.$row["year"]."', ".$row["number"]."],";
     }
     ?>
    ]);


  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Monthly Report Kottu.lk', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

	<!-- here we call the function that makes PDF -->
	<a href="#" onclick="HTMLtoPDF()">Download PDF</a>

	<!-- these js files are used for making PDF -->
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</body>
</html>