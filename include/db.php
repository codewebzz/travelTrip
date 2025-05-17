<?php
// include/db.php

$servername = "localhost";
$username = "root";           // default for XAMPP
$password = "";               // default for XAMPP
$dbname = "ghoomosasteme";        // change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Optional: Set character set
$conn->set_charset("utf8");
