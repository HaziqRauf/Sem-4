<?php
include ("config/config.php");
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $myusername= mysqli_real_escape_string($mysql,$_POST['username']);
        $mypassword= mysqli_real_escape_string($mysql,$_POST['password']);
        $sql = "SELECT * FROM admin WHERE adminID = '$myusername' and adminPass = '$mypassword'";
        $result = mysqli_query($mysql,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count == 1)
        {
            $_SESSION['worker'] = $myusername;
            echo '<h3>connection successfull!</h3>';
            header("location:admin_menu.html");
        }
        else
        {
            ?>
            <script> alert('Invalid Username or Password');</script>
<?php
                //header ("location:admin_login.html");
                header ("refresh:1; url=admin_login.html");
        }
    }

?>