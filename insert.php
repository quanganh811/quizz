<?php
include 'result.php';


// Create connection
$conn = mysqli_connect("localhost", "root", "123456", "player_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
}






if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    
  $s=$_SESSION['score'];
  

  $sql = "INSERT INTO list (id,name, score) VALUES ('', '$name', $s)";
  "UPDATE list";
  if ($conn->query($sql) === TRUE) {
 
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  
}


?>