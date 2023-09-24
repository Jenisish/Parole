<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Connect to database
$host = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert data into table
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "Data stored successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
