<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this function</title>
</head>
<body>
    <h2>$this peseudo variable in php</h2>
    <p>The peseudo-variable $this is avalilable when a method is called from within a object context.</p>


</body>
</html>

<?php
class Book

{
    public $auth="Raja Mouli";
    function Bhubali() {
        return "story of bahubali $this->auth";
        
    }
    function Bhabali2() {
        return "story of bahubali2 $this->auth";
        
    }
}

$mov = new Book;
echo "<br>";
echo $mov->Bhubali(); 
echo "<br>";
echo $mov->Bhabali2();
echo "<br>";




?>