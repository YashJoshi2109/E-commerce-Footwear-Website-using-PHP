<?php
    require("utils/conn.php");
    require("utils/session_start.php");

    $found=0;
    if(isset($_GET["pid"]) && isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0)
    {
        foreach ($_SESSION["cart"] as $index => &$citem)
        {
            if($citem["pid"]==$_GET["pid"])
            {
                if($citem["qty"]>1)
                {
                    $citem["qty"] = $citem["qty"]-1;
                    break;
                }
                else
                {
                    unset($_SESSION["cart"][$index]);
                }
            }
        }

    }
    echo "<script>window.history.back();</script>";
?>