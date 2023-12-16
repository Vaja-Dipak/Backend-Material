<!-- PHP Assignment Module-3 (Core PHP) -->

<!-- Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34  -->


<?php

$a1 = 0;
$a2 = 1;
$a3 = 0;
echo "$a1 <br> $a2 <br>";
while ($a3 < 34) {
    $a3 = $a1 + $a2;
    echo $a3."<br>";
    $a1 = $a2;
    $a2 = $a3;
}

?>