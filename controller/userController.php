<?php
require_once "../model/userModel.php";
require_once "..model/userView.php";
class UserController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    public function validateUser($user){
       $acces = false;
       if ($this->model->searchUser($user)){
        $acces = true;
       }
       return $acces;
    }

    public function showForm(){
        $this->view->showForm();
    }
}


?>