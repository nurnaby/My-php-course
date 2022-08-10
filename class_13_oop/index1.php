<?php
// $dbcon = mysqli_connect("localhost","root","","crud") or dir("connection failed");
// interface start 
// cannot create any properties decler in interface
interface frist{
    function  cale($a,$b);

    
}
interface second{
    function sub($c,$d);//con't create object in funciton/ method
}


class child implements  frist,second{
    public function cale($a,$b){
        echo $a+$b;
    }

    public function sub($c,$d){
        echo $c-$d;
    }
   
  }

  $test = new child();
  $test->cale(10,30);


//   interface end 







?>