<!-- PHP Assignment Module-3 (Core PHP) -->

Write a PHP program to find the largest of three numbers using ternary Operator. <br><br><br>


<form action="">
    <label for="">a : </label><input type="text" name="a"><br>
    <label for="">b : </label><input type="text" name="b"><br>
    <label for="">c : </label><input type="text" name="c"><br><br>
    <input type="submit" name="submit" value="Click here to get large number.">
</form>

<?php
if (isset($_REQUEST['submit'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];
    echo ($a > $b) ? (($a > $c) ? "$a is Largest number" : "$c is Largest number") : (($b > $c) ? "$b is Largest number" : "$c is Largest number");
}

?>