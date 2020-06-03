<?php
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "GET")
    {

        if(isset($_GET["item_id"]))
        { 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shop";   
            $conn = new mysqli($servername,$username,$password,$dbname);
            $query = "UPDATE items SET status='buy' WHERE id = " . $_GET["item_id"]; 
            $conn->query($query);  
        } 

        



        //

        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "shop";         
        // $conn = new mysqli($servername,$username,$password,$dbname);
        // $query = "SELECT * FROM items";
        // $result = $conn->query($query);
        // $rows = array();
        // while($row = $result->fetch_assoc()){
        //     $rows[] = $row;
        // }
        // echo json_encode($rows);
    }
?>