<!-- PHP Assignment Module-3 (Core PHP) -->

Write a PHP program to enter marks of five subjects Physics, Chemistry, Biology, Mathematics and 
Computer calculate percentage and grade by if else.

<h2>Please Enter Our Subjects Marks: </h2><br>


<form action="" method="post">
    <label for="Physics">Physics</label>
    <input type="text" name="Physics"> <br><br>
    <label for="Chemistry">Chemistry</label>
    <input type="text" name="Chemistry"> <br><br>
    <label for="Biology">Biology</label>
    <input type="text" name="Biology"> <br><br>
    <label for="Mathematics">Mathematics</label>
    <input type="text" name="Mathematics"> <br><br>
    <label for="Computer">Computer</label>
    <input type="text" name="Computer"> <br><br>
    <input type="submit" name="submit" value="Generate Result"> <br><br>
</form>


<?php

$per = "-";
if (isset($_POST["submit"])) {
    $sub1 = $_POST['Physics'];
    $sub2 = $_POST['Chemistry'];
    $sub3 = $_POST['Biology'];
    $sub4 = $_POST['Mathematics'];
    $sub5 = $_POST['Computer'];

    $per = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) / 5;

    if ($per > 90) {
        $grade = "A";
    } elseif ($per <= 90 && $per > 75) {
        $grade = "B";
    } elseif ($per <= 75 && $per > 55) {
        $grade = "C";
    } elseif ($per <= 55 && $per > 32) {
        $grade = "D";
    } else {
        $grade = "Fail";
    }

    echo "<b> <label>Percentage : $per </label> </b> <br>";
    echo "<b> <label>Grade : $grade </label> </b>";
}
?>