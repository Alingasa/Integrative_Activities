<?php
include $_SERVER['DOCUMENT_ROOT']. '/Integrative_Programming/Activity2-3/model/User.php';

$user_model = new UserModel();
$data = $user_model->Search($_GET);
echo json_encode($data);

?>