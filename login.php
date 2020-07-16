<?php
include ("config.php");
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $myusername= mysqli_real_escape_string($mysql,$_POST['uname']);
        $mypassword= mysqli_real_escape_string($mysql,$_POST['psw']);
        $sql = "SELECT * FROM worker WHERE workerName = '$myusername' and workerPassword = '$mypassword'";
        $result = mysqli_query($mysql,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count == 1)
        {
            $_SESSION['worker'] = $myusername;
            header("location:bookjob.php");
        }
        else
        {
            //header ("location:interface.html");
                echo '<h3>Invalid Username or Password </h3>';
                header ("refresh:1; url=interface.html");
        }
    }

?>