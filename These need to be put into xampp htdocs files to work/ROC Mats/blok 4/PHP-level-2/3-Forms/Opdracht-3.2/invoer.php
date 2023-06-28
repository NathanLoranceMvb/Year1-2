<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

<body>

    <form name="login" action="mijngegevens.php" method="post">

        voornaam:<input type="text" name="voornaam" placeholder="voornaam"><br>
        achternaam:<input type="text" name="achternaam" placeholder="achternaam"><br>
        klas:<input type="text" name="klas" placeholder="klas"><br>
        leeftijd:<input type="text" name="leeftijd" placeholder="leeftijd"><br>
        adres:<input type="text" name="adres" placeholder="adres"><br>
        woonplaats:<input type="text" name="woonplaats" placeholder="woonplaats"><br>

        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>
            value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>
            value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>
            value="other">Other
        <br>

        <select name="color">
            <?php
$kleur = array("green", "red", "white", "orange", "blue", "yellow");
foreach($kleur as $color) {
echo "<option value='$color'>" . $color . "</option>";
} 
?>
            <br>
            <select>
                <input type="submit" value="submit">

                </div>
</body>