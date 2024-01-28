<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="casey.css?v=1.2">
</head>
<body>

<div class="login_container">

<div class="login_right">
<div class="logo">
<h1><a href="duplicate_home.php">ShareDen</a></h1>
</div>
    <h3>Join the evergrowing community at Shareden lets have some fun!!</h3>

</div>
    <div class="login">
        <h3>Login to your Shareden account</h3>
        <form id="loginForm" action="login_confirm.php" method="POST">
        <label for="usernameOrEmail">Username or Email:</label>
        <input type="text" id="usernameOrEmail" name="usernameOrEmail" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
        </form>
        <p class="p_signup">
            Dont have an account? <a href="signup.php">Sign Up</a>
        </p>
    </div>
</div>

</body>
</html>

