<?php
    require("utils/conn.php");
    require("utils/session_start.php");
    
    $add = $_POST['address'];
    $user = $_SESSION['username'];

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
  