<!-- PHP Assignment Module-3 (Core PHP) -->

Declare a Multi Dimensioned array of floats called balances 
having Three rows and five columns. <br><br>


<?php

$balances = array(                      // Declare Multi Dimentional array
    array(1.5, 2.3, 3.0, 4.1, 5.6),
    array(6.2, 7.5, 8.0, 9.4, 10.7),
    array(1.2, 2.6, 3.0, 4.8, 5.5)
);

for($row=0;$row<3;$row++){
    for($col=0;$col<5;$col++){
        echo $balances[$row][$col]."&nbsp&nbsp&nbsp&nbsp";
    }
    echo "<br>";
}

?>