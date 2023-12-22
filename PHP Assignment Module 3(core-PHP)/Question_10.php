<!-- PHP Assignment Module-3 (Core PHP) -->

How can you tell if a number is even or odd without using any Condition or loop? <br><br>


<form action="">
    <label for="">Enter any Number to check it Odd or Even : </label>
    <input type="text" name="num">
    <input type="submit" name="Check" value="Check">
</form>

<?php
if (isset($_REQUEST['Check'])) {
    $num = $_REQUEST['num'];
    echo ($num % 2) ? "$num is ODD." : "$num is EVEN.";
}

?>