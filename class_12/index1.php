<?php
$dbcon = mysqli_connect("localhost","root","","crud") or dir("connection failed");


$sql = "SELECT * FROM students";
$result = mysqli_query($dbcon,$sql);
// $row = mysqli_fetch_assoc($result);
// return assocat array

// while($row = mysqli_fetch_assoc($result)){
//     echo $row['frist_name']."".$row['last_name'].""."</br>";
// }
$row = mysqli_fetch_row($result);


?>