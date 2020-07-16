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
    $query="SELECT * FROM  job WHERE jobID = '$id'";
$result = mysqli_query( $link,$query) or die("Query failed");
// SQL statement for checking
?>
    <h2>Job Full Information</h2>
    
    <form action="index1.html">
<table width="212" align="center" border="1">
<?php while ( $user = mysqli_fetch_array( $result ))
{
    $id=$user['jobID'];
    $name=$user['jobName'];
    $address= $user['jobPlace'];
    $status= $user['ownerName'];
    $phone= $user['jobPhoneNo'];
}
    
?>
    Please remember to take the EMPLOYER PHONE NUMBER  <br> Please remember the EMPLOYER NAME when make the phone call.  <br> Thank you for your cooperation
<br>
    
    
<tr> 
    <br>
<td width="175"><strong>JOB ID</strong></td>
<td width="181"> <?php echo $id ?></td>
</tr>
    
<tr> 
<td><strong>JOB NAME</strong></td>
<td> <?php echo $name ?></td>
</tr>
    
<tr> 
<td><strong>ADDRESS</strong></td>
<td> <?php echo $address ?></td>
</tr>
    
<tr> 
<td><strong>EMPLOYER NAME</strong></td>
<td> <?php echo $status ?></td>
</tr>
    
<tr> 
<td><strong>EMPLOYER PHONE NUMBER </strong></td>
<td> <?php echo $phone ?></td>
</tr>
    
</table>
    
back to <button type="submit"><a>HOME</a></button>
        </form>
</body>
</html>