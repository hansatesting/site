<?php  

//index.php

$connect = new PDO("mysql:host=localhost;dbname=kottulk", "root", "");

$query = "SELECT SUM(subTotal) as number, DAY(date) as date, MONTH(date) as month, YEAR(date) FROM orderr GROUP BY YEAR(date), MONTH(date), DAY(date)";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?> 

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = google.visualization.arrayToDataTable([
     ['date', 'salse'],
     <?php
     foreach($result as $row)
     {
      echo "['".$row["month"]."', ".$row["number"]."],";
     }
     ?>
    ]);

        var options = {
          title: 'Chess opening moves',
          width: 150,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'verticle', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'daily sum'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>