<?php
include ('config/config.php');
        
$name = mysqli_escape_string($mysql,$_POST['nameProduct']);
$desc = mysqli_escape_string($mysql,$_POST['description']);
$price = mysqli_escape_string($mysql,$_POST['price']);
        

        if(mysqli_query($mysql,"INSERT INTO products(
        name,description,price) VALUES('$name','$desc','$price')"))
        {
            echo "Data Connection Success!";
            header ("location:admin_menu.html");
        }
        else
        {
            echo "Data Connection unsuccessful :( ";
            header ("location:upload.php");
        }
        mysqli_close($mysql);
?>