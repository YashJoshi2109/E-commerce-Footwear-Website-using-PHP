<?php

    session_start();
    if(isset($_SESSION["value"])){
        $_SESSION["value"] = $_GET["value"];
        $vb = $_SESSION["value"];
        echo "<script>createalert('".$vb."')</script>";
        // echo "<script> 
        //         document.hetElementById('').innerHTML='<br>'".$_SESSION['value']."</br>
        //       </script>";     
    }

?>

<html>
    <head>
        <title>
        Session Start
        </title>
    </head>
    <body>  
        <script>
            function createalert(value)
            {

            }   
        </script> 
        <div  id= "diaplay">
        </div>
        <form>
            <input type="text">
            <input type="submit">
        </form>
    </body>
</html>