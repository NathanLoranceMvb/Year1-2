<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitals</title>
</head>

<body style="text-align: left; line-height: 30px;">
    <div class="container">
        <?php

        session_start();
        isset($_SESSION['gamePlayed']) ?: $_SESSION['gamePlayed'] = 1;
        isset($_SESSION['correctAntwoord']) ?: $_SESSION['correctAntwoord'] = 0;
        isset($_SESSION['wrongAnswer']) ?: $_SESSION['wrongAnswer'] = 0;
        $landen = [
            "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
            "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
            "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
            "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London",
            "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin",
            "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
            "Poland" => "Warsaw"
        ];
        asort($landen);
        $randomcountrykey = array_rand($landen, 1);
        $correctAntwoord = $landen[$randomcountrykey];
        $isCorrect = false;
        $isNietCorrect = false;

        if (isset($_POST['capital']) && isset($_POST['correctAntwoord']) && isset($_POST['button'])) {
            $_SESSION['gamePlayed']++;
            if ($_POST['capital'] == $_POST['correctAntwoord']) {
                $isCorrect = true;
                $_SESSION['correctAntwoord']++;
            } else {
                $isNietCorrect = true;
                $_SESSION['wrongAnswer']++;
            }
        }
        ?>

        <form class="d-flex justify-content-center mt-5" method="POST">
            <div class="form-group w-50 ">
                <div class="mb-0 text-center h3">What is the capital of: <?php echo $randomcountrykey ?></div><br>
                <div class="d-flex flex-row">
                    <select name="capital" class="form-select mb-0">
                        <?php foreach ($landen as $capital) { ?>
                            <option name="capital"><?php echo $capital; ?></option>;
                        <?php } ?>
                    </select>
                    <a style="margin-left:1%;" href="reset.php"><button class="btn btn-primary" type="button" name="reset">Reset<i class="fa-solid fa-arrows-rotate"></i></button></a>
                </div>
                <input type="hidden" name="correctAntwoord" value="<?php echo $correctAntwoord; ?>">
                <br>
                <div class="d-flex flex-row">
                    <button style="margin-right:1%;" class="btn btn-success" type="submit" name="button">Check my answer</button><br>
                    <span style="margin-right:1%;">Games: <?php echo $_SESSION['gamePlayed']; ?></span><br>
                    <span style="margin-right:1%;">Won: <?php echo $_SESSION['correctAntwoord']; ?></span><br>
                    <span>Lost: <?php echo $_SESSION['wrongAnswer']; ?></span><br>
                </div>
                <div class="text-left">
                    <?php
                    if ($isNietCorrect || $isCorrect) {

                        if ($isCorrect) {
                            echo "The answer " . $_POST['capital'] . " is <b class='text-success'> correct!</b>";
                        } else {
                            echo "The answer " . $_POST['capital'] . " is <b class='text-danger'> incorrect!</b>";
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>

</html>