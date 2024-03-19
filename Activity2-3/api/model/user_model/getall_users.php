<?php
include $_SERVER['DOCUMENT_ROOT']. '/Assignment_IntegrativeProgramming//Activity2/model/User.php';


$getAll = new UserModel();
$data = $getAll->getAll();
echo json_encode($data);

?>