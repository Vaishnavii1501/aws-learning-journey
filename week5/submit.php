<?php
$servername = "localhost";
$username = "root";
$password = "";  // Your MySQL root password if set
$dbname = "lemp_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$phone = $_POST['phone'];

// Insert into database
$sql = "INSERT INTO users (name, email, city, phone) VALUES ('$name', '$email', '$city', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Signup successful! Welcome, " . htmlspecialchars($name) . "!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
