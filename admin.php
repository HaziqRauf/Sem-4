<!DOCTYPE html>
<html>
    <head>
        <title>User Login</title>
    </head>
    <body align = "center">
       <form class="modal-content animate" action="connectAdmin.php" method="POST">
            <h1>User Login</h1>
<div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
        
                <button type="submit">Login</button>

            </div>
            
        </form>
    </body>
</html>
