<?php
$servername = "localhost";
$username = "23mca007";
$password = "2199";
$dbname = "23mca007";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, Name, Course,Age FROM student where Id='$_POST[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Id: " . $row["Id"]. " <br> Name: " . $row["Name"]. " <br> Course:" . $row["Course"]."<br> Age: " . $row["Age"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>