<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complain-regd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 else{
    echo "Complaint is  successfully Registered...";
 }

// Close the database connection
// $conn->close();
?>