<?php
    include 'controller/StudentController.php';
    include ('controller/UserController.php');
    session_start();

    $controller = new UserController();
    $studentController = new StudentController();

    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['add_student'])){
            $studentName = $_POST['studentName'];
            $studentEmail = $_POST['studentEmail'];

            $studentController->addStudent($studentName, $studentEmail);
        } else if(isset($_POST['delete'])){
            $studentId = $_POST['id'];

            $studentController->deleteStudent($_POST['id']); 
        }
    }


    $controller->Dashboard();
?>