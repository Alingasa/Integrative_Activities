<?php
include $_SERVER['DOCUMENT_ROOT']. '/Assignment_IntegrativeProgramming//Activity2/model/User.php';

$user_model = new UserModel();
$data = $user_model->Search($_GET);
echo json_encode($data);

?>