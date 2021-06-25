<?php
        require("utils/conn.php");
        require("utils/session_start.php");
        
        if ($_SESSION["logedin"] == 0)
        {
            echo '<script>window.alert("You have not loged In");
            window.location.href="log-reg.php";</script>';
            // header("Location: log-reg.php");
        }
        else
        {
            header("Location: checkout.php");
        }

?>
