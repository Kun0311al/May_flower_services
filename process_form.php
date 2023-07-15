<?php
// Retrieve form data
$name = $_POST['pName'];
$email = $_POST['pEmail'];

// Database connection settings
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mayflower';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO contactus (Name, Email) VALUES ('$name', '$email')";

if ($conn->query($sql) === true) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
