<!-- PHP Assignment Module-3 (Core PHP) -->

Get random values from array <br><br>


<?php

$abc = array("abc", "pqr", 234, 8464, "jkhti");
$randomkey=array_rand($abc);
$randomVal = $abc[$randomkey];

echo $randomVal;
?>