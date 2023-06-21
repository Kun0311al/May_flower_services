<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','mayflower');

// get the post records
$txtName = $_POST['pName'];
$txtEmail = $_POST['pEmail'];

// database insert SQL code
$sql = "INSERT INTO `contactus` (`Name`, `Email`) VALUES ('$txtName', '$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>