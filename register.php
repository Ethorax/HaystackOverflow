<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $servername = "localhost";
    $dbusername = "root";
    $password = "";
    $dbname = "HaystackOverflow";
    
    // Create connection
    $conn = new mysqli($servername, $dbusername, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `accounts` (`username`, `password`, `email`)
    VALUES ('$username', '$password', '$email')";
    mysqli_query($conn, $sql);
    
    
    $conn->close();
    header('Location: login.html');
    ?>
