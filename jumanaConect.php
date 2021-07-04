<?php 
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "missionone";
  
  $conn = mysqli_connect($host,$user,$password,$db);
  
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); }
  echo "Connected successfully <br>";
  
  if(isset($_POST['SAVE'])){
    
    $Engine1 =$_POST['s1'];
    $Engine2 =$_POST['s2'];
    $Engine3 =$_POST['s3'];
    $Engine4 =$_POST['s4'];
    $Engine5 =$_POST['s5'];
    $Engine6 =$_POST['s6'];
    
    $query= "INSERT INTO why (one, two, three, four, five, six)
	VALUES ('$Engine1', '$Engine2', '$Engine3', '$Engine4', '$Engine5', '$Engine6')";
   if (mysqli_query($conn, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}}

  
  
  
  if(isset($_POST['START'])) {
  
    $my_query = "";
    $my_query = "select * from motors ";
	
     if (mysqli_query($conn, $my_query)) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

  $conn->close();}}
?>
