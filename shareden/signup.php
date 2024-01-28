<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="casey.css?v=1.2">
</head>
<body>

<div class="signup_container">
        <div class="signup_right">
            <div class="logo">
            <h1><a href="duplicate_home.php">ShareDen</a></h1>
            </div>
                <h3>Join the evergrowing community at ShareDen lets have some fun!!</h3>
            
        </div>
        <div class="signup">
            <h3>Sign Up for ShareDen today!</h3>
            <form action="signup_confirm.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Sign Up">
            </form>
            <p class="p_login">
                Already have an account?<a href="login.php"> Login</a>
            </p>
        </div>
    </div>

</body>
</html>
