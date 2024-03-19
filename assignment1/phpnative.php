<?php
header('Content-type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

class Db {
    public $conn;
    protected $servername = 'localhost';
    protected $username = 'root';
    protected $password = '';
    public $dbName = 'books';

    public function Db_connection(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
       
        $this->conn->query("USE $this->dbName");

        $result = $this->conn->query("SELECT * FROM books");

        if($result->num_rows > 0){
            $posts = $result->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }else{
            return []; 
        }
    }
}

$db = new Db();
$data = $db->Db_connection();
echo json_encode($data);
?>


