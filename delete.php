<?php
include 'config.php';
 //delete data
 $delete_id=$_GET['user_id'];
 $query = "DELETE FROM worker WHERE workerID='$delete_id'";
 $result = mysqli_query( $link,$query) or die("Query failed");
 if ($result)
 echo " Delete Successfully ! <a href='view.php'> back to view
</a>";
 else
 echo "Problem occured !";
 mysqli_close($link);
?>