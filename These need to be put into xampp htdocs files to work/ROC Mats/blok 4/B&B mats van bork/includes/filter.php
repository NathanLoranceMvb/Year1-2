<section>
    <div class="container mt-4 mb-1">
    <p>
        <!-- toggle knop voor de filter -->
        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
        Filter op faciliteiten</button>
    </p>
        <div class="row">
            <div class="col-sm">
            <div class="collapse" id="collapseFilter">
                <div class="card card-body">
                    <!--start filter form -->
                    <form name="filter" id="filter" method="GET" action="index.php">
                        <?php
                            //de faciliteiten komen uit de database, tabel faciliteiten, we moeten de data dus ophalen
                            //gebruik de juiste query om de faciliteiten uit de database te halen
                            //Je moet aan de functie getData 2 waardes meegeven: de sql statement, een rij of alle rijen (fetch, fetchAll), de functie staat boven aan de pagina, bekijk hem goed!
                            
                            $tblFacilities = getData("SELECT * FROM `facilities`", "fetchAll");
                            //$tbl_facilities is nu een array die we kunnen gebruiken om de formulier velden te maken

                            //naast de data uit de database moeten we ook kijken of de gebruiker de filter heeft gebruikt
                            //hiervoor moeten we checken of het formulier filter is gesubmit en er faciliteiten zijn aangevinkt
                            //is de form voor het filteren gesubmit, zie de waarde van de button START op regel 90?
                            if(isset($_GET["formFacilities"])){
                                //zet alle geselecteerde waardes in een array
                                $arrFrmFilter = $_GET["formFacilities"];

                                //als de gebruiker een filter heeft gebruikt is dat wel zo netjes om te laten zien, hiervoor maken we een lege variabele $selection aan die we in de foreach loop vullen en dan laten terug komen in de pagina onder de filter
                                $selection = "";
                                //ook even een variabele $filter aanmaken, deze gebruiken we om te checken of er wel (true) of niet (false) gefiltert wordt
                                $filter = true;
                            }
                            else {
                                //lege waarde aanmaken voor $arrFrmFilter anders krijg je een foutmelding als er niks gefiltert wordt
                                $arrFrmFilter = [];
                                $filter = false;
                                //$selection = "";
                            }

                            //we gebruiken een variabele $counter zodat er geen , na het laatste item komt
                            $counter = 0;

                            foreach($tblFacilities as $row) { //loop door de array 
                                //we moeten ook nog checken of dit een geselecteerde waarde is in de filter zodat we de checkbox weer aanzetten
                                //Dit doen we door te zoeken of de waarde van deze faciliteit in de array $arrFormFac voorkomt, zie regel 84: if(in_array($row["fac_id"], $arrFrmFilter)){echo "checked";}

                                if(in_array($row["facility_id"], $arrFrmFilter)){ 
                                    //voeg een , toe tussen de faciliteiten behalve bij de laatste, daar gebruiken we de counter voor
                                    if($counter < count($arrFrmFilter)-1) {
                                        $selection .=  $row["facility_name"] . ", ";
                                    }
                                    else{
                                        $selection .=  $row["facility_name"];
                                    }

                                    $counter++;
                                }
                            ?>

                                <!-- hier de html voor een faciliteit waarop gefiltert kan worden, met de naam em id van de faciliteiten die in de database staan -->    
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="<?php echo $row["facility_id"];?>" id="<?php echo $row["facility_id"];?>" name="formFacilities[]" <?php if(in_array($row["facility_id"], $arrFrmFilter)){echo "checked";}?>>
                                    <label class="form-check-label" for="<?php echo $row["facility_id"];?>"><?php echo $row["facility_name"];?></label>
                                </div>

                            <?php } //einde van de loop ?>
                            
                        <!-- de stbmit button, om het filteren te activeren en de form te submitten -->
                        <button type="submit" name="submit_filter" value="submit" class="btn btn-primary  mb-4 mt-2">Filter</button>
                    </form><!-- end filter form -->
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<?php
//aan de gebruiker laten zien waar hij op gefiltert heeft, de elementen staatn in de variabele $selection die we in de if statement op regel 48 vullen
if($filter == true){?>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-primary" role="alert">je hebt gefilterd op: <?php echo $selection; ?></div>
            </div>
        </div>
    </div>
</section>
<?php } //einde if statement ?>