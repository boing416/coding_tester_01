<!DOCTYPE html>
<html>
    <head>
        <title>SHOP</title> 
        <link rel="stylesheet" href="css/style.css"> 
    </head>
    <body>
    
        <?php
             $servername = "localhost"; 
             $username = "root";
             $password = "";
             $dbname = "shop";               
             $conn = new mysqli($servername,$username,$password,$dbname);
             $query = "SELECT * FROM items";
             $result = $conn->query($query);  
        ?>
    
        <div class="main"> 
            <div class="header">  
                <h2>SPORT SHOP</h2>   
            </div>
            <div class="items"> 
                <?php while($row = $result->fetch_assoc()): ?>
                    <!-- item start-->
                    <div class="item">   
                        <img src="img/<?php echo $row["item_img"] ?>" alt="" style="float: left;">
                        <div> 
                            <h3><?php echo $row["item_name"] ?></h3> 
                            <p><?php echo $row["item_desc"] ?></p>   
                            <?php if( $row["status"] != "buy"): ?> 
                                <a href="util.php?item_id=<?php echo $row["id"] ?>"><button>BUY</button></a>                              
                            <?php endif ?>       
                        </div>       
                    </div>       
                    <!-- item end -->  
                <?php endwhile ?>   
            </div>
        </div>
    </body>
</html>