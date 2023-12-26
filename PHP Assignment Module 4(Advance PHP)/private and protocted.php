<?php

echo "<h2>private Constructor theory </h2>";
echo "Private Constructor:

If a constructor is declared as private, it cannot be accessed from outside the class.<br> This means you cannot create an object of that class using the new keyword from outside the class itself.<br>
However, the private constructor can still be called within the class.<br> This is useful for implementing design patterns like the Singleton pattern, where you want to ensure that there is only one instance of the class.";

echo "<br>";
echo "<h2>private Constructor example </h2>";
echo "<br>";
class MyClass {
    private function __construct() {
        echo "Private constructor called.<br>";
    }

    public static function createObject() {
        // This method can create an object by calling the private constructor
        return new self();
    }
}

// Attempting to create an object using the new keyword will result in an error
// $obj = new MyClass(); // This will cause a fatal error

// Creating an object using a public method that calls the private constructor
$obj = MyClass::createObject();
?>


<?php
echo "<h2>protocted Constructor theory </h2>";

echo "If a constructor is declared as protected, it can be accessed from within the class and its subclasses. <br>This means that you can create an object of the class within the class itself and within its child classes.<br>
Outside the class and its subclasses, the protected constructor cannot be accessed directly using the new keyword.";

echo "<h2>protocted Constructor example </h2>";
echo "<br>";
class ParentClass {
    protected function __construct() {
        echo "Protected constructor called.<br>";
    }
}

class ChildClass extends ParentClass {
    public function createObject() {
        // This method can create an object by calling the protected constructor
        return new self();
    }
}

// Attempting to create an object using the new keyword will result in an error
// $obj = new ParentClass(); // This will cause a fatal error

// Creating an object using a public method in a subclass that calls the protected constructor
$obj = (new ChildClass())->createObject();
