 <h2>What are the differences between abstract classes and interfaces? </h2>

<?php
echo "<h1>Abstract</h1>";
echo "<br>";
echo "1.Abstract class can have abstract and non-abstract methods.";
echo "<br>";
echo "2.Abstract class doesn't support multiple inheritance.";
echo "<br>";
echo "3.Abstract class can have final, non-final, static and non-static variables.";
echo "<br>";
echo "4.Abstract class can provide the implementation of interface.";
echo "<br>";
echo "5.The abstract keyword is used to declare abstract class.";
?>

<br>

<?php
echo "<h1>interface</h1>";
echo "<br>";
echo "1.Interface can have only abstract methods. Since Java 8, it can have default and static methods also.";
echo "<br>";
echo "2.Interface supports multiple inheritance.";
echo "<br>";
echo "3.Interface has only static and final variables.";
echo "<br>";
echo "4.Interface can't provide the implementation of abstract class.";
echo "<br>";
echo "5.The interface keyword is used to declare interface.";
?>