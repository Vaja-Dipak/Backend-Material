<!-- PHP Assignment Module-3 (Core PHP) -->

Write program to remove duplicate values from array <br><br>


<?php

$abc=array("qwe"=>87,"jhg"=>"hgj","gd"=>87,"jhl"=>654);
echo "Random Number from the array";
print_r($abc);              // Original array print
echo "<br>";
print_r(array_unique($abc));    // after removing duplicate

?>