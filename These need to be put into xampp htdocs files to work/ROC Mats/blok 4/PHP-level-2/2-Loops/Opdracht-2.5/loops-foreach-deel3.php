

<ul>
<?php
$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
foreach($student as $studenten) {

    print_r(array_keys($student));
    echo "</br>";
}

?>
<ul/>