<?php
include $_SERVER['DOCUMENT_ROOT']. '/Integrative_Programming/Activity4/model/User.php';

$user_model = new UserModel();
$result = $user_model->Create($_POST);
echo json_encode($result);
?>