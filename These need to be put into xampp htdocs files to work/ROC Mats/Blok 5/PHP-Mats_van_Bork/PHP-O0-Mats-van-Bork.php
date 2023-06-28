<?php

$array=[2,4,3,1,6,7,3];

for ($i=0; $i<7; $i++){
    echo $array[$i];
}

echo  "<hr>";

foreach($array as $elem){
    echo $elem." ";
}

?>