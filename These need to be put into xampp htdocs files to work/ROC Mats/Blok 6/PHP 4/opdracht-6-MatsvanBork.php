<?php
class scooter 
{
    public $kleur;
    public $merk;
    public $inhoudTank;

    public function checkinhoud(){
        if($this->inhoudTank >= 1 ){
            echo '<p>Er is brandstof in de tank.</p>';
            }
        else{
            echo '<p>De tank is leeg.</p>';
            return;
        }
    }
}


$Piago = new scooter();
    $Piago->merk = "<h3>Piago</h3>";
    $Piago->kleur = "<p>rood</p>";
    $Piago->inhoudTank=6;

        echo $Piago->merk;
        echo $Piago->kleur;
        $Piago->checkInhoud();

$Peugeot = new scooter();
    $Peugeot->kleur = "<p>blauw</p>";
    $Peugeot->merk = "<h3>peugot</h3>";
    $Peugeot->inhoudTank=7;

        echo $Peugeot->merk;
        echo $Peugeot->kleur;
        $Peugeot->checkInhoud();


 