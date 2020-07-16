<!DOCTYPE html>
<html>
    <head>
        <title>Vendor process</title>
    </head>
    <body>
    <?php
        include ('config.php');
        
            $jobName = mysqli_escape_string($mysql,$_POST['jname']);
            $jobDate = mysqli_escape_string($mysql,$_POST['jdate']);
            $jobPlace = mysqli_escape_string($mysql,$_POST['jplace']);
            $jobOwner = mysqli_escape_string($mysql,$_POST['jowner']);
            $jobPhoneNo = mysqli_escape_string($mysql,$_POST['jphone']);

        
        if(mysqli_query($mysql,"INSERT INTO job(
        jobName,jobDate,jobPlace,ownerName,jobPhoneNo) VALUES('$jobName','$jobDate','$jobPlace','$jobOwner','$jobPhoneNo')"))
        {
            echo "Data Connection Success!";
            header ("location:index1.html");
        }
        else
        {
            echo "Data Connection unsuccessful :( ";
            header ("location:vendor.php");
        }
        
        mysqli_close($mysql);
    ?>
        </body>
</html>