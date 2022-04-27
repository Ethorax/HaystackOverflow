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
<body>

<?php
    $sql = mysqli_query($con, "SELECT * FROM threads WHERE id = $_GET[post_id]");
    if(mysqli_num_rows($sql) > 0){
    }


?>



<?php
$i=0;
while($row = mysqli_fetch_array($sql)){

    ?>

    <p class="thread"><span style="font-size:32pt;"><?php echo $row["title"]?></span><br/><br/><?php echo $row["body"]?><br/><br/><span style="font-size:18px;"><?php echo $row["username"]?></span><br/></p>
    <?php
    $i++;
}
?>
</table>

<?php
    $sql = mysqli_query($con, "SELECT * FROM forum_replies WHERE RealThreadID = $_GET[post_id]");
    if(mysqli_num_rows($sql) > 0){
    }
?>


    

<?php
$i=0;


while($row = mysqli_fetch_array($sql)){

    ?>


   <p class="thread"><?php echo $row["reply_body"]?><br/><span style="font-size:18px;"><?php echo $row["reply_owner"]?></span><br/></p>
    
    <?php
    $i++;
}
?>
</table>
<?php
    $post_id = $_GET['post_id'];
    ?>
<form method="post" action="replyHandler.php?post_id=<?php echo $post_id?>" id="replyCreation">
    <textarea name="replyBody" cols="50" rows="8"></textarea>
    <input id="replySubmit" type="submit" value="Submit reply" />
</form>

    </body>
</html>