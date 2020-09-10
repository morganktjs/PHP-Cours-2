<?php
    require_once('view.php');
    require_once('controller.php');
    class UserController extends Controller
    {
        private $userModel;
        private const SHOW_USER_TITLE = "Les usagers";
        public function __construct($userModel)
        {
            $this->userModel = $userModel;
        }

        public function ShowUsers()
        {
            $users = $this->userModel->get_all_users();
            $data = array("users"=>$users);
            $view = new View("usersView.php");
            $content = $view->render($data);
            $this->RenderTemplateWithContent(self::SHOW_USER_TITLE, $content);
        }

        public function ShowOneUser($id)
        {
            $user = $this->userModel->get_user_by_id($id);
            $data = array("user"=>$user);
            $view = new View("userView.php");
            $content = $view->render($data);
            $this->RenderTemplateWithContent(self::SHOW_USER_TITLE, $content);
        }
    }
?>