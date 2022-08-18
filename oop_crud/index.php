<?php
include 'database.php';
$obj =new ComonCrudControler();
$formData = [];
$formData['frist_name'] = 'jakir';
$formData['last_name'] = 'khan';
// $obj->create('students',$formData);
// print_r($obj->resultDispaly()) ;

// $obj->create('students',$formData,1);
// $obj->update('students',$formData,4);
// print_r($obj->resultDispaly()) ;

$obj->delete('students',4);
print_r($obj->resultDispaly()) ;






?>