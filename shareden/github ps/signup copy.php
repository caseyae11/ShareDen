<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
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

    <div class="signupTitle">
    <h2>SignUp</h2>
    </div>
    <div class="signup">
        <form action="signup_confirm.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Sign Up">
        </form>
    </div>
  

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
