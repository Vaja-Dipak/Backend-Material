<!-- PHP Assignment Module-3 (Core PHP) -->

Write a PHP program to check Leap years between 1901 to 2016 Using nested if.


<?php
echo "Leap year between 1901 to 2016 <br><br>";
for ($a = 1901; $a < 2016; $a++) {
    if ($a % 4 == 0) {
        echo "$a <br>";
    }
}

?>