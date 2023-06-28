<table border=1>

<?php
for ($y= 1; $y <= 10; $y++){;
    echo "<tr>";
        echo  "<td>$y</td>";

        echo  "<td>";
        echo "X";  
        echo "</td>";

        echo  "<td>";
        echo "13";
        echo "</td>";

        echo  "<td>";
        echo "=";  
        echo "</td>";

        echo  "<td>";
        echo $y * 13;  
        echo "</td>";

    echo "</tr>";
 } ?>