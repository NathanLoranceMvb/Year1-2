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
    .telaat {
        text-align: center;
        color: #f00;
        font-weight: bold;
    }

    .ergtelaat {
        text-align: center;
        color: #fff;
        background-color: #f00;
        font-weight: bold;
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
            <tr>
                <td>
                    Aron
                </td>
                <td>
                    10C
                </td>
                <td class="telaat"> 0 </td>
                <td>
                    Komt nooit te laat!
                </td>
                <td><a href="verwijder.php?id=9" class="btn btn-danger">verwijder</a></td>
            </tr>
            <tr>
                <td>
                    Nora
                </td>
                <td>
                    10A
                </td>
                <td class="ergtelaat"> 33 </td>
                <td>
                    Had vanochtend echt even geen zin in school.
                </td>
                <td><a href="verwijder.php?id=5" class="btn btn-danger">verwijder</a></td>
            </tr>
            <tr>
                <td>
                    Jack
                </td>
                <td>
                    10A
                </td>
                <td class="ergtelaat"> 120 </td>
                <td>
                    Ik had gisteren een feestje en het werd nogal gezellig.
                </td>
                <td><a href="verwijder.php?id=4" class="btn btn-danger">verwijder</a></td>
            </tr>
            <tr>
                <td>
                    Mustafa
                </td>
                <td>
                    10D
                </td>
                <td class="telaat"> 18 </td>
                <td>
                    Ik heb een wekker van De Action. En die doen het niet goed.
                </td>
                <td><a href="verwijder.php?id=3" class="btn btn-danger">verwijder</a></td>
            </tr>
            <tr>
                <td>
                    Annabel
                </td>
                <td>
                    10B
                </td>
                <td class="telaat"> 3 </td>
                <td>
                    De tram had een lekke band en de conducteur kon hem niet snel plakken.
                </td>
                <td><a href="verwijder.php?id=2" class="btn btn-danger">verwijder</a></td>
            </tr>
            <tr>
                <td>
                    Piet
                </td>
                <td>
                    10B
                </td>
                <td class="telaat"> 14 </td>
                <td>
                    Verslapen want mijn wekker ging niet af. Stroom was gisteren uitgevallen en mijn GSM was leeg.
                </td>
                <td><a href="verwijder.php?id=1" class="btn btn-danger">verwijder</a></td>
            </tr>
        </table>
        <br>
        <a href="nieuw.php" class="btn btn-success">W&eacute;&eacute;r eentje te laat!</a>
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
                    <td>120</td>
                </tr>
                <tr>
                    <td>Gemiddeld aantal minuten</td>
                    <td>31.3333</td>
                </tr>
                <tr>
                    <td>Totaal aantal minuten</td>
                    <td>188</td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
    </main>
</body>

</html>