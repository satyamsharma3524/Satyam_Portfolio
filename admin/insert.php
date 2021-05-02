<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Create Variables
$name = $_POST['name'];
$email = $_POST['email'];
$subjects = $_POST['subjects'];
$messages = $_POST['messages'];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Contact (names, email, subjects, messages)
VALUES ('$name', '$email', '$subjects', '$messages')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 