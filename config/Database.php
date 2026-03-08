<?php
class Database{
    private $host = "localhost";
    private $db_name = "assignment";
    private $username = "root";
    private $password = "";
    private $connDB;

    public function connect(){
        $this->connDB = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->db_name
            );
        return $this->connDB;
    }
}
?>