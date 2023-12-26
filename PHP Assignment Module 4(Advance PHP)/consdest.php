<?php


class ExampleOfConst{
    public function ExampleOfConst(){
        echo $this->someval;

    }
    public function __construct(){
        $this->someval="Jai Shree Ram";
        $this->someval1="Jai Shree Ram";
        $this->someva2="Jai Shree Ram";
        $this->someva3="Jai Shree Ram";
    }

    public function _destruct(){
        $this->someval1="";
        unset($this->someval1);
        $this->someval2= null;
        $this->someval3= null;
        echo $this->someval;
        echo "dest val";
    }

    public function ExampleOfConstAfterDes(){
        echo $this->someval;
    }
}

$ExampleOfConst= new ExampleOfConst;
$ExampleOfConst->ExampleOfConst();
$ExampleOfConst->ExampleOfConstAfterDes();

?>



