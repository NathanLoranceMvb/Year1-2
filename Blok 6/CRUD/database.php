<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


try {
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $err) {
    echo "Connection failed: " . $err->getMessage();
}
?>

