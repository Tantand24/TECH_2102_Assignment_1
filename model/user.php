<?php 
class User{
    private $connDB;
    public $id;
    public $username;
    public $email;
    public $password;

    public function __construct($db){
        $this->connDB = $db;
    }

    public function read(){
        $query = "SELECT * FROM users";
        $result = $this->connDB->query($query);
        
        return $result;
    }

    public function create(){
        $query = "INSERT INTO users(username, password, email) VALUES('{$this->username}', '{$this->email}', '{$this->password}')";
        $result = $this->connDB->query($query);

        return $result;
    }

    public function user(){
        $query = "SELECT * FROM users WHERE username='{$this->username}' LIMIT 1" ;
        $result = $this->connDB->query($query);

        return mysqli_num_rows($result);
    }

    public function getUser(){
        $query = "SELECT * FROM users WHERE username='{$this->username}' LIMIT 1" ;
        $result = mysqli_fetch_assoc($this->connDB->query($query));

        return $result;
    }
}
?>