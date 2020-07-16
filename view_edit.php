<html>
<head>
    <title>Student Part Time Job</title>
    </head>
    <body align=center>
    <?php
        include 'config.php';
        $con = $mysql;
        mysqli_select_db($con,'part_time_job');
        $sql = "select * from worker";
        $records = mysqli_query($con,$sql);
        ?>
        <table align="center">
             <tr>
        <th colspan="4"><h2>Update Worker Form</h2></th>
    </tr>
            <tr>
            <th> Name </th>
            <th> Password </th>
            <th> Email </th>
            <th> Job ID </th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($records))
            {
                echo "<tr><form action='update.php' method=post>";
                echo "<td><input type=text name=name value='".$row['workerName']."'></td>";
                echo "<td><input type=text name=password value='".$row['workerPassword']."'></td>";
                echo "<td><input type=text name=email value='".$row['workerEmail']."'></td>";
                echo "<td><input type=text name=jobId value='".$row['jobID']."'></td>";
                echo "<input type=hidden name=id value='".$row['workerID']."'>";
                echo "<td><input type=submit>";
                echo "</form></tr>";
            }
            ?>
        </table>
        
<br>
    <form action="tryAdminMenu.html"> <button>MENU </button></form>
    </body>
</html>