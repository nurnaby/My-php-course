<?php
// class declaretion 
class caleculator{
    // properities 
    public $a;
    public $b;
    public $c;
    //methods decloration
    function sum(){
        $this->c =$this->a + $this->b;
        return $this->c; 
    }
    function sub(){
        $this->c =$this->a + $this->b;
        return $this->c; 
    }
    
}
//object create 
$text1 = new caleculator();
$text1->a=20;
$text1->b=10;
// echo $text1->sum();

$text2 = new caleculator();
$text2->a=30;
$text2->b=30;
// echo $text2->sum();

// constructor use clas 
class person{
    public $num1=10;
    public $num2=10;

    function __construct($x,$y)
    {
        $this->num1=$x;
        $this->num1=$y;
        
        
    }
    function show(){
        echo $this->num1+$this->num2;

    }

}
$text3 = new person(10,10);
$text3->show();









?>