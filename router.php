<?php 
require_once "controller/userController.php";
require_once "controller/gamesController.php";
require_once "controller/userController.php";

if (isset($_GET["user"])){
    $user = new UserController();
    $user->validateUser($_GET["user"]);

}

?>