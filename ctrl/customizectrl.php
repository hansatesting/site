<?php 

require_once('../connection.php');

    
    $query = "SELECT * FROM ingridient";
    
    $result = mysqli_query($connection,$query);
    
    if($result) {
        while ($row = @mysqli_fetch_array($result)){
            echo json_encode($row);
        }
    
    }



  mysqli_close($connection); 
  
  ?>