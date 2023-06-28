<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class=pain> 
<form name="klassenformulier.php" style="pain.
  width: 160px;
  padding: 30px;
  border: 5px solid black;
  margin: 60px;
  max-width: 160px;">
  
    <label for="klas">ik zit in klas:</label>
    <select>
<?php
$klassen = array("8A", "8B", "8C", "8D", "9A", "9B", "9C", "9D", "9E");
foreach($klassen as $klas) {
echo "<option>" . $klas . "</option>";
} 

?>
<select>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>