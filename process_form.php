<?php
// Retrieve form data
$name = $_POST['pName'];
$email = $_POST['pEmail'];

// Database connection settings
$servername = 'bom1plzcpnl503502';
$username = 'dataeditor';
$password = 'Mayflower!12';
$dbname = 'mayflower_userdb';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO Contactdetails (User_Name, Email) VALUES ('$name', '$email')";

if ($conn->query($sql) === true) {
    echo "Data inserted successfully!";
    header("refresh: 2; url = https://mayflowertruckpermits.com/");
} else {
    echo "Error: ";
}

// Close the database connection
$conn->close();
?>
