<?php
include "model/Student.php";
include_once ("config/Database.php");

class StudentController{
    private $studentModel;

    public function __construct(){
        $database = new Database();
        $db = $database->connect();
        $this->studentModel = new Student($db);
    }

     public function addStudent($studentName, $studentEmail){
        $this->taskModel->task = $task;
        $result = $this->taskModel->create();

        if($result){
            $_SESSION["info"]="Task added successfully to database";
            $_SESSION["is_successful"]=true;
        } else {
            $_SESSION["info"]="Task failed be added to database";
            $_SESSION["is_successful"]=false;
        }

        header("Location:" . $_SERVER['PHP_SELF']);
        exit();
    }

}