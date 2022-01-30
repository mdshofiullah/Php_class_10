<?php

namespace App\classes;

class HelloWorld
{
    //this is property
    public $name= 'SHOFI';

    //this is function or method
    public function index()

    {
        //echo 'Hello world!';
        echo $this->name;
    }
}