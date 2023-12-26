<?php
class Books{
    function __construct() 
    
    {
        echo "called __construct parent <br>";
    }
 
    
    
}
class OtherClass extends Books{
    function __construct(){
        parent::__construct();
        echo parent::$PublicDM;
        
        echo "called_construct child <br>";
    }
}

$oj= new OtherClass;




?>