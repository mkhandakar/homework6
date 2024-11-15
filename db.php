// db.php
function getDatabaseConnection() {
   $conn = new mysqli("localhost", "csc350", "xampp", "grading_system");
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  return $conn;
}
      
