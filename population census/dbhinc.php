<?php
// Database connection configuration
$servername = "localhost"; // Replace with your database host
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "population census"; // Replace with your database name

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

echo "Database connection successful!";
