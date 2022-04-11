<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css" type="text/css">
    <Title>HayStackOverflow Log In</Title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <a href="Homepage.html">
        <img src="images/New_Logo.jpg" width="200" height="100" href="Homepage.html">
    </a>
    <div class="btn-group" style="background-color: rgb(147, 192, 133)">
        <a href="news.html">
            <button>News</button>
        </a>
        <a href="rules.html">
            <button>Rules</button>
        </a>s
        <a href="Homepage.html">
            <button>Forums</button>
        </a>
        <a href="aboutus.html">
            <button>About Us</button>
        </a>
        <a href="login.html" id="login-button">
            <button>Log In</button>
        </a>
    </div>
</head>

<body>
    <div id="main">
		<h1>SIMPLE LOGIN</h1>
		<form method="POST">
			Username <input type="text" name="username" class="text" autocomplete="off" required>
			Password <input type="password" name="password" class="text" required>
			<input type="Submit" name="submit" id="sub">
		</form>
	</div>
</body>

</html>
<?php
	if (isset($_POST['submit'])) {
		$un=$_POST['username'];
		$pw=$_POST['password'];
		
		if ($un=='username' && $pw=='password') {
			header ("Location: profile.php");
			exit();
		}
		else
			echo "Invalid Username/Password";
	}
?>
