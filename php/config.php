<?php

$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "project3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully to the database.";
}
