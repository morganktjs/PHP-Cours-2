<?php
    require_once('view.php');
    class Controller
    {
        protected function RenderTemplateWithContent($title, $content)
        {
            $data = array("title"=>$title, "content"=>$content);
            $view = new View("template.php");
            echo $view->render($data);
        }
    }
?>