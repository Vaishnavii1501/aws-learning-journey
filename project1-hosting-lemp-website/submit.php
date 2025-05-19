<?php
$servername = "localhost";
$username = "root";
<<<<<<< HEAD
$password = "";  // Your MySQL root password if set
$dbname = "lemp_demo";
=======
$password = "";
$dbname = "lemp_db";
>>>>>>> 716b8a429779ec5fb0a01c22ef492efe08209877

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

<<<<<<< HEAD
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
=======
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
>>>>>>> 716b8a429779ec5fb0a01c22ef492efe08209877
}

$conn->close();
?>
