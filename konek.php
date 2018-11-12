<?php
$servername = 'localhost';
$Username = 'root';
$Class = '';
$database = 'database22';

$conn = new mysqli($servername,$Username,$Class,$database);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
echo "";

 ?>
