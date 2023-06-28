<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="PHP-O7-Mats-van-Bork.php" method="get">
        Getallen?: <input type="text" name="getallen"><br>
        <input type="submit">
        <?php
        if(isset ($_GET['getallen'])){
        
            $arrayGetallen = explode(",", $_GET['getallen']);
            sort($arrayGetallen); 
        
        ?>

        <p>
            Getallen gesorteerd: <?php print_r ($arrayGetallen);?>
        </p>
        <p>
            Aantal ingevoerde getallen: <?php echo count($arrayGetallen)?>
        </p>
        <?php 
        }
    
    ?>


    </form>

</body>

</html>