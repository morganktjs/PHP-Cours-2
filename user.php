<?php
    require_once("userModel.php");
    require_once("userController.php");

    $userModel = new UserModel();
    $userController = new UserController($userModel);
    if(!isset($_GET["id"]))
    {
        $userController->ShowUsers();
    }
    else 
    {
        $userController->ShowOneUser($_GET["id"]);
    }
?>