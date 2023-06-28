<?php
require "database.php";

$sql = "SELECT * FROM student;";

$stmt = $conn->prepare($sql);
$stmt->execute();

// set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$results = $stmt->fetchAll();