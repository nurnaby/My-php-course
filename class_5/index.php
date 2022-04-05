<?php
$marks = [
    "karim"=> [
             "phydice"=>70,
             "math"=>40,
             "chemistry"=>80
     ],
    "jakir"=> [
        "phydice"=>80,
        "math"=>50,
        "chemistry"=>90
    ],
    "manik"=> [
        "phydice"=>75,
        "math"=>50,
        "chemistry"=>90
        ]
    ];
    echo "<table border='2px' cellpadding= '5px' cellspacing= '0'>";
    echo "<tr>
                <th>name</th>
                <th>physics</th>
                <th>math</th>
                <th>chemistry</th>
         </tr>";
       foreach ($marks as $i=> $v1) {
           echo "<tr>";
           
           echo "<td>$i</td>" ;
        foreach ($v1 as $v2) {
            echo "<td> $v2</td> ";
           
        }
        echo "</tr>";
       }
       echo "</table>";
       



?>