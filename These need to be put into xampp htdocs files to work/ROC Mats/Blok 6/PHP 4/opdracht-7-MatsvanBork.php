<!--
Maak een class Lamp
Geef de Lamp class de volgende properties: kleur, helderheid, isAan. Geef deze een default waarde ($kleur="iets"). Zet de visibility van de property 'isAan' op private.
Maak twee objecten aan: $woonkamerLamp en $keukenLamp
Maak in de class nu een method aan die de propertie isAan kan wijzigen. Noem deze method setStatus($status)
Maak gebruik van de method setStatus($status) om de woonkamerLamp uit te zetten
Lever het .php bestand in én een screenshot van je browser met het resultaat, zorg dat de url zichtbaar is. -->

<?php
class Lamp
{
    public $helderheid; 
    private $isAan;
    public $kleur="iets";
    
    // kleur helderheid

    public function setStatus($status)
    {
        $this->isAan = $status;
        echo "<p>Lamp aan of out: $status</p>";
        return;
    }
}
// $woonkamerLamp en $keukenLamp

$woonkamerLamp = new Lamp();
$woonkamerLamp ->kleur = "<p>Kleur light:geel</p>";
$woonkamerLamp ->helderheid = "<p>Helderheid: 30 lumen.</p>";


echo "<h4>woonkamer Lamp</h4>";
$woonkamerLamp ->setStatus("uit");
echo $woonkamerLamp->kleur;
echo $woonkamerLamp->helderheid;

$keukenLamp = new Lamp();
$keukenLamp ->kleur = "<p>Kleur light:wit</p>";
$keukenLamp ->helderheid = "<p>Helderheid: 50 lumen</p>";

echo "<h4>Keuken Lamp</h4>";
$keukenLamp ->setStatus("aan");
echo $keukenLamp->kleur;
echo $keukenLamp->helderheid;