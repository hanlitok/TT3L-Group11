<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO feedback (name, message) VALUES ('$name','$message')";
if ($conn->query($sql) === TRUE) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

