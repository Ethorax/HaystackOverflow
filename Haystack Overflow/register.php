<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "HaystackOverflow";
    
    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    echo "<p>This is my password: ".$password."</p>";
    $sql = "INSERT INTO `accounts` (`username`, `password`, `email`)
    VALUES ('$username', '$password', '$email')";
    mysqli_query($conn, $sql);
    
    
    $conn->close();
    header('Location: login.html');
    ?>
