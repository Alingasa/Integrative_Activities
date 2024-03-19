<?php
include $_SERVER['DOCUMENT_ROOT']. '/Integrative_Programming/Activity4/model/User.php';


$getAll = new UserModel();
$data = $getAll->getAll();
echo json_encode($data);

?>