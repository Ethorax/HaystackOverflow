<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: Login.html');
        exit;
    }

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'HaystackOverflow';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

    <link rel="stylesheet" href="style.css" type="text/css">
    <Title>HayStackOverflow</Title>
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
        <a href="aboutus.html">
            <button>About Us</button>
        </a>
        <a href="login.html" id="login-button">
            <button>Log In</button>
        </a>
        <a href="registration.html">
			<button>Register</button>
		  </a>
	</div>
</head>
<h1 style="background-color: rgb(255, 255, 255, 0.6)">Arable Marketing Commentary Forums</h1>
<div style="background-color:rgb(255, 255, 255, 0.6)">This section is for discussing all things in Arable Marketing.</div>


<body>
<?php
    $sql = mysqli_query($con, "SELECT * FROM threads WHERE topic = 'Arable Marketing'");
    if(mysqli_num_rows($sql) > 0){
?>

<table>
    <tr>
        <td>Username</td>
        <td>Title</td>
        <td>Thread ID</td>
        <td>Body</td>
    </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($sql)){
    $post_id = $row["id"];

    ?>

    <tr>
        <td><?php echo $row["username"]; ?></td>
        <td><a href="replytopost.php?post_id=<?php echo $post_id?>"><?php echo $row["title"]; ?></td>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["body"] ?></td>
    </tr>
    <?php
    $i++;
}
?>
</table>
    <?php
}
else{
    echo "No Threads Available";
}
?>
</html>
</body>
