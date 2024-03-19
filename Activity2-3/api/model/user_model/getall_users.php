<?php
include $_SERVER['DOCUMENT_ROOT']. '/Integrative_Programming/Activity2-3/model/User.php';


$getAll = new UserModel();
$data = $getAll->getAll();
echo json_encode($data);

?>