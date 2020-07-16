<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Part Time Job</title>

<link rel="stylesheet" type="text/css" href="demo.css" />

</head>

<body>

<div id="main-container">

	<div class="tutorialzine">
    <h1>Select Job</h1>
    </div>

		<form method="post" action="booking_job.php">
		<div class="container" style=" width:1000px; margin-left: 12px;">
		
			<span class="top-label">
				<span class="label-txt">Job Details</span>
			</span>
            
			<div class="content-area" style="border-radius:15px;">


					<span class="label-txt" style="margin-left: 22px">Job Date</span>
					<span class="label-txt" style="margin-left: 42px">Job Place</span>
                    <span class="label-txt" style="margin-left: 42px">Job Name</span><br>
            <?php
include 'config.php';
$query="Select * from job order by jobName Asc";
$result = mysqli_query( $link,$query) or die("Query failed");
                            if($result == FALSE) 
                            { 
                                die(mysql_error()); // TODO: better error handling
                            }
                    while($row = mysqli_fetch_array($result))
                                {
                                    
                            ?>
                    <span class="label-txt" style="margin-left:2px"></span>
                    <td><?php echo $row['jobDate'];?><span class="label-txt" style="margin-left: 22px"></span></td>
                    <td><?php echo $row['jobPlace'];?><span class="label-txt" style="margin-left: 40px"></span></td>
                    <td><?php echo $row['jobName'];?><span class="label-txt" style="margin-left: 22px"></span></td>
                        
                        
                    
                    <button type="submit"><a href="booking_job.php?user_id=<?php print($row['jobID']);?>"> Take </a></button>
                <br><br>
            <?php
             }
             ?>

			</div>
		</div>
        </form>
</div>

</body>
</html>