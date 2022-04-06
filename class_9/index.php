<?php
// array_pop 
$faruit =["apple","banana","orange","kokonat"];
array_pop($faruit);
echo "<pre>";
print_r($faruit);
echo "</pre>";

// array_push 
$faruit =["apple","banana","orange","kokonat"];
array_push($faruit,"mango");
echo "<pre>";
print_r($faruit);
echo "</pre>";

// array_shift 
$faruit =["apple","banana","orange","kokonat"];

array_shift($faruit);
echo"<pre>";
print_r($faruit);
echo "</pre>";

// array_unshift 
$faruit =["apple","banana","orange","kokonat"];


array_unshift($faruit,"mango");

echo "<pre>";
print_r($faruit);
echo "</pre>";





?>