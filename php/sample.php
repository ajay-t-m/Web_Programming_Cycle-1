<?php
$servername = "localhost";
$username = "23mca007";
$password = "2199";
$dbname = "23mca007";

name=$_POST["name"]
course=$_POST["course"]
age=$_POST["age"]
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (Name,Course,Age)
VALUES (name,course,age)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>