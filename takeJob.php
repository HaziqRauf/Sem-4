<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JOB</title>
    <link rel="stylesheet" type="text/css" href="takeJob.css">
</head>
<body align=center>
    <title>Student Part Time Job</title>
<?php
//Connection to database
include 'config.php';
$query="Select * from job order by jobID Asc";
$result = mysqli_query( $link,$query) or die("Query failed");
//SQL statement for checking
?>
<table align="center" border="1px" style="width:1500px;line-height:40px;    background-color: #37efff;">

    <tr>
        <th colspan="40"><h2>Job Information Record</h2></th>
    </tr>
    <t>
    
        <th> Job ID </th>
        <th> Job Date </th>
        <th> Job Name </th>
        <th> Job Place </th>
        <th> Job Employer Name </th>
        <th> Job Phone No </th>
        <th> DELETE </th>
        
    </t>
<?php
//data looping
while($row = mysqli_fetch_array($result)){ ?>
    
 <tr>
 <form method="post"><td align=center><?php echo $row['jobID'];?></td>
     
 <td align=center width="100"><?php echo $row['jobDate'];?></td>
 <td align=center width="100"><?php echo $row['jobName'];?></td>
 <td align=center width="100"><?php echo $row['jobPlace'];?></td>
 <td align=center width="100"><?php echo $row['ownerName'];?></td>
 <td align=center width="100"><?php echo $row['jobPhoneNo'];?></td>
 <td><div align="center"><a href="deleteJob.php?user_id=<?php print
($row['jobID']);?>">delete </a></div></td>
    </form>
 </tr>
 <?php
 // looping close
 }
?>
</table>
<br>
    <form action="tryAdminMenu.html"> <button>MENU </button></form>
    </body>