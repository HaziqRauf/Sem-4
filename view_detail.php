<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Part Time Job</title>
</head>

<body align="center">
<?php include 'config.php';
//get the data
    $id=$_GET['user_id'];
    $query="SELECT * FROM  worker WHERE workerID='$id'";
$result = mysqli_query( $link,$query) or die("Query failed");
// SQL statement for checking
?>
    <h2>Worker Full Information</h2>
<table width="212" align="center" border="1">
<?php while ( $user = mysqli_fetch_array( $result ))
{
    $id=$user['workerID'];
    $name=$user['workerName'];
    $address= $user['workerEmail'];
    $status= $user['jobID'];
}
    
?>
<tr> 
<td width="75"><strong>ID</strong></td>
<td width="121"> <?php echo $id ?></td>
</tr>
<tr> 
<td><strong>NAME</strong></td>
<td> <?php echo $name ?></td>
</tr><tr> 
<td><strong>EMAIL</strong></td>
<td> <?php echo $address ?></td>
</tr>
<tr> 
<td><strong>JOB ID</strong></td>
<td> <?php echo $status ?></td>
</tr>
</table>
    
<br>
    <form action="adminMenu.php"> <button>MENU </button></form>
</body>
</html>