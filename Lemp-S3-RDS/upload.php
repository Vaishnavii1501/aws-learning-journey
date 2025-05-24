<?php
$host = "localhost";
$username = "root";
$password = "";  // Change this if your root password is set
$database = "facebook";

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $file = $_FILES['file'];

    // Simulate S3 and CloudFront URL creation
    $filename = basename($file["name"]);
    $s3url = "https://yourbucket.s3.amazonaws.com/" . $filename;
    $cfurl = "https://d123abc4cf.cloudfront.net/" . $filename;

    // Move the file to a local directory (simulating upload)
    move_uploaded_file($file["tmp_name"], "uploads/" . $filename);

    // Insert into MySQL
    $stmt = $conn->prepare("INSERT INTO posts (name, s3url, cfurl) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $s3url, $cfurl);
    $stmt->execute();

    echo "Post uploaded successfully!";
    $stmt->close();
}

$conn->close();
?>
