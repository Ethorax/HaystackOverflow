<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: Login.html');
        exit;
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
        <a href="chat.html">
            <button>Chat</button>
        </a>
        <a href="aboutus.html">
            <button>About Us</button>
        </a>
        <a href="profile.php" id="profile-button">
            <button>Profile</button>
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

<body>
    <h1>Post thread</h1>

    <form action="threadcreate.php" method="post" id="threadcreation">
        <textarea id="threadtitle" name="threadtitle" rows="1" cols="80" placeholder="Thread title..."></textarea>
        <textarea id="threadbody" name="threadbody" rows="10" cols="80" placeholder="Thread body..."></textarea>
        
        <select id="threaddropdown" name="threaddropdown">
        <option value="Cropping">Cropping</option>
        <option value="Arable Marketing">Arable Marketing</option>
        <option value="Dairy">Dairy</option>
        <option value="Pig and Poultry">Pig and Poultry</option>
        <option value="Health">Health</option>
        <option value="Forage">Forage</option>
        <option value="Modern Machine">Modern Machine</option>
        <option value="Classic Machine">Classic Machine</option>
        <option value="DIY Machine">DIY Machine</option>
        <option value="Precision/GPS">Precision/GPS</option>
        <option value="Competition">Competition</option>
        <option value="Family">Family</option>
        <option value="Children">Children</option>
        <option value="Food">Food</option>
        </select>
        
        <input id="threadsubmit" type="submit" value=" Post ">
        </form>
</body>