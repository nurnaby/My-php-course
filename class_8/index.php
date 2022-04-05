<?php
$fruit = ['orange','banana','apple','grapes'];
$veggie = ['a'=>'carrot', 1=>'pea'];
// $color = ['red','green','blue'];
$newArray = array_replace($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>