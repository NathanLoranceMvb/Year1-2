<?php
require "database.php";

$id = $_GET["id"];

$sql = "DELETE FROM student WHERE id = $id;";

$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location: /CRUD/index.php");