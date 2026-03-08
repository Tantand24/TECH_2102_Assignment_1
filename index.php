<?php
    include "controller/UserController.php";
    session_start();
    
    $controller = new TaskController();

    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['add_task'])){
            $controller->addTask($_POST['task']); 
        } else if(isset($_POST['complete_task'])){
            $controller->updateTask($_POST['id'], 1); 
        } else if(isset($_POST['undo_complete_task'])){
            $controller->updateTask($_POST['id'], 0); 
        } else if(isset($_POST['delete'])){
            $controller->deleteTask($_POST['id']); 
        }
    }
    $controller->index();
?>