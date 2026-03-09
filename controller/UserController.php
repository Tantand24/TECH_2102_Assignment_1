<?php
include "model/User.php";
include_once 'model/Student.php';
include_once ("config/Database.php");

class UserController{
    private $UserModel;
    private $StudentModel;

    public function __construct(){
        $database = new Database();
        $db = $database->connect();
        $this->UserModel = new User($db);
        $this->StudentModel = new Student($db);
    }

    public function addUser($username, $email, $password){
        $this->UserModel->username = $username;
        $this->UserModel->email = $email;
        $this->UserModel->password = $password;

        $result = $this->UserModel->create();
    }

    public function checkUser($username){
        $this->UserModel->username = $username;

        //check if user exist
        $check = $this->UserModel->user();
        if($check != 0){
            return true;
        } else {
            return false;
        }
    }

    public function getUser($username){
        //get user
        $result = $this->UserModel->getUser();
        return $result;
    }

    public function index(){
        include "view/HomePageView.php";
    }

    public function Dashboard(){
        $studentList = $this->StudentModel->read();

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