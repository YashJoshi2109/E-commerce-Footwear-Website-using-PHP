<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shoe_store";
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['regusername'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password1 = $_POST['conpass'];
    $name = "$fname"." "."$lname"; 

    $conn = new mysqli($severname, $username, $password, $dbname);

    $sql2 = "INSERT INTO  user (username,password) values ('$user','$password1')";
    $sql1 = "INSERT INTO  user_details(name,email,username,conpass,mobile) values ('$name', '$email','$user','$password1','$mobile')";
            if ($conn->query($sql1) && $conn->query($sql2)  === TRUE)
            {  
                echo "<script>window.history.back();</script>";
            }
            else
            {
                echo"ERROR: " .$sql . "<br>" . $conn->error;
            }

            // if ($conn->query($sql2) === TRUE)
            // {  
            //     echo "<script>window.history.back();</script>";
            // }
            // else
            // {
            //     echo"ERROR: " .$sql . "<br>" . $conn->error;
            // }
            $conn->close();
?>