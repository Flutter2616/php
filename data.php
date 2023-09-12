<?php

class math{

    public $a;
    public $b;

    function addition()
    {
        echo $this -> a + $this -> b;
    }
}

 $m1= new math();
 $m1->a=10;
 $m1->b=20;

 $m1->addition();

?>