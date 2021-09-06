<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Portal</title>
</head>
<body>
    <div id="container">

        <div id="header">
            <h2>Register</h2>
        </div>
        <form action="login.php" method="post">
        <?php include('errors.php') ?>
            <div>
                <label for="username">Username : </label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="email">Email : </label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="password">Password : </label>
                <input type="password" name="password_1" required>
            </div>

            <div>
                <label for="password">Confirm password : </label>
                <input type="password" name="password_2" required>
            </div>
           
           <button type="submit" name="reg_user">Submit</button>
           <p>Already a user <a href="login.php"><b>Log In</b></a></p>
           
</form>
    </div>
    
</body>
</html> 