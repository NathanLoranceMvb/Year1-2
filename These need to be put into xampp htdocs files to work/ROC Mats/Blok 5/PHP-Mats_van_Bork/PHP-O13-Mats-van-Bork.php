<table border=1>

    <?php
   $maandtemp = Array( 
    "Jan"=>1.4, 
    "Feb"=>2.5, 
    "mrt"=>4.7, 
    "apr"=>8.2, 
    "mei"=>12.3, 
    "jun" =>15.2, 
    "jul"=>16.9, 
    "aug"=>16.7, 
    "sep"=>14.2, 
    "okt"=>10.0, 
    "nov"=>5.5,
    "dec"=>2.7
    );     

   foreach($maandtemp as $x => $x_value) {

        echo "<tr>";
            echo  "<td>$x</td>";
    
            echo  "<td>";
            echo $x_value;  
            echo "</td>";
}
?>