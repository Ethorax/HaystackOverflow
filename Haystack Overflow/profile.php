<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: Login.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'HaystackOverflow';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
        </a>
        <a href="Homepage.html">
            <button>Forums</button>
        </a>
        <a href="chat.html">
            <button>Chat</button>
        </a>
        <a href="aboutus.html">
            <button>About Us</button>
        </a>
	<a href="aboutus.html">
            <button>Profile</button>
        </a>
        <a href="login.html" id="login-button">
            <button>Log In</button>
        </a>
    </div>
	</head>
	<body class="loggedin">
		
		<div id="profile-body">
		<button>Upload Picture</button>
	<h2>Username: <?=$_SESSION['name']?></h2>
	<h2>Email: <?=$email?> 
	<a href="logout.php"></br></br><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
	</body>
</html>
