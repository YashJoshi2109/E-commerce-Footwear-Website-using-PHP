<?php
    require("utils/conn.php");
    require("utils/session_start.php");
    
    $result=$conn->query("select * from products");
    while($row=mysqli_fetch_assoc($result))
    {
        
    }

    $sql1 = "INSERT INTO address (username,address) values ('$user', '$add')";
            if ($conn->query($sql1) == TRUE )
            {
                unset($_SESSION["cart"]);  
                header("Location: order-complete.php");
            }
            else
            {
                echo "ERROR";
            }
?>
  