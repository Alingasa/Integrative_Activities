<?php
include $_SERVER['DOCUMENT_ROOT']. '/Assignment_IntegrativeProgramming//Activity2/migrations/create_users_table.php';

$tbl = new UserTable();
$result = $tbl->up();
echo json_encode($result);



?>