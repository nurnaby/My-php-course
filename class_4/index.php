<?php

$emp =[
        [1,"sohag","computer oparator",10000],
        [2, "karim","selesman",8000],
        [2, "rohim","selesman",8000],

      ];
    foreach ($emp as $val1) {
        foreach ($val1 as $val2) {
            echo $val2 ." ";
        
        }
        echo "<br>";
    }

?>