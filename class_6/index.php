<?php
// $food = array("apple","banna","mango");
$foods =array(
    'fruits'=> array('orange','banana','apple'),
    'vaggie'=> array('carrot','collard','pea'),
);

// $len= count($food);

// for ($i=0; $i<$len; $i++) {
//     echo $food[$i];
// }

foreach($foods as $id=> $v1){
    echo $id ." ";
    foreach($v1 as  $v2){
        echo $v2 ." ";
    }
    echo "<br>";
}

?>