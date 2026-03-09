<?php
include "model/User.php";
include_once ("config/Database.php");

class UserController{
    private $UserModel;

    public function __construct(){
        $database = new Database();
        $db = $database->connect();
        $this->UserModel = new User($db);
    }

    public function addUser($User){
        $this->UserModel->user = $user;
        $result = $this->UserModel->create();

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

    public function deleteUser($id){
        $this->UserModel->id = $id;
        $result = $this->UserModel->delete();

        if($result){
            $_SESSION["info"]="Task deleted successfully from database";
            $_SESSION["is_successful"]=true;
        } else {
            $_SESSION["info"]="Task failed to be deleted from database";
            $_SESSION["is_successful"]=false;
        }

        header("Location:" . $_SERVER['PHP_SELF']);
        exit();
    }

    public function index(){
        include "view/HomePageView.php";
    }

    public function Dashboard(){
        include "view/DashboardView.php";
    }

    public function LoginPage(){
        include "view/LoginView.php";
    }

    public function LogoutPage(){
        include "view/LogoutView.php";
    }

    public function SignupPage(){
        include "view/SignupView.php";
    }
}
?>