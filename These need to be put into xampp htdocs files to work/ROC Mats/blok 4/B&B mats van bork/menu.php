
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cottage Rentals</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Huisjes</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        //haal alle huisjes op uit de database, gebruik hiervoor de functie getData() geef aan getData de juiste argumenten mee
                        //1. de sql statement ("SELECT * FROM `cottages`") en 2 of je alle rijen (fetchAll) of maar een rij als resultaat terug wil zien.
                        //In dit geval is het al juist voor je ingevuld
                        $tblCottages = getData("SELECT * FROM `cottages`", "fetchAll");
                        foreach($tblCottages as $cottage) {
                        //maak hieronder een forach loop om door de array $tblCottages te lopen
                        //zet hier de juiste code neer voor de foreach loop 
                        ?>
                            <li><a class="dropdown-item" href="huisjes.php?cottageID=<?php echo $cottage["cottage_id"];?>"><?php echo $cottage["cottage_name"];?></a></li>
                            <!--gebruik jij niet de naam $cottage in je foreach loop pas de code op regel 22 dan aan! -->
                        <?php
                        } //end foreachloop alvast voor je neergezet ?>
                        </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


