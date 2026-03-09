<?php
    include ('controller/UserController.php');
    session_start();
    $controller = new UserController();

    $controller->index();
?>