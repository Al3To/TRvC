<?php
include '../dbConnect.php';
$username = $_POST['Username'];
$password = $_POST['Password'];

$sql = "SELECT username, pswd FROM accounts where username = " . $username;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>