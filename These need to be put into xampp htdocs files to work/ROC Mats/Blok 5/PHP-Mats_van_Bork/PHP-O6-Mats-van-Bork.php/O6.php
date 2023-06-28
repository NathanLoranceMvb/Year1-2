<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="O6.php" method="get">
        Getallen?: <input type="text" name="getallen"><br>
        <input type="submit">
        <?php $arrayGetallen = explode(",", $_GET['getallen']);
        ?>
        <p>
            Aantal ingevoerde getallen: <?php echo count($arrayGetallen)?>
        </p>
        Totaal van alle getallen: <?php echo array_sum($arrayGetallen)?>
        <p>
        </p>
        <p>
            Gemiddelde van alle getallen: <?php echo array_sum($arrayGetallen) / count($arrayGetallen)?>
        </p>


    </form>

</body>

</html>