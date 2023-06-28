<?php

class product 
{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
};

$dweil = new product();


$dweil->merk="hema<br>"; 
$dweil->prijs=10 ; 
$dweil->type="<br>lang<br>"; 
$dweil->kleur="rood<br><br>";

echo $dweil->merk;
echo $dweil->prijs;
echo $dweil->type;
echo $dweil->kleur;

$stofzuiger = new product();


$stofzuiger->merk="aegon<br>"; 
$stofzuiger->prijs=50; 
$stofzuiger-> type="<br>gfs505<br>"; 
$stofzuiger-> kleur="grijs";

echo $stofzuiger->merk;
echo $stofzuiger->prijs;
echo $stofzuiger->type;
echo $stofzuiger->kleur;

