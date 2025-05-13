<?php
$servername = "db"; // The name of the DB service in Docker Compose
$username = "root";  // MySQL username
$password = "password"; // MySQL password
$dbname = "my_database"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
