<?php
$servername = "localhost";
$username = "root"; //vul hier de juiste username van je database in
$password = ""; //vul hier het juiste paswoord van je database in
$dbname = "test_database"; //heb je de database ook echt zo genoemd?

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $err) {
  echo "Connection failed: " . $err->getMessage();
}
?>