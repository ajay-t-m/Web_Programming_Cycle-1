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

$sql = "SELECT  Id,Course,Name FROM student order by Name ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Course"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>