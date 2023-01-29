<?php
$conn = new mysqli("localhost","db22_110","db22_110","db22_110");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
$conn->set_charset("utf8");
// echo "Connected successfully";
// if ($conn->select_db("quotations")){
//     echo"Yes";
// }
?>