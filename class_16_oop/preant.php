<?php
class divClass{
    public $a;
    public $b;

    function __construct($num1,$num2)
    {
        $this->a=$num1;
        $this->b=$num2;
    }

    function sum(){
        return $this->a +$this->b;
    }
    function sub($prm1,$prm2){
        return $prm1 -$prm2;
    }
}


?>