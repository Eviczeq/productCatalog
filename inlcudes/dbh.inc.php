<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "catalog";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn->exec("set names utf8");


try {
  $countSql = "SELECT COUNT(Number) FROM `placeholder`";
  $countResult=$conn ->query($countSql);
  $countRow = $countResult-> fetchColumn();
  $numberRow = intval($countRow) + 1;
      } catch(PDOException $e){
          die("ERROR: Could not able to execute $sql. " . $e->getMessage());
      }
?>