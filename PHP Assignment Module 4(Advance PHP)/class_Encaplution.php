<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapulations</title>
</head>
<body>

<h2>class</h2>
<p>class is a collection of datamember and member funtions only</p>
<p>its provides basic level of security to our code</p>
<p>with the help of class we can isolate our code</p>
<p>code resulablity</p>
<p>fast execution</p>
<p>create class with <strong>Class</strong> keyword</p>
<p>without instance of class we are not alble to access the properties of that class at out side of class</p>
<p>instance = object</p>
<p>for creating an object of any class we can use new keyword</p>
    

<?php

class basicmath {
    function Addition($f,$a) {
        return $f+$a;
        
    }
}
//echo Addition(35,35);
$shupan= new basicmath;
echo "<br>";
echo $shupan->Addition(35,35);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo Addition(10,5567);
echo "<br>";
echo Addition(20,90);
echo "<br>";

?>
</body>
</html>