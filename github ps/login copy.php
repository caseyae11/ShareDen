<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="loginsignup.css">
</head>
<body>

<header>
    <div class="logo">
        <a href="index.html"><img src="../assets/Logo.png" alt="logo"></a>
    </div>
    <div class="search">
        <input type="search" placeholder="Search" />
    </div>
    <div class="navigation">
        <ul>
            <li><a href="events.html">Events</a></li>
            <button>
                <a href="signup.html">Sign Up</a>
            </button>
            <button>
                <a href="login.html">Login</a>
            </button>
        </ul>
    </div>
</header>
<div class="loginTitle">
<h2>Login</h2>
</div>

<div class="login">
<form id="loginForm" action="login_confirm.php" method="POST">
    <label for="usernameOrEmail">Username or Email:</label>
    <input type="text" id="usernameOrEmail" name="usernameOrEmail" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Login">
</form>
</div>

</body>
</html>


<!--FOOTER---------------------------------------------------------------------------------->
<section class="footer">
    <img src="/group class project/assets/Logo.png" alt="logo">
    <p>©2023 Debug Demons. All rights reserved</p><br>
    <p>A platform to empower connections, foster community, and enrich campus life.</p>
    <img src="facebook.jpg" alt="facebookLogo">
    <img src="twitter.jpg" alt="twitterLogo">
    <img src="instagram.jpg" alt="instagramLogo">
</section>
</body>

</html>