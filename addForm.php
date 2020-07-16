<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ADD</title>

	<link rel="stylesheet" type="text/css" href="addForm.css">
	<link href="addForm2.css" rel="stylesheet" type="text/css" />
	

	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
	
	<div id="nav">
		<h1 id="s1"><a href="index.html">ADD</a></h1>
		<ul>
			<li><a href="tryAdminMenu.html">MENU</a></li>
		</ul>s
	</div>

	<div class="bg-img">
  		<form action="add.php" class="container" method="post">
    		<h1 align="center">Add Worker Form</h1>

    		<tr>
 <td><strong>Email</strong></td>
 <td> <input name="txtEmail" type="text" placeholder="Enter Email" name="email" required></td>
 </tr>

    		<tr>
 <td width="75"><strong>Username</strong></td>
 <td width="121"> <input name="txtName" type="text" placeholder="Enter Username" name="username" required></td>
 </tr>

 			<tr>
 <td><strong>Password</strong></td>
 <td> <input name="txtPass" type="text" placeholder="Enter Password" name="password" required/></td>
 </tr>

 <tr>
 <td colspan="2"><div align="center">
 <input type="submit" name="Submit" value="Submit" class="btn" required>
 </div>
 </td>
 </tr>
 </form>
</div>
</body>
</html>