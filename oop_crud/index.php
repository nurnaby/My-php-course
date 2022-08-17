<?php
include 'database.php';
$obj =new ComonCrudControler();
$formData = [];
$formData['frist_name'] = 'nur';
$formData['last_name'] = 'naby';
echo $obj->create('students',$formData);


?>