<?php
    require_once('view.php');
    class UserController
    {
        private $userModel;
        public function __construct($userModel)
        {
            $this->userModel = $userModel;
        }

        public function ShowUsers()
        {
            $users = $this->userModel->get_all_users();
            $data = array("users"=>$users);
            $view = new View("usersView.php");
            echo $view->render($data);
        }

        public function ShowOneUser($id)
        {
            $user = $this->userModel->get_user_by_id($id);
            $data = array("user"=>$user);
            $view = new View("userView.php");
            echo $view->render($data);
        }
    }
?>