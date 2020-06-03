<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop"; 
    
    $conn = new mysqli($servername,$username,$password,$dbname);

    // if($comm->connect_error)
    // {
    //    echo "ERROR";
    // }
    // else{
    //     echo "CONNECTION OK"; 
    // }

    $query = "SELECT * FROM items";
    $result = $conn->query($query);

   
    while($row = $result->fetch_assoc()){
      echo "<div>PRODUCT: " . $row["item_name"] . "</div>"; 
    }

   // print_r($result); 






?>