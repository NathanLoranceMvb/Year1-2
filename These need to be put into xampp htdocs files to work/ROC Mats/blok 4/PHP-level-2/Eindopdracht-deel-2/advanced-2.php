<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background: <?php echo $_POST["color"] ?>;
    }

    p {
        color: <?php echo $_POST["tekst"] ?>;
    }

    td {
        background-color: white;
        padding: <?php echo $_POST["padding"]?>px;

        border: <?php echo $_POST["table"]?>px solid black;

        /* border: 1px solid black; */

    }
    </style>
</head>

<body>
    <?php $mats = array("naam" => "mats van bork", "leeftijd" => 19, "klas" => "1B", "muziek" => "Electro", "merkfiets" => "Batavus", "woonplaats" => "Amsterdam", "eten" => "Pizza"); ?>

    <table>
        <tr>
            <th>key</th>
            <th>value</th>
        </tr>

        <tr>
            <td>Naam</td>
            <td><?php echo $mats['naam']; ?></td>
        </tr>

        <tr>
            <td>leeftijd</td>
            <td><?php echo $mats['leeftijd']; ?></td>
        </tr>

        <tr>
            <td>klas</td>
            <td><?php echo $mats['klas']; ?></td>
        </tr>

        <tr>
            <td>muziek</td>
            <td><?php echo $mats['muziek']; ?></td>
        </tr>

        <tr>
            <td>merk fiets</td>
            <td><?php echo $mats['merkfiets']; ?></td>
        </tr>

        <tr>
            <td>woonplaats</td>
            <td><?php echo $mats['woonplaats']; ?></td>
        </tr>

        <tr>
            <td>Eten</td>
            <td><?php echo $mats['eten']; ?></td>
        </tr>
    </table>
</body>

</html>



<!-- style="background-color: <?php echo $_POST["color"] ?>;
color: <?php echo $_POST["tekst"] ?>;" -->