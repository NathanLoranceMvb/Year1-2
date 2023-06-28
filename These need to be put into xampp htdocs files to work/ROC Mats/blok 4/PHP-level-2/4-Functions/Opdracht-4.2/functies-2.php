<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
function rekenuit(int $a, int $b, int $c){
    $d = $a + $b + $c ;
    echo "Als ik de getallen $a, $b en $c bij elkaar optel, is de uitkomst $d";
    echo "<br>";
}
rekenuit(1, 2, 4);
rekenuit(2, 32, 24);
rekenuit(15, 52, 54);
rekenuit(17, 72, 84);
rekenuit(91, 02, 49);
?>
</body>

</html>