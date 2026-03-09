<?php
include_once "model/Student.php";
include_once ("config/Database.php");

class StudentController{
    private $studentModel;

    public function __construct(){
        $database = new Database();
        $db = $database->connect();
        $this->studentModel = new Student($db);
    }

     public function addStudent($studentName, $studentEmail){
        $this->studentModel->studentName = $studentName;
        $this->studentModel->studentEmail = $studentEmail;
        $result = $this->studentModel->create();

        if($result){
            $_SESSION["info"]="Student added successfully to database";
            $_SESSION["is_successful"]=true;
        } else {
            $_SESSION["info"]="Student failed be added to database";
            $_SESSION["is_successful"]=false;
        }

    }

    public function deleteStudent($id){
        $this->studentModel->studentID = $id;
        $result = $this->studentModel->delete();

    }

    public function getStudents(){
        $result = $this->studentModel->read();
        return $result;
    }
}