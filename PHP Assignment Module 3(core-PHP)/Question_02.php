<!-- PHP Assignment Module-3 (Core PHP) -->

write a PHP program for find „Thursday‟ in week using switch Function. <br><br><br>


<form action="">
    <label for="">Please enter day number between 1 to 7 :</label>
    <input type="text" name="week">
</form>
<?php

$week = $_REQUEST['week'];
switch ($week) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednusday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
}
?>