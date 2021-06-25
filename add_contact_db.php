<?php
    require("utils/conn.php");
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $mess = $_POST['message'];
    $name = $fname.' '.$lname;

    echo $name;
        echo $email;

    $sql1 = "INSERT INTO contact (name,email,subject,message) values ('$name', '$email', '$sub', '$mess')";
            if ($conn->query($sql1) === TRUE )
            {  
                header("location: contact.php");
            }
            else
            {
                echo 'NOT DONE JHOOL HAI!';
            }
            if (mail($email , $sub ,$mess))
            {
                echo 'Message sent succesfully';
            }
            else 
            {
                echo 'there was a problem in sending mail';
            }
    
?>
