<?php
    //gegevens van de faciliteiten bij dit huisje uit de database halen, fetch want je krijgt maar een rij terug...
    $sql = "SELECT facilities.facility_name FROM `cottages_facilities` INNER JOIN facilities ON facilities.facility_id=cottages_facilities.facility_id WHERE cottages_facilities.cottage_id = " . $cottageID; //$cottageID is de variabele met de ID van de huisjes, check: heb ik hem zo genoemd?
    $tblFacilities = getData($sql, "fetchAll");
?>
                <h4>Faciliteiten</h4>
                    <ul class="list-group list-group-flush">
                        <?php
                        //for each om de facilities uit de array $tblFacilities te halen
                        foreach($tblFacilities as $facility) { ?>
                            <li class="list-group-item"><?php echo $facility["facility_name"];?></li>
                        <?php } //end foreach ?>
                    </ul>