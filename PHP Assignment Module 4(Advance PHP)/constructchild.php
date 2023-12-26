<?php

use ExampleOfConst as GlobalExampleOfConst;

class ExampleOfConst{
    public function ExampleOfConst(){
        echo $this->someval;
    }

    public function __construct(){
        echo $this->someval="parent const database";
    }
    public function __destruct(){
        $this->someval=null;
        echo $this->someval;
        echo "dest val";
    }
    public function ExampleOfConst
}