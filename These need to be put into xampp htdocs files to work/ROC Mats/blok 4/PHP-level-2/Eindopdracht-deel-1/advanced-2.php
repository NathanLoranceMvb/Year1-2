<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logged in</title>
    <style>
    body {
        background: <?php echo $_POST["color"] ?>;
    }

    th,
    td {
        color: <?php echo $_POST["tekst"]?>;
    }

    tr {
        background-color: white;
        padding: <?php echo $_POST["padding"]?>px;
        border: <?php echo $_POST["table"]?>px solid black;
    }

    table,
    th,
    td {
        border: 5px solid black;
    }
    </style>
</head>

<body>
    <?php $mats = array("voornaam"=>"mats", "achternaam"=>"van bork", "klas"=>"1B", "leeftijd"=>19);?>

    <table>
        <tr>
            <th>voornaam</th>
            <th>achternaam</th>
            <th>klas</th>
            <th>leeftijd</th>
        </tr>
        <tr>
            <td><?php echo $mats ['voornaam'];?></td>
            <td><?php echo $mats ['achternaam']?></td>
            <td><?php echo $mats ['klas']?></td>
            <td><?php echo $mats ['leeftijd']?></td>
        </tr>
    </table>
</body>

</html>