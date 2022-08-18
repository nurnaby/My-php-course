<?php
include 'database.php';
$obj =new ComonCrudControler();
$formData = [];
$formData['frist_name'] = 'kabir';
$formData['last_name'] = 'khan';
$obj->create('students',$formData);
print_r($obj->resultDispaly()) ;


?>