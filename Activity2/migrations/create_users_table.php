<?php
include $_SERVER['DOCUMENT_ROOT']. '/Assignment_IntegrativeProgramming/Activity2/database/database.php';
header('Content-Type: application/json');

class UserTable extends Db{

  public function up(){

    $isCreated = $this->conn->query("CREATE TABLE IF NOT EXISTS users(
      id int auto_increment primary key,
      name varchar(255) not null,
      email varchar(255) not null,
      password varchar(255) not null,
      token varchar(255)
    )engine=Innodb");
    
      if($isCreated == true){
        return ['message' => 'users table created successfully'];
      }
  }
}

?>