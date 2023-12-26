<?php

echo "<h2>Example of Iterating </h2>";
class Person {
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
}

// Creating an object
$person = new Person("John Doe", 25, "Male");

// Iterating over the object properties
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

?>