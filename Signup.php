<?php
    include ('controller/UserController.php');
    session_start();
    $_SESSION['error'] = '';
    $controller = new UserController();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        if($password != $confirmpassword){
            //error message
            $_SESSION['error'] = "password does not match";
        }else{
            //check if user exist
            if($controller->checkUser($username)){
                //error message
                $_SESSION['error'] = "username taken";
            
            }else{
                //hashpassword
                $passwordhash = password_hash($password, PASSWORD_BCRYPT);
                //add user
                $controller->addUser($username, $passwordhash, $email);

                $_SESSION['isLogin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['error'] = '';
                header("Location: Dashboard.php");
            }
        }
    }

    $controller->SignupPage();
?>