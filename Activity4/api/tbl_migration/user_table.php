<?php
include $_SERVER['DOCUMENT_ROOT']. '/Integrative_Programming/Activity4/migrations/create_users_table.php';

$tbl = new UserTable();
$result = $tbl->up();
echo json_encode($result);



?>