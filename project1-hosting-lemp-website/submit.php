<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lemp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect POST data
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Insert into table
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
