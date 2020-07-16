<!DOCTYPE html>
<html>
    <head>
        <title>Signup Process</title>
    </head>
    <body>
    <?php
        include ('config.php');
        
            $workerEmail = mysqli_escape_string($mysql,$_POST['workerEmail']);
            $workerPassword = mysqli_escape_string($mysql,$_POST['workerPassword']);
            $workerName = mysqli_escape_string($mysql,$_POST['workerName']);
        
        if(mysqli_query($mysql,"INSERT INTO worker(
        workerEmail,workerPassword,workerName) VALUES('$workerEmail','$workerPassword','$workerName')"))
        {
            echo "Data Connection Success!";
            header ("location:interface.html");
        }
        else
        {
            echo "Data Connection unsuccessful :( ";
            header ("location:signUp.php");
        }
        
        mysqli_close($mysql);
    ?>
        </body>
</html>