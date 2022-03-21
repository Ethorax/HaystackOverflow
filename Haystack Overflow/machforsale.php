<?php
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
        <a href="chat.html">
            <button>Chat</button>
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
        		  <div id="myOverlay" class="overlay">
			<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
			<div class="overlay-content">
			  <form action="/action_page.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i>Go</button>
			  </form>
			</div>
		  </div>
		  <button class="openBtn" onclick="openSearch()">Search</button>
		  
		  <script>
		  function openSearch() {
			document.getElementById("myOverlay").style.display = "block";
		  }
		  
		  function closeSearch() {
			document.getElementById("myOverlay").style.display = "none";
		  }
		  </script>
    </div>
</head>
<h1 style="background-color: rgb(255, 255, 255, 0.6)">Machinery for Sale Forums</h1>
<div style="background-color:rgb(255, 255, 255, 0.6)">Make sure machines go to a loving home, or find the machine that is right for you.</div>
?>
