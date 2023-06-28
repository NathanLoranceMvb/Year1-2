<?php

class product 
{
    public $merk;
    public $hdd_capacity;
    public $memory;

};

$computer = new product();


$computer->merk="Republic of Gamers<br>"; 
$computer->hdd_capacity=10  ."TB" ; 
$computer->memory="<br>50TB<br>"; 


echo $computer->merk;
echo $computer->hdd_capacity;
echo $computer->memory;

// merk, hdd_capacity, memory.