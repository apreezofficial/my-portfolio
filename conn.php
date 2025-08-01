<?php
// Database credentials
$host = '0.0.0.0';        
$dbName = 'portfolio';  
$username = 'root'; 
$password = 'root'; 

// Create connection
$conn = new mysqli($host, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// utf8mb4 for full Unicode support
$conn->set_charset("utf8mb4");
?>