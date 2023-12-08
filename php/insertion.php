<?php
$servername = "localhost";
$username = "23mca007";
$password = "2199";
$dbname = "23mca007";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (Name,Course,Age)
VALUES ('$_POST[name]','$_POST[course]','$_POST[age]')";

if($conn->query($sql) === TRUE){
	$sql1="select * from student";
	$result=$conn->query($sql1);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Id: " . $row["Id"]. "  Name: " . $row["Name"]. "  Course:" . $row["Course"]." Age: " . $row["Age"]. "<br>";
  }
} else {
  echo "0 result";
}

$conn->close();
?>