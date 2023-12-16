<!-- PHP Assignment Module-3 (Core PHP) -->

<!-- Write a program for this Pattern

* * * * * 
*
*
*
* * * * *

-->


<?php

for ($a = 1; $a <= 5; $a++) {
    for ($b = 1; $b <= 5; $b++) {
        if ($a == 1 || $b == 1 || $a == 5) {
            echo "* ";
        } else {
            echo "&nbsp&nbsp&nbsp";
        }
    }
    echo "<br>";
}

?>