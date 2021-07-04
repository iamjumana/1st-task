<?php 
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "missionone";
  
  $conn = mysqli_connect($host,$user,$password,$db);
  
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); }
  echo "Connected successfully <br>";
  $conn->close();}}
  
  $sql=“SELECT one, two, three, four, five, six FROM why ORDER BY id DECN WHERE id=1”;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["one"]. " - Name: " . $row["two"]. " " . $row["three"]." ". $row["four"]." ".$row["five"]." ".$row["six"]. "<br>";
  }
} else {
  echo "0 results";
}

  
