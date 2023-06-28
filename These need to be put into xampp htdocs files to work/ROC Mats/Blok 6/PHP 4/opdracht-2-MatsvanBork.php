<?php


class auto 
{
    public $merk;
    public $kleur;
    public $type;
    public $brandstof;
    public $uitvoering;
};



$nieuweAuto = new auto();

$nieuweAuto->merk = 'Volkswagen <br>';
$nieuweAuto->kleur = 'rood <br>';
$nieuweAuto->type = 'Golf <br>';
$nieuweAuto->uitvoering = 'station <br>';
$nieuweAuto->brandstof = 'benzine <br>';

echo $nieuweAuto->merk;
echo $nieuweAuto->kleur;
echo $nieuweAuto->type;
echo $nieuweAuto->uitvoering;
echo $nieuweAuto->merk;
