<?php
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
$test= new childClass();
$test->cale(10,10);

?>