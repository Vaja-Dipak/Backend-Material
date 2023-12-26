<?php

use MathOp as GlobalMathOp;


class MathOp{
    function Addition($a,$b=0){
        return $a+$b;
    }
    function Additionthree($a,$b,$c){
        return $a+$b+$c;
    }
}

class ADvMathOp extends MathOp{
    function Avgtow($a,$b=0){
        $Addi=$this->Addition($a,$b);
        return $Addi/2;

    }
}
$objofadv= new ADvMathOp;
echo "<br>";
echo $objofadv->Addition(50,5);



// echo "<br>";
// echo $objofadv->Avgtow(60/2);
?>