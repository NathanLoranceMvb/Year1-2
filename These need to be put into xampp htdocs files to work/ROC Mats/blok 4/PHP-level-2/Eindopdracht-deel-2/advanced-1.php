<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

<body>

    <form name="login" action="advanced-2.php" method="post">

        <input type="text" name="padding" placeholder="Cel-padding (px):"><br>
        <input type="teks" name="table" placeholder="Tabelranddikte (px):"><br>
        <p>achtergrond kleur
            <select name="color">
                <?php
            $kleuren = array("red", "blue", "green", "black", "brown","white");
            foreach($kleuren as $color) {
            echo "<option value='$color'>" . $color . "</option>";} 
        ?>
            </select>
        </p>

        <p>tekst kleur
            <select name="tekst">
                <?php
            foreach($kleuren as $tekst) {
            echo "<option value='$tekst'>" . $tekst . "</option>";} 
        ?>
            </select>
        </p>
        <br><br>
        <input type="submit" value="submit">

        </div>
</body>