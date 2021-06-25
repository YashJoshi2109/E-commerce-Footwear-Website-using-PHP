<?php
        require("utils/conn.php");
        require("utils/session_start.php");
        $_SESSION["logedin"] = 0;
        if (isset($_POST["userName"]) && isset($_POST["logpass"]) && isset($_POST["login"]))
        {
                $result = $conn->query("select * from user where username   = '".$_POST["userName"]."' and password =  '".$_POST["logpass"]."'");
                if (mysqli_num_rows($result) === 1)
                {
                        $_SESSION["logedin"] = 1;
                    $_SESSION["username"] = $_POST["userName"];
                //     echo '<script>window.history.back();</script>';
                //     echo '<script>window.history.back();</script>';
                    header("Location: index.php");
                }
            
        }
?>