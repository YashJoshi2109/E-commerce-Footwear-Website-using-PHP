<?php
    $conn = new mysqli("localhost", "root", "","shoe_store");
    if($conn->connect_error)
    {
        echo "Error Connection to DB" .conn_error;
    }
?>