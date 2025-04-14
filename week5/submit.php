<?php
$servername = "localhost";
$username = "root";
$password = ""; // Update if your root has a password
$database = "lemp_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receive data from form
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$city = $_POST['city'] ?? '';
$phone = $_POST['phone'] ?? '';

// Simple validation
if (empty($name) || empty($email)) {
    echo "Name and Email are required fields!";
    exit;
}

// Prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO users (name, email, city, phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $city, $phone);

// Execute
if ($stmt->execute()) {
    echo "<h2>Thank you, $name! Your data has been submitted successfully.</h2>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
