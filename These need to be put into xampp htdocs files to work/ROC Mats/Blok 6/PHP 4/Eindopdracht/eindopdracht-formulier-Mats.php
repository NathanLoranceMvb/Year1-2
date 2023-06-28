<?php include "eindopdracht-resultaat-Mats.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Reisadvies</title>
    <style>
        .kader {
            border: 1px solid white;
            padding: 25px;
            margin-bottom: 15px;
        }

        .container {
            width: 100%;
            padding-right: 0px;
            padding-left: 0px;
        }
    </style>
</head>

<body>

    <main style="width: 900px; margin: 20px auto;">
        <div class="alert alert-secondary">

            <?php

            if (isset($_POST["submit"])) {

                $lengte = $_POST['lengte'];
                $vertragingDoorFile = $_POST['vertragingDoorFile'];

                $bandenSpanningFiets = $_POST['bandenspanningFiets'];
                $snelheidFiets = $_POST['snelheidFiets'];

                $bandenSpanningScooter = $_POST['bandenspanningScooter'];
                $snelheidScooter = $_POST['snelheidScooter'];
                $weg = new Weg();

                $weg->lengte = $lengte;
                $weg->vertragingDoorFile = $vertragingDoorFile;

                $fiets = new voertuig();
                $fiets->bandenSpanning = $bandenSpanningFiets;
                $fiets->snelheid = $snelheidFiets;
                $fietsSnelheid = $fiets->snelheid($weg);
                $fietsreistijd = $fiets->reistijd($weg);

                $scooter = new voertuig();
                $scooter->bandenSpanning = $bandenSpanningScooter;
                $scooter->snelheid = $snelheidScooter;
                $scooterSnelheid = $scooter->snelheid($weg);
                $scooterreistijdzonderfille = $scooter->reistijd($weg);
                $scooterreistijd = $scooterreistijdzonderfille + $vertragingDoorFile;

                if ($scooterreistijd > $fietsreistijd) {
                    $beterVoertuig = "fiets";
                } else {
                    $beterVoertuig = "scooter";
                }
            ?>
                Snelheid met de fiets: <?php echo $fietsSnelheid; ?> kilometer per uur<br>
                Reistijd met de fiets: <?php echo round($fietsreistijd, 0); ?> minuten <br><br>
                Snelheid met de scooter: <?php echo $scooterSnelheid; ?> kilometer per uur<br>
                Reistijd met de scooter: <?php echo $scooterreistijd; ?> minuten <br><br>
        </div>

        <div class="alert alert-primary">
            <h4>Je kunt maar beter met de <?php $beterVoertuig; ?> gaan!</h4>
        </div>

    <?php } ?>
    <div class="container">

        <div class="card">
            <div class="card-header bg-success">
                <h4>Gegevens voor reisadvies</h4>
            </div>
            <div class="card-body bg-dark">
                <form action="eindopdracht-formulier-Mats.php" method="post">
                    <div class="kader">
                        <div class="alert alert-success">Weg</div>
                        <div class="form-group">
                            <label for="lengte">Lengte (in KM):</label>
                            <input type="number" class="form-control" value="1" id="lengte" placeholder="Voer het aantal KM in." name="lengte" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="vertragingDoorFile">Vertraging door file (in minuten):</label>
                            <input type="number" class="form-control" value="1" id="vertragingDoorFile" placeholder="Aantal minuten vertraging door file" name="vertragingDoorFile" value="" required>
                        </div>
                    </div>
                    <div class="kader">
                        <div class="alert alert-success">Fiets</div>
                        <div class="form-group">
                            <label for="bandenspanningFiets">Bandenspanning (in %):</label>
                            <input type="number" class="form-control" value="1" id="bandenspanningFiets" placeholder="Bandenspanning Fiets" name="bandenspanningFiets" value="" required>
                        </div>

                        <label class="checkbox-inline" style="margin-right: 20px;">
                            <input type="radio" name="snelheidFiets" value="15" style="opacity: 1;" required> Niet
                            Elektrisch (fietssnelheid = 15km/u)
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="snelheidFiets" value="25" style="opacity: 1;" required>
                            Elektrisch (fietssnelheid = 25km/u)
                        </label>
                    </div>
                    <div class="kader">
                        <div class="alert alert-success">Scooter</div>
                        <div class="form-group">
                            <label for="bandenspanningScooter">Bandenspanning (in %):</label>
                            <input type="number" class="form-control" value="1" id="bandenspanningScooter" placeholder="Bandenspanning Scooter" name="bandenspanningScooter" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="snelheidScooter">Snelheid:</label>
                            <select class="form-control" id="snelheidScooter" name="snelheidScooter">
                                <option value="25">25 KM/u (snorscooter)</option>
                                <option value="45">45 KM/u (bromscooter)</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Geef reisadvies</button>
                </form>
            </div>
        </div>
    </div>
    </main>
</body>

</html>