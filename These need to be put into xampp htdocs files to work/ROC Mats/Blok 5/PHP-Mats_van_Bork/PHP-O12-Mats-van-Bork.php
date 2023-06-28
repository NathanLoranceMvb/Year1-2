
<?php
$places = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London");

    echo "De stad " .  $places ["China"] . "is een grote stad in het land China. <br><br>";

    foreach($places as $x => $x_value) {
  echo "De stad " . $x . " is een groote stad in " . $x_value . ".";
  echo "<br>";
}
?>