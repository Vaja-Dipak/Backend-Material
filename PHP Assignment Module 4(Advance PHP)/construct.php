<?php

// class Exampleofconst{
//     public function __construct(){
//         echo "<p>_construct is method which is invoked by default when object are created</p>";
//         return "test";
//     }
// }

class ExampleOfConst{
    public function ExampleOfConst() {
        echo "<p>__construct is a method which is invoked by default when objects are created</p>
        <p>construct never return</p>
        <p>use for initilise some values</p>
        ";
    }
    public function __construct() {
        echo "<p>__construct is a method which is invoked by default when objects are created</p>
        <p>construct never return</p>
        <p>use for initilise some values</p>
        ";
    }
}

$exmplaeofocn= new ExampleOfConst;
$exmplaeofocn->ExampleOfConst()


?>