<?php
$servername = "localhost:8080";
$username = "root";
$password = "";


try {
  // $conn = new PDO("mysql:host=$servername;dbname=database", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  // // set the PDO error mode to exception
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn = mysqli_connect($servername, $username, $password, "login");
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>