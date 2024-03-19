<?php
include $_SERVER['DOCUMENT_ROOT']. '/Integrative_Programming/Activity2-3/migrations/create_users_table.php';

$tbl = new UserTable();
$result = $tbl->up();
echo json_encode($result);



?>