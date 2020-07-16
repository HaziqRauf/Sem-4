<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VIEW</title>
    <link rel="stylesheet" type="text/css" href="view.css">
</head>
<body align=center>
    <title>Student Part Time Job</title>
<?php
//Connection to database
include 'config.php';
$query="Select * from worker order by workerName Asc";
$result = mysqli_query( $link,$query) or die("Query failed");
//SQL statement for checking
?>
<table align="center" border="1px" style="width:600px;line-height:40px;    background-color: #ecec0e;">

    <tr>
        <th colspan="4"><h2>Worker Record</h2></th>
    </tr>
    <t>
    
        <th> Worker ID </th>
        <th> Worker Name </th>
        <th> Worker Email </th>
        <th> Worker's Job ID </th>
        
    </t>
<?php
//data looping
while($row = mysqli_fetch_array($result)){ ?>
    
 <tr>
 <form method="post" action="view_detail.php" ><td align=center ><a href="view_detail.php?user_id=<?php print($row['workerID']);?>"><?php echo $row['workerID'];?></a></td>
     
 <td align=center value="name"><?php echo $row['workerName'];?></td>
     
 <td align=center><?php echo $row['workerEmail'];?></td>
 <td align=center><?php echo $row['jobID'];?></td>
 <td align=center><div align="center"><a href="view_edit.php?user_id=<?php
print ($row['workerID']);?>"> Update </a></div></td>
 <td><div align="center"><a href="delete.php?user_id=<?php print
($row['workerID']);?>">delete </a></div></td>
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