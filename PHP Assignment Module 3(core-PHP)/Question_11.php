<!-- PHP Assignment Module-3 (Core PHP) -->

write a php program to How can you declare the array (all type) in PHP? Explain with 
example Covert a JSON string to array. <br><br>


<?php

$a = array();                                       // Declaring Empty array
$b = array(678, 65, 4, 8464, 64);                   // Declaring Numeric array
$c = array("name" => "vijay", "age" => 56);         // Declaring Associative array
$d = array("abc", "pqr", 234, 8464, "jkhti");           // Declaring Mixed array
$e = array(array("abc", 234), array(8464, "jkhti"));    // Declaring Multidimentional array
$f[] = "Data";                                          // Declaring Dynamic array


// Covert a JSON string to array

$arraystr = '{"name":"John","age":30,"city":"New York"}';
$jsonstr = json_decode($arraystr, true);

echo "Json String :";
print_r($arraystr);
echo "<br> Array String :";
print_r($jsonstr);

?>