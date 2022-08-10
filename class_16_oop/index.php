<?php
//poliymorphism
//---method overloading
//---method overriding
//Overriding
include 'preant.php';
class childClass extends divClass{
    // method overriding 
    function sum(){
        return $this->a -$this->b;
    }

    //method overloding
    // function sub($prm1,$prm2,$prm3){

    // }

}
$test = new childClass(5,3);
// echo $test-> sum();
// echo $test-> sub(6,3);

// static key word

class ProductClass{
    public static $name = "apple";
    static function productIfo (){
        return "name:this sohag";
    }
    static function dateFormat($data){

       $data = date_create($data);
       $result = date_format($data,"d/m/y");
       return $result;
    }


}



// echo productClass::$name;
// echo productClass::dateFormat("2022/12/12");
// $test = new ProductClass();
// echo $test->name;

class products{
    function productlist(){
        $data["name"] ="apple";
        $data["price"] =100;
        $data["ex_date"] =productClass::dateFormat("2022/12/12");
        return $data;
    }

}
$pro = new products();
print_r($pro->productlist());







?>