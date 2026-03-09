<?php
    include ('controller/UserController.php');
    session_start();
    $_SESSION['error'] = '';
    $controller = new UserController();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($controller->checkUser($username)){
            $user = $controller->getUser($username);

            if(password_verify($password, $user['password'])){
                $_SESSION['isLogin'] = true;
                $_SESSION['username'] = $user['username'];
                $_SESSION['error'] = '';
                header("Location: Dashboard.php");
            } else {
                $_SESSION['error'] = "Invalid username or password.";
            }
        }
    }

    $controller->LoginPage();
?>