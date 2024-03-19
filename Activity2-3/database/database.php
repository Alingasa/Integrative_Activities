<?php

class Db {

  public $conn;

  public function __construct()
  {
    $this->conn = new mysqli('localhost', 'root', '');
      $this->conn->query("CREATE DATABASE IF NOT EXISTS api_db");
        $this->conn->query("USE api_db");
          echo $this->conn->error;
  }
}




?>