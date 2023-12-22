<!-- PHP Assignment Module-3 (Core PHP) -->

Use a for loop to total the contents of an integer array called numbers 
which has five elements. Store the result in an integer called total.<br><br>


<?php

$number = [78, 60, 34, 67, 52];
$total = 0;

print_r($number);
// print_r(count($number));
for ($i = 0; $i < count($number); $i++) {
    $total += $number[$i];
}

echo "<br> Total of the array : $total";

?>