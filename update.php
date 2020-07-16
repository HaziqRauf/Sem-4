<?php
include 'config.php';
$con = $mysql;
mysqli_select_db($con,'part_time_job');
$sql = "UPDATE worker SET workerName='$_POST[name]',workerPassword='$_POST[password]',workerEmail='$_POST[email]',jobID='$_POST[jobId]' WHERE workerID='$_POST[id]'";

        if(mysqli_query($con,$sql))
            header("refresh:1; url=view_edit.php");
        else
            echo "Not Updated";

?>