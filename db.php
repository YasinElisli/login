<?php
//parametrler
$username = "root";
$pass = "";
$database = "test";
$host = "localhost";
//connect database
$conn = new mysqli($host,$username,$pass,$database);
//test connection
if (mysqli_connect_errno()) {
  echo "MYSQL-e Qosulmadi" . mysqli_connect_error();
}
//Azerbaycan srifleri ucun query
$simvol = "SET NAMES UTF8";
$conn->query($simvol);

 ?>
