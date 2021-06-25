<?php
    session_start();
    foreach($_SESSION["cart"] as $citem)
    {
        var_dump($citem);
        echo "<br><br>";
        echo "qty =  ".$citem["qty"];
        echo "<br><br>";
    }
?>
