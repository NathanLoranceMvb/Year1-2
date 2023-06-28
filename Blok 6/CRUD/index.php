<?php
include "read.php";

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        </script>
        <link rel="stylesheet" href="Styles/bootstrap.min.css">
        <title>Overzicht studenten te laat in de les</title>
        <style>
            .telaat{
            text-align:center; 
            color:#f00; 
            font-weight:bold;
            }
            .ergtelaat{
            text-align:center; 
            color:#fff; 
            background-color: #f00;
            font-weight:bold;
            }
        </style>
    </head>
    <body>
        <main style="width: 900px; margin: 20px auto;">
            <h4>Overzicht studenten die te laat waren</h4>
            <table class="table table-striped">
                <tr>
                    <th nowrap>Naam student</th>
                    <th>Klas</th>
                    <th nowrap>Minuten te laat</th>
                    <th>Reden te laat</th>
                    <th>
                        <!--<a href="reset.php" class="btn btn-info">Reset</a>-->

                    </th>
                </tr>
                <?php 
                $hoogsteAantalMinuten = 0;
                $totaalAantalMinuten = 0;

                
                foreach($results as $studentInfo){
                    $totaalAantalMinuten += $studentInfo["minuten_te_laat"];
                    if($hoogsteAantalMinuten <= $studentInfo["minuten_te_laat"]){
                        $hoogsteAantalMinuten = $studentInfo["minuten_te_laat"];
                    }

                    if($studentInfo["minuten_te_laat"] <= 20){
                    $telaat = 'telaat'; 
                    } else {
                        $telaat = 'ergtelaat';
                    }
                    echo "
                    <tr>
                        <td>
                    
                        {$studentInfo["naam"]}
                                            
                        </td>
                        <td>
                        {$studentInfo["klas"]}                   
                        </td>
                        <td class='$telaat'> {$studentInfo["minuten_te_laat"] }   </td>
                        <td>
                        {$studentInfo["reden"] }                  
                        </td>
                        <td><a href='delete.php?id={$studentInfo["id"] } ' class='btn btn-danger'>verwijder</a></td>
                    </tr>";

                }
                $frequency = count($results);
                $gemiddeldAantalMinuten = $totaalAantalMinuten / $frequency;

                ?>

            
            </table>
            <br>
            <a href="C:\xampp\htdocs\CRUD\create.php" class="btn btn-success">W&eacute;&eacute;r eentje te laat!</a> 
            <!-- Hieronder komt de statistieken tabel van stats.php -->
            <br><br><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th rowspan="2">Statistieken</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hoogste aantal minuten te laat</td>
                        <td><?php echo $hoogsteAantalMinuten ?></td>
                    </tr>
                    <tr>
                        <td>Gemiddeld aantal minuten</td>
                        <td><?php echo $gemiddeldAantalMinuten ?></td>
                    </tr>
                    <tr>
                        <td>Totaal aantal minuten</td>
                        <td><?php echo $totaalAantalMinuten ?></td>
                    </tr>
                </tbody>
            </table>
            <br><br><br>
        </main>
    </body>
</html>