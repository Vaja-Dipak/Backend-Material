<?php
class myclass{
    public $pubicdm="this is the example of public dm";
    public $pubicdmtest="this is the example of public dm";
    protected $protecteddm="this is the example of protcared dm";
    private $privatedm="this is the example of privare dm";

    public function somemethod(){
        foreach($this as $key =>$value){
            echo "<br>Somemmethod key is:".$key."<br>";
            echo "<br>Somemmethod val is:".$value."<br>";
        }
    }
}

class otherclass extends myclass{
    public function somemethodchild(){
        foreach($this as $key=>$value){
            echo "<br>Soemmethod key is:".$key."<br>";
            echo "<br>Soemmethod val is:".$value."<br>";
        }
        return "from some method";
    }
}

$myclass= new otherclass;
//echo $myclass->somemethodchild();
//echo $myclass->somemethod();


foreach($myclass as $key =>$value){
    echo "<br>Soemmethod key is:".$key."<br>";
    echo "<br>Soemmethod val is:".$value."<br>";
}