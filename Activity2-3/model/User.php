<?php
include $_SERVER['DOCUMENT_ROOT'].'/Integrative_Programming/Activity2-3/database/database.php';
header('Content-Type: application/json');

class UserModel extends Db{

  public function Create(array $params){

    $array = ['name', 'email', 'password', 'token'];
    
      foreach($array as $key){
        if(empty($params[$key])){
          return ['message' => "{$key} is required"];
        }
      }

    $name = $params['name'];
    $email = $params['email'];
    $password = $params['password'];
    $token = $params['token'];

      $checkMail = $this->conn->query("SELECT * FROM users WHERE email='$email'");

        if($checkMail->num_rows > 0){
          return ['message' => 'email is already existed'];
        }
        
          $isInserted = $this->conn->query("INSERT INTO users (name, email, password, token)
            VALUES ('$name','$email','$password','$token')
          ");

            if($isInserted){
              return ['message' => 'user inserted successfully'];
            }
  }

  public function getAll(){

    $getAll = $this->conn->query("SELECT * FROM users");

    if($getAll->num_rows > 0)
      $result = $getAll->fetch_all(MYSQLI_ASSOC);
        return $result;
  }

  public function Search(array $params){
    
    if(empty($params['email'])){
      return ['message' => 'email is required'];
    }

    $email = $params['email'] ?? '';
      $isSearch = $this->conn->query("SELECT * FROM users WHERE email LIKE '%$email%'");

        if($isSearch->num_rows > 0){
          $result = $isSearch->fetch_all(MYSQLI_ASSOC);
          return $result;
        }
  }
}

?>