<?php
function hello($name,$last_name) {
    echo "hello i am .$name$last_name.<br>";
}
hello("nur","naby");
hello("nur","sohag");
$i=10;
do{
    echo $i;
    $i++;
}while($i<10);
$a =10;
echo $a+=2;
$products = ["mobile", "camera" ,"honda" , "bichayl"];
 
array_unshift($products,"telephpne");
echo "<pre>";
print_r($products);
echo "</pre>";


?>