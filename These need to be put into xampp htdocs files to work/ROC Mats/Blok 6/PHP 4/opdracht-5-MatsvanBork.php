<?php
class mens
{
public $huidskleur;
public $haarkleur;
public $lengte;
public $gender;
}


class volwasene extends mens 
{
public $alcoholisch;
public $burgerstaat;
}

$volwasene = new mens();

$volwasene->huidskleur="<p>wit<p/>"; 
$volwasene->haarkleur="<p>bruin<p/>";
$volwasene->lengte="<p>1.86 . cm<p/>"; 
$volwasene->gender="<p>man<p/>";
$volwasene->alcoholisch="<p>Ja<p/>"; 
$volwasene->burgerstaat="<p>allebij<p/>";

echo "<h3>volwasene</h3>";
echo $volwasene->huidskleur;
echo $volwasene->haarkleur;
echo $volwasene->lengte;
echo $volwasene->gender;
echo $volwasene->alcoholisch;
echo $volwasene->burgerstaat;

class kind extends mens 
{
public $school;
public $auders; 
}

$kind = new mens();

$kind->huidskleur="<p>bruin<p/>"; 
$kind->haarkleur="<p>zwart<p/>";
$kind->lengte="<p>1.52 cm<p/>"; 
$kind->gender="<p>man<p/>";
$kind->school="<p>basis school<p/>"; 
$kind->auders="<p>allebij<p/>";

echo "<h3>kind</h3>";
echo $kind->huidskleur;
echo $kind->haarkleur;
echo $kind->lengte;
echo $kind->gender;
echo $kind->school;
echo $kind->auders;
?>