<?php


echo "Constructor";
echo "<br>";
echo "Purpose: The main purpose of a constructor is to initialize the object's attributes or perform any setup tasks necessary for the object to be in a valid state.";
echo "<br>";
echo "When Called: It is automatically called when an object is created.";
echo "<br>";
echo "Name: Constructors typically have the same name as the class.";
echo "<br>";
echo "Return Type: Constructors do not have a return type.";


echo "<br>";
echo "<br>";
echo "<br>";
echo "example of Constructor ";
echo "<br>";


class MyClass {
    // Constructor
    public function __construct() {
        echo "Constructor called\n";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor called\n";
    }
}

// Creating an object of MyClass
$obj = new MyClass();

// The object goes out of scope or is explicitly unset
// Destructor is automatically called at this point
unset($obj);
    ?>
<br>
<br>

<?php


echo "Destructor";
echo "<br>";
echo "Purpose: The main purpose of a destructor is to clean up resources, release memory, or perform any other necessary cleanup tasks before the object is destroyed or deallocated.";
echo "<br>";
echo "When Called: It is automatically called when an object goes out of scope or is explicitly deleted.";
echo "<br>";
echo "Name: Destructors typically have the same name as the class, preceded by a tilde (~) symbol.";
echo "<br>";
echo "Return Type: Destructors do not have a return type.";


echo "<br>";


    ?>