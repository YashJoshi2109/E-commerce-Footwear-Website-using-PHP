<?php
    require("utils/conn.php");
    require("utils/session_start.php");

    $found=0;

    if(!isset($_SESSION["cart"]))
    {
        $_SESSION["cart"] = array();
    }

    if(isset($_GET["pid"]) && isset($_SESSION["cart"]))
    {
        $result=$conn->query("select * from products where pid=".$_GET["pid"]);

        if(mysqli_num_rows($result)==1)
        {
            $_SESSION["qty"] = 1;
            $product =  mysqli_fetch_assoc($result);
            if(count($_SESSION["cart"] > 0 ))
            {
                foreach ($_SESSION["cart"] as &$citem)
                {
                    if($_GET["pid"] == $citem["pid"])
                    {
                        $citem["qty"]=$citem["qty"]+1;
                        $found = 1;
                        break;
                    }
                }
                if($found==0)
                {
                    $product["qty"]=1;
                    array_push($_SESSION["cart"],$product);
                }
            }
        }        
    }
    echo "<script>window.history.back();</script>";
?>