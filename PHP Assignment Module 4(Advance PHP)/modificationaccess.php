<?php

use mathop as  GlobalMathOp;


class mathop{
    public $publicDm="public datameneber";
    protected $protectedDm="protocted datamember";
    private $privateDm="private datamember";

    function publicfunc(){
        echo "publicfuncs";
    }
    protected function proticedfunc(){
        echo "prototcted func";
    }
    private function privatefucn(){
        echo "private func";
    }
}

 class otherclass extends globalMathOp{
    public function FunctionName(){
        echo "from  child function calling parent ".$this->publicfunc();
    }
    public function FunctionName(){
        echo $this->proticedfunc();
        echo $this->privatefucn();
    }

 }
 $obj=new otherclass;
 echo "<br>";
 //echo $obj->FunctionName();


 $obj= new mathop;
 echo "<br>";
 echo $obj->publicdm;


 
