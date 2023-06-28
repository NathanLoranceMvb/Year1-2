<?php 
$text = "Getters en Setters gebruik je dus wanneer de visibility van een property niet op public staat (private). Ben je vergeten wat visibility is? 
Kijk nog even naar de lesstof van *visibility* voor wat opheldering."; 

$Opdracht1 = "Maak een bestand aan met de naam opdracht-8-<jouw-naam>.php Waarbij je '<jouw-naam>' vervangt door jouw eigen naam (zonder spaties)";
$Opdracht2 = "Maak een class Robot";
$Opdracht3 = "Geef de Robot class de volgende properties: naam, geluid, voortstuwing (de visibilit, moet private zijn!).";
$Opdracht4 = "Maak voor alle properties setters om de properties een waarde te kunnen geven.";
$Opdracht5 = "Maak 2 objecten aan: $ wally en $ wolly.";
$Opdracht6 = "Gebruik de settermethodes om waardes te setten voor deze objecten.";
$Opdracht7 = "Maak in de class nu een method aan die de property geluid kan ophalen en tonen op het scherm. Noem deze method getSound() en gebruik return";
$Opdracht8 = "Maak gebruik van de method getSound() om van het object het geluid op het scherm te tonen.";
$Opdracht9 = "Maak een screenshot van je browser waar het resultaat van deze opdracht te zien is. Zorg er voor dat je de url in je browser 
(inclusief jouw naam in de adresbalk) in het plaatje ziet. Lever deze screenshot als bestand in. Lever ook het .php bestand in met de code als upload.";

$text2 = " Zoals je kan zien kan je niet meer zomaar de properties ophalen met $ object->property wanneer deze property op private staat. 
Hierdoor is een getter erg handig, want dit geeft de mogelijk om de waarde op te halen ook al is het private. 
Wanneer een property de visiblity van public heeft. Is het dus ook niet logisch om een getter te maken. 
 Want je kan al gelijk deze waarde ophalen met $ object->property.";
class robot
{
 private $naam;
 private $geluid;
 private $voortstuwing;

public function setName($naam_piramiter){
    $this -> naam = $naam_piramiter;
}
public function getName()
{
    return $this -> naam;
}

public function setSound($geluid_piramiter)
{
    $this -> geluid = $geluid_piramiter;
}
public function getSound()
{
    return $this -> geluid;
}

public function settransport($voortstuwing_piramiter)
{
    $this -> voortstuwing = $voortstuwing_piramiter;
}
public function gettransport()
{
    return $this -> voortstuwing;
}
}

$wally = new robot();
$wally -> setName("<h3>Wally</h3>");
echo $wally -> getName();
$wally -> setSound("<p>lalalallal</p>");
echo $wally -> getSound();
$wally -> settransport("<p>rubsbanden</p>");
echo $wally -> gettransport();

$wolly = new robot();
$wolly -> setName("<h3>Wolly</h3>");
echo $wolly -> getName();
$wolly -> setSound("<p>lalalallal</p>");
echo $wolly -> getSound();
$wolly -> settransport("<p>wielen</p>");
echo $wolly -> gettransport();
?>