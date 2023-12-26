<?php


echo "In PHP, traits provide a way to group functionality in a fine-grained and consistent way.<br> You can use multiple traits in a single class by separating them with commas in the use statement.";


echo "<h2>Example of traits</h2>";


// First Trait
trait GreetingTrait {
    public function sayHello() {
        echo "Hello from GreetingTrait!<br>";
    }
}

// Second Trait
trait CountingTrait {
    public function countNumbers() {
        echo "Counting numbers from CountingTrait!<br>";
    }
}

// Third Trait
trait LoggingTrait {
    public function logMessage($message) {
        echo "Logging: $message<br>";
    }
}

// Class using multiple traits
class MyClass {
    // Using multiple traits
    use GreetingTrait, CountingTrait, LoggingTrait;

    public function performTasks() {
        $this->sayHello();
        $this->countNumbers();
        $this->logMessage("Task performed successfully");
    }
}

// Creating an object of the class
$obj = new MyClass();

// Calling a method from one of the traits
$obj->sayHello();

// Calling a method from another trait
$obj->countNumbers();

// Calling a method from a third trait
$obj->logMessage("Hello from MyClass");

// Calling a method that uses methods from all traits
$obj->performTasks();
?>