<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VIEW</title>
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<?php
//Connection to database
include 'config.php';
$output = '';
if(isset($_POST['search']))
{
    $searchq = $_POST['search'];
    
    $query =  "Select * from worker W, job J where W.jobID = J.jobID and workerName like '$searchq' ";
    $result = mysqli_query( $link,$query)or die("<br>could not search!");
    $count = mysqli_num_rows($result);
    if( $count != 0)
    {
        while($row = mysqli_fetch_array($result)) 
            {
            $name = $row['workerName'];
            $id = $row['workerEmail'];
            $owner = $row['jobName'];
            $place = $row['jobPlace'];
            
            
            $output .= '<div>'.$name.'<br>'.$id.'<br>'.$owner.'<br>'.$place.'</div>';
            }
    }
    else
    {
        $output = '<br>There was no search result!';
    }
}
?>
<html align="center">
<head>
<title>Student Part Time Job</title>
</head>
<body>
    <br>
    <h1> SEARCH WORKER DETAIL </h1>
    <br>
<form action="search.php" method="POST">
 <input name="search" type="text">
 <input type="submit" name="Submit" value="search">
    <div style="margin-top: 10px;background-color:#ecb1b1">
         <?php print ("$output");?>
    </div>
   
</form>
    
<br>
    <form action="tryAdminMenu.html"> <button>MENU </button></form>
</body>
</html>