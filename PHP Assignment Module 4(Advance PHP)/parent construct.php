<?php


echo "In PHP, when you create an object of a class, the parent constructor is not called implicitly by default.<br> However, if the child class has its own constructor and you want to explicitly invoke the parent constructor, you can use the parent::__construct() syntax within the child class constructor.";

echo "<br>";
echo "<h2>Example paretn construtor</h2>";
echo "<br>";
class ParentClass {
    public function __construct() {
        echo "Parent constructor called.<br>";
    }
}

class ChildClass extends ParentClass {
    public function __construct() {
        // Calling parent constructor explicitly
        parent::__construct();
        
        echo "Child constructor called.<br>";
    }
}

// Creating an object of the child class
$childObject = new ChildClass();

?>