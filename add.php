<?php
include 'config.php';
 //assign textbox to variable
 $add_name=$_POST['txtName'];
 $add_email=$_POST['txtEmail'];
 $add_pass=$_POST['txtPass'];
 //insert data
 $query= "INSERT INTO worker(workerName,workerEmail,workerPassword) VALUES('$add_name','$add_email','$add_pass')" ;
 $result = mysqli_query( $link,$query) or die("Query failed"); 
//SQL statement for checking
 //checking either success or not
 if ($result)
echo " Add Successfully ! <a href='tryAdminMenu.html'> back to menu
</a>";
else
echo "Problem occured !";
 mysqli_close($link);
?>]