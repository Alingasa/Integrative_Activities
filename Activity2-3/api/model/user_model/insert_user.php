<?php
include $_SERVER['DOCUMENT_ROOT']. '/Integrative_Programming/Activity2-3/model/User.php';

$user_model = new UserModel();
$result = $user_model->Create($_POST);
echo json_encode($result);
?>