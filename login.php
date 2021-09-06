<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In Portal</title>
</head>
<body>
    <div id="container">

        <div id="header">
            <h2>Register</h2>
        </div>
        <form action="registration.php" method="post">
            <div>
                <label for="username">Username : </label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password">Password : </label>
                <input type="password" name="password_1" required>
            </div>

           <button type="submit" name="log_user">Log In</button>
           <p>Not a user <a href="registration.php"><b>Register Here</b></a></p>
           
</form>
    </div>
    
</body>
</html> 