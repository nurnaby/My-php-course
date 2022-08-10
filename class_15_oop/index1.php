<?php
//abstract class & methods declear by using abstract key word
// abstract class must be declear in derived classes
// abstract method must accessible from derived class (using public modifiar)
// cannot create any object in abstract class

 abstract class parentClass{
    public $name;
    // method declaretion 
    // method declaretion 
    abstract protected function cale($a,$b);
}

class childClass extends parentClass{
    public function cale($a,$b){
        $c = $a+$b;
        echo $c;
    }
}
// $test= new childClass();
// $test->cale(10,10);

?>