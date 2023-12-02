<?php
$servername = "localhost";
$username = "23mca007";
$password = "2199";
$dbname = "23mca007";

//$id=test_input($_POST["id"]);
//$name=test_input($_POST["name"]);
//$course=test_input($_POST["course"]);
//$age=test_input($_POST["age"]);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (Name,Course,Age)
VALUES ('$_POST[name]','$_POST[course]','$_POST[age]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>