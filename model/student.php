<?php 
class Student{
    private $connDB;
    public $studentID;
    public $studentName;
    public $studentEmail;

    public function __construct($db){
        $this->connDB = $db;
    }

    public function read(){
        $query = "SELECT * FROM students";
        $result = $this->connDB->query($query);
        
        return $result;
    }

    public function create(){
        $query = "INSERT INTO students(name email) VALUES('{$this->studentName}', '{$this->studentEmail}')";
        $result = $this->connDB->query($query);

        return $result;
    }

    public function delete(){
        $query = "DELETE FROM students WHERE id = ". $this->studentID;
        return $this->connDB->query($query);
    }
}
?>